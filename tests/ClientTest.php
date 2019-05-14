<?php

namespace XyzQ\FirstComposer\Tests;

use PHPUnit\Framework\TestCase;
use XyzQ\FirstComposer\Client;

class ClientTest extends TestCase
{
    public function testAddTogether()
    {
        $client = new Client(1, 2);
        $this->assertEquals(3, $client->addTogether());
    }
}
