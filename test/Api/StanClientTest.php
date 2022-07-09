<?php

namespace Stan\Test\Api;

use DateTimeImmutable;
use GuzzleHttp\Psr7\Response;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\Exception;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\Strategy\MockClientStrategy;
use Http\Mock\Client;

use Stan\Api\StanClient;
use Stan\Configuration;
use Stan\ApiException;
use Stan\Model\CustomerRequestBody;

use stdClass;

class StanClientTest extends TestCase
{
    protected function setUp(): void
    {
        HttpClientDiscovery::prependStrategy(MockClientStrategy::class);
    }

    public function testBasicClient()
    {
        $httpClient = new Client();
        $httpClient->addResponse(
            new Response(200, ['X-Foo' => 'Bar'], "{\"foo\":\"bar\"}")
        );

        $config = new Configuration();
        $config = $config
            ->setClientId("client_id")
            ->setClientSecret("client_secret");

        $client = new StanClient($config);
        $client->setHttpClient($httpClient);

        $client->customerApi->create(new CustomerRequestBody());

        foreach ($httpClient->getRequests() as $request) {
            $basic = $request->getHeaders()['Authorization'][0];
            $this->assertSame("Basic Y2xpZW50X2lkOmNsaWVudF9zZWNyZXQ=", $basic);
        }
    }

    public function testAccessTokenClient()
    {
        $httpClient = new Client();
        $httpClient->addResponse(
            new Response(200, ['X-Foo' => 'Bar'], "{\"foo\":\"bar\"}")
        );

        $config = new Configuration();
        $config = $config->setAccessToken("bearer_token");

        $client = new StanClient($config);
        $client->setHttpClient($httpClient);

        $client->userApi->getUser();

        foreach ($httpClient->getRequests() as $request) {
            $bearer = $request->getHeaders()['Authorization'][0];
            $this->assertSame("Bearer bearer_token", $bearer);
        }
    }

    public function testClientWithExtraHeaders()
    {
        $httpClient = new Client();
        $httpClient->addResponse(
            new Response(200, ['X-Foo' => 'Bar'], "{\"foo\":\"bar\"}")
        );

        $config = new Configuration();
        $config = $config
            ->setClientId("client_id")
            ->setClientSecret("client_secret");
        $client = new StanClient($config, ['Custom-Header' => 'value']);
        $client->setHttpClient($httpClient);

        $client->customerApi->create(new CustomerRequestBody());

        foreach ($httpClient->getRequests() as $request) {
            $headers = $request->getHeaders();
            $this->assertSame('application/json', $headers['Accept'][0]);
            $this->assertSame('application/json', $headers['Content-Type'][0]);
            $this->assertSame('value', $headers['Custom-Header'][0]);
        }
    }

    public function testClientErrorHandling()
    {
        $httpClient = new Client();
        $httpClient->addResponse(
            new Response(404)
        );
        $httpClient = new PluginClient($httpClient, [new ErrorPlugin()]);

        $config = new Configuration();
        $config = $config
            ->setClientId("client_id")
            ->setClientSecret("client_secret");
        $client = new StanClient($config);
        $client->setHttpClient($httpClient);

        $this->expectException(ApiException::class);
        $client->customerApi->create(new CustomerRequestBody());
    }

    public function testServerErrorHandling()
    {
        $httpClient = new Client();
        $httpClient->addResponse(
            new Response(500)
        );
        $httpClient = new PluginClient($httpClient, [new ErrorPlugin()]);

        $config = new Configuration();
        $config = $config
            ->setClientId("client_id")
            ->setClientSecret("client_secret");
        $client = new StanClient($config);
        $client->setHttpClient($httpClient);

        $this->expectException(ApiException::class);
        $client->customerApi->create(new CustomerRequestBody());
    }
}