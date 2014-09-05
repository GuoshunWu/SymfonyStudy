<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeHelloBundle:Default:index.html.twig');
    }

    public function helloAction($name)
    {
        return $this->render('AcmeHelloBundle:Default:hello.html.twig', array('name' => $name, 'now'=>date('Y-m-d H:i:s')));
    }
}
