<?php

namespace Stan\Test\Api;

use Stan\Api\StanClient;
use Stan\Configuration;
use Http\Mock\Client;

use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * @var StanClient|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $client;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = $this
            ->getMockBuilder(StanClient::class)
            ->disableOriginalConstructor()
            ->getMock();
    }
}