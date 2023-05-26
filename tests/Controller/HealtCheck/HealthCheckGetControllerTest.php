<?php

namespace App\Tests\Controller\HealtCheck;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HealthCheckGetControllerTest extends WebTestCase
{
    public function test_health_check_exists(): void
    {
        $client = static::createClient();
        $client->xmlHttpRequest('GET', '/health-check');

        self::assertResponseIsSuccessful();
        $response = json_decode($client->getResponse()->getContent(), true);
        self::assertSame('ok', $response['status']);
        self::assertIsInt($response['number']);
    }
}
