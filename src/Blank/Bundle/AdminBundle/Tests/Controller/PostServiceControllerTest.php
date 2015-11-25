<?php

namespace Blank\Bundle\AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostServiceControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/post_svc/get/16');
        $this->assertTrue($crawler->filter('html:contains("16")')->count() > 0);

        echo $client->getResponse();

        $crawler = $client->request('GET', '/admin/post_svc/get/17');
        $this->assertTrue($crawler->filter('html:contains("17")')->count() > 0);

    }
}
