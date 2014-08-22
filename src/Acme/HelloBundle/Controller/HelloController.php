<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HelloController extends Controller
{
    public function indexAction($name){
        return new Response("<html><body>Hello '$name'!</body></html>");
    }
}
