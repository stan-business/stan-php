<?php

namespace Stan\Api;

use Stan\Configuration;
use Stan\ApiException;
use Stan\ObjectSerializer;

use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Client\Exception\NetworkException;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Client\Exception;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\Authentication;
use Http\Message\Authentication\BasicAuth;
use Http\Message\Authentication\Bearer;
use Http\Message\RequestFactory;
use Http\Message\UriFactory;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

use stdClass;

class StanClient
{
    /**
     * @var HttpClient $httpClient
     */
    private $httpClient;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var RequestFactory $requestFactory
     */
    private $requestFactory;

    /**
     * @var UriFactory $uriFactory
     */
    private $uriFactory;

    /**
     * @var ApiSettingsApi
     */
    public $apiSettingsApi;
    /**
     * @var ConnectApi
     */
    public $connectApi;
    /**
     * @var CustomerApi
     */
    public $customerApi;
    /**
     * @var PaymentApi
     */
    public $paymentApi;
    /**
     * @var RefundApi
     */
    public $refundApi;
    /**
     * @var UserApi
     */
    public $userApi;

    /**
     * @var string $clientId
     */
    public $clientId;

    /**
     * @var string $clientSecret
     */
    public $clientSecret;

    /**
     * @var array $extraRequestHeaders
     */
    private $extraRequestHeaders;

    /**
     * StanClient constructor.
     *
     * @param Configuration $config API config
     */
    public function __construct(Configuration $config = null, $extraRequestHeaders = null)
    {
        $this->apiSettingsApi = new ApiSettingsApi($this);
        $this->connectApi = new ConnectApi($this);
        $this->customerApi = new CustomerApi($this);
        $this->paymentApi = new PaymentApi($this);
        $this->refundApi = new RefundApi($this);
        $this->userApi = new UserApi($this);

        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->extraRequestHeaders = $extraRequestHeaders;

        $this->httpClient = $this->getDefaultHttpClient();
        $this->requestFactory = MessageFactoryDiscovery::find();
        $this->uriFactory = UriFactoryDiscovery::find();
    }

    /**
     * Sets the HTTP client.
     *
     * @param HttpClient $httpClient
     */
    public function setHttpClient(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * Sets the request factory.
     *
     * @param RequestFactory $requestFactory
     */
    public function setRequestFactory(RequestFactory $requestFactory)
    {
        $this->requestFactory = $requestFactory;
    }

    /**
     * Sets the URI factory.
     *
     * @param UriFactory $uriFactory
     */
    public function setUriFactory(UriFactory $uriFactory)
    {
        $this->uriFactory = $uriFactory;
    }

    /**
     * Set the client configuration
     * 
     * @param Configuration $config
     */
    public function setConfiguration(Configuration $config)
    {
        $this->config = $config;
    }

    /**
     * Returns authentication parameters
     *
     * @return Authentication
     */
    private function getAuth()
    {
        if (!empty($this->config->getClientId()) && !empty($this->config->getClientSecret())) {
            return new BasicAuth($this->config->getClientId(), $this->config->getClientSecret());
        } elseif (!empty($this->config->getAccessToken())) {
            return new Bearer($this->config->getAccessToken());
        }
        return null;
    }

    /**
     * Authenticates a request object
     * @param RequestInterface $request
     *
     * @return RequestInterface
     */
    private function authenticateRequest(RequestInterface $request)
    {
        $auth = $this->getAuth();
        return $auth ? $auth->authenticate($request) : $request;
    }

    /**
     * @param string              $method
     * @param string|UriInterface $uri
     * @param array|string|null   $body
     *
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     */
    public function sendRequest($method, $path, $customHeaders = null, $body = null)
    {
        $request = $this->createRequest($method, $path, $customHeaders, $body);
        try {
            try {
                $response = $this->httpClient->sendRequest($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody()->getContents() : null
                );
            } catch (NetworkException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            } catch (\Exception $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody()->getContents() : null
                );
            } 

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()->getContents()
                );
            }

            return $response->getBody()->getContents();
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * @return array
     */
    private function getRequestHeaders()
    {
        return array_merge(
            [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
            $this->extraRequestHeaders ?: []
        );
    }

    /**
     * @return Request
     */
    private function createRequest($method, $path, $customHeaders = null, $body = null) {
        $headers = $this->getRequestHeaders();

        if (!is_null($customHeaders)) {
            $headers = array_merge(
                $headers,
                $customHeaders
            );
        }

        if ($this->config->getUserAgent()) {
            $headers['User-Agent'] = $this->config->getUserAgent();
        }

        $uri = $this->uriFactory->createUri($this->config->getHost() . "$path");

        $httpBody = null;
        if (!is_null($body)) {
            $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($body));
        }

        $request = $this->authenticateRequest(
            $this->requestFactory->createRequest($method, $uri, $headers, $httpBody)
        );

        return $request;
    }

    /**
     * @return HttpClient
     */
    private function getDefaultHttpClient()
    {
        return new PluginClient(
            HttpClientDiscovery::find(),
            [new ErrorPlugin()]
        );
    }
}