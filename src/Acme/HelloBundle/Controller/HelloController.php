<?php

namespace Acme\HelloBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        $now = new \DateTime();
//        throw $this->createNotFoundException('The product does not exist');
        return $this->render("AcmeHelloBundle:Default:index.html.twig", [
            "name" => $name,
            "now" => $now->format('Y-m-d H:i:s')
        ]);
//        return new Response("<html><body>Hello $name at {$now->format('Y-m-d H:i:s')}!</body></html>");
    }

    /**
     * @Route("/hello/{name}", name="acme_hello_show")
     * @Template()
     */
    public function helloAction(Request $request, $name)
    {
        return array('name' => $name, "date" => new \DateTime());
    }

    public function jsonResAction(Request $request, $name = "Wu guoshun")
    {
        // create a JSON-response with a 200 status code
        return new JsonResponse(
            array(
                'name' => $name,
                'isXmlHttpRequest'=> $request->isXmlHttpRequest(),
                'preferredLanguage'=>$request->getPreferredLanguage(array("en_US", "zh_CN"))
            ),
            JsonResponse::HTTP_OK,
            array('Content-Type' => 'application/json')
        );
    }
}
