<?php

namespace CarpeDeumBundle\Controller;

use CarpeDeumBundle\Entity\Place;
use CarpeDeumBundle\Entity\Time;
use GuzzleHttp\Client;
use pimax\FbBotApp;
use pimax\Messages\Message;
use pimax\Messages\MessageButton;
use pimax\Messages\MessageElement;
use pimax\Messages\QuickReply;
use pimax\Messages\StructuredMessage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MessengerBotController extends Controller
{
    /**
     * @Route("/messenger-webhook", name="messenger_webhook_test")
     * @Method("GET")
     */
    public function messengerWebhookAction(Request $request)
    {
        $challenge = $request->query->get('hub_challenge');

        return new Response($challenge);
    }

    /**
     * @Route("/messenger-webhook", name="messenger_message")
     * @Method("POST")
     */
    public function messengerMessageAction(Request $request)
    {
        $accessToken = $this->getParameter('messenger_access_token');
        $bot = new FbBotApp($accessToken);
        $data = json_decode($request->getContent(), true);

        if (empty($data['entry'][0]['messaging'])) {
            return new Response();
        }

        foreach ($data['entry'][0]['messaging'] as $message) {
            // Skipping delivery messages
            if (!empty($message['delivery'])) {
                continue;
            }

            $userId = $message['sender']['id'];
            $command = "";

            if (array_key_exists('message', $message)) {
                if (array_key_exists('text', $message['message'])) {
                    $response = new QuickReply($userId, 'Salut ! Partage ta géolocalisation et je te trouve une messe.', [
                        ['content_type' => 'location'],
                    ]);
                } elseif (array_key_exists('attachments', $message['message'])) {
                    $coordinates = $message['message']['attachments'][0]['payload']['coordinates'];
                    $response = $this->coordinatesReply($coordinates, $userId);
                }
            } elseif (array_key_exists('postback', $message)) {
                $postback =  $message['postback']['payload'];
                $response = $this->postbackReply($postback, $userId);
            } else {
                $response = new Message($userId, 'Je ne comprends pas.');
            }

            $bot->send($response);
        }

        return new Response();
    }

    protected function postbackReply($postback, $userId)
    {
        $now = new \DateTime();
        $placeId = str_replace('details:', '', $postback);
        $place = $this->get('cd.repository.place')->find($placeId);
        $timetable = $this->get('cd.repository.time')->findBy([
            'place' => $placeId,
            'dayOfWeek' => $now->format('w'),
        ]);

        $horaires = '';
        /** @var Time $time */
        foreach ($timetable as $time) {
            $horaires .= chr(10) . '- ' . Time::DAYS_OF_WEEK[$time->getDayOfWeek()] . ' ' . $time->getTime()->format('H:i') . ' (' .$time->getNotes() . ')';
        }

        return new Message($userId, 'Voilà les prochains horaires à ' . $place->getName() . ' : ' . $horaires);
    }

    protected function coordinatesReply($coordinates, $userId)
    {
        $places = $this->get('cd.repository.place')->findBy([
            'near_json' => [
                'shape' => json_encode([
                    'type'        => 'Point',
                    'coordinates' => [$coordinates['long'], $coordinates['lat']],
                ]),
                'distance' => 0.1,
            ], ],
            [],
            3
        );

        $elements = [];
        foreach ($places as $place) {
            /** @var Place $currentPlace */
            $currentPlace = $place;
            $elements[] = new MessageElement(
                $currentPlace->getName(),
                $currentPlace->getAddress1(),
                'http://mediaauto.carpedeum.fr/300x300'.$currentPlace->getPic(),
                [
                    new MessageButton(MessageButton::TYPE_POSTBACK, 'Horaires', "details:".$currentPlace->getId()),
                ],
                'https://geomesse.ghirardotti.fr'.$this->generateUrl('place_show', ['id' => $currentPlace->getId()])
            );
        }

        return new StructuredMessage($userId, StructuredMessage::TYPE_GENERIC, ['elements' => $elements]);
    }

    /**
     * Because of this : https://developers.facebook.com/docs/messenger-platform/thread-settings/domain-whitelisting.
     *
     * @Route("/domain-whitelisting", name="messenger_domain_whitelisting")
     * @Method("GET")
     */
    public function messengerDomainWhitelistingAction(Request $request)
    {
        $accessToken = $this->getParameter('messenger_access_token');
        $response = [
            'setting_type'        => 'domain_whitelisting',
            'whitelisted_domains' => ['https://geomesse.ghirardotti.fr'],
            'domain_action_type'  => 'add',
        ];

        $client = new Client(['base_uri' => 'https://graph.facebook.com/v2.6/me/']);
        $client->post('thread_settings', ['json' => $response, 'query' => ['access_token' => $accessToken]]);

        return new JsonResponse($response);
    }
}
