<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return new Response("Hello, symphony.");
    }

    public function helloAction($name)
    {
        return $this->render('AcmeHelloBundle:Default:index.html.twig', array('name' => $name));
    }
}
