<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        $now = new \DateTime();
        return new Response("<html><body>Hello $name at {$now->format('Y-m-d H:i:s')}!</body></html>");
    }

    /**
     * @Route("/hello/{name}", name="acme_hello_show")
     * @Template()
     */
    public function helloAction(Request $request, $name)
    {
        return array('name' => $name, "date" => new \DateTime());
    }
}
