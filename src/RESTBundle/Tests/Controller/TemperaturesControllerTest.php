<?php

namespace RESTBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TemperaturesControllerTest extends WebTestCase
{
    public function testCurrenttemperatures()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/temperatures/current');
    }

}
