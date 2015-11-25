<?php

namespace Blank\Bundle\AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostServiceControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request(
          'POST',
          '/admin/post_svc/put',
          array(),
          array(),
          array(),
          '{"id":"17","name":"Test"}'
        );
        echo $client->getResponse();
        $this->assertTrue($crawler->filter('html:contains("16")')->count() > 0);


        //$crawler = $client->request('GET', '/admin/post_svc/get/17');
        //$this->assertTrue($crawler->filter('html:contains("17")')->count() > 0);

    }
}




/*//////////////////////////////////////////////////

request(
    $method,
    $uri,
    array $parameters = array(),
    array $files = array(),
    array $server = array(),
    $content = null,
    $changeHistory = true
)

*//////////////////////////////////////////////////
