<?php

namespace CarpeDeumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CarpeDeumBundle:Default:index.html.twig');
    }
}
