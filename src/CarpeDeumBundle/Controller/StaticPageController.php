<?php

namespace CarpeDeumBundle\Controller;

use CarpeDeumBundle\Form\Model\SearchForm;
use CarpeDeumBundle\Form\SearchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StaticPageController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function homeAction(Request $request)
    {
        $form = $this->createForm(SearchType::class);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            /** @var SearchForm $searchForm */
            $searchForm = $form->getData();
            $places = $this->get('cd.repository.place')->findBy(['city' => $searchForm->getLocation()]);
        }

        return [
            'searchForm' => $form->createView(),
            'places'     => isset($places) ? $places : [],
        ];
    }

    /**
     * @Route("/pwa", name="pwa")
     * @Template()
     */
    public function pwaAction()
    {
        return [];
    }

    /**
     * @Route("/privacy-policy", name="privacy")
     * @Template()
     */
    public function privacyPolicyAction()
    {
        return [];
    }
}
