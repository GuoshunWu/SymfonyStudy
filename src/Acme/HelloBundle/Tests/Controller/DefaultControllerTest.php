<?php

namespace Acme\HelloBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/hellodefault/Fabien');
        $this->assertTrue($crawler->filter('html:contains("Hello, Fabien")')->count() > 0);
    }
}
