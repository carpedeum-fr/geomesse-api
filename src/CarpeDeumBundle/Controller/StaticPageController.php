<?php

namespace CarpeDeumBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaticPageController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function homeAction()
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
