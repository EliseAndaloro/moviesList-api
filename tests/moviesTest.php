<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;

class MoviesTest extends ApiTestCase
{
    public function testGetCollection(): void
    {
        static::createClient()->request('GET', '444/#/movies');

        //$this->assertResponseIsSuccessful();
        $this->assertResponseHeaderSame('content-type', 'application/ld+json');
    }
}
