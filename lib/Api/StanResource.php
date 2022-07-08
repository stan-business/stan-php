<?php

namespace Stan\Api;

use Http\Client\HttpClient;

abstract class StanResource
{
    /**
     * @var StanClient
     */
    protected $client;

    /**
     * StanResource constructor.
     *
     * @param StanClient $client
     */
    public function __construct(StanClient $client)
    {
        $this->client = $client;
    }
}