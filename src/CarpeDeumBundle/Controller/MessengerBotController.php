<?php

namespace CarpeDeumBundle\Controller;

use CarpeDeumBundle\Entity\Place;
use GuzzleHttp\Client;
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
        $message = json_decode($request->getContent(), true);
        $messaging = $message['entry'][0]['messaging'][0];
        $userId = $messaging['sender']['id'];
        $messageReceived = array_key_exists('text', $messaging['message']) ? $messaging['message']['text'] : null;
        $coordinates = array_key_exists('attachments', $messaging['message']) ? $messaging['message']['attachments'][0]['payload']['coordinates'] : null;

        if (isset($messageReceived)) {
            $response = [
                'recipient' => ['id' => $userId],
                'message'   => [
                    'text'          => 'Salut ! Partage ta géolocalisation et je te trouve une messe.',
                    'quick_replies' => [
                        [
                            'content_type' => 'location',
                        ],
                    ],
                ],
            ];
        } elseif (isset($coordinates)) {
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
                $currentPlace = $place[0];
                $elements[] = [
                    'title'          => $currentPlace->getName(),
                    'image_url'      => 'http://mediaauto.carpedeum.fr/300x300'.$currentPlace->getPic(),
                    'subtitle'       => $currentPlace->getAddress1(),
                    'default_action' => [
                        'type'                 => 'web_url',
                        'url'                  => 'https://geomesse.ghirardotti.fr'.$this->generateUrl('place_show', ['id' => $currentPlace->getId()]),
                        'messenger_extensions' => true,
                        'webview_height_ratio' => 'tall',
                        'fallback_url'         => 'https://geomesse.ghirardotti.fr'.$this->generateUrl('home'),
                    ],
                ];
            }

            $response = [
                'recipient' => ['id' => $userId],
                'message'   => [
                    'attachment' => [
                        'type'    => 'template',
                        'payload' => [
                            'template_type'     => 'list',
                            'top_element_style' => 'compact',
                            'elements'          => $elements,
                        ],
                    ],
                ],
            ];
        }

        $client = new Client(['base_uri' => 'https://graph.facebook.com/v2.6/me/']);
        $client->post('messages', ['json' => $response, 'query' => ['access_token' => $accessToken]]);

        return new JsonResponse($response);
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
