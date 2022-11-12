<?php
/**
 * PaymentApi
 * PHP version 7.3
 *
 * @category Class
 * @package  Stan
 * @author Brightweb
 * @link https://stan-business.fr
 */

/**
 * Stan API
 *
 * Stan Client API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Stan\Api;

use Stan\ApiException;
use Stan\Configuration;
use Stan\HeaderSelector;
use Stan\ObjectSerializer;

use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\RequestFactory;
use Http\Message\UriFactory;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

/**
 * PaymentApi Class Doc Comment
 *
 * @category Class
 * @package  Stan
 * @author Brightweb
 * @link https://stan-business.fr
 */
class PaymentApi extends StanResource
{
    /**
     * Operation create
     *
     * Create a payment invoice
     *
     * @param  \Stan\Model\PaymentRequestBody $payment_request_body payment_request_body (optional)
     *
     * @throws \Stan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Stan\Model\PreparedPayment
     */
    public function create($payment_request_body = null)
    {
        $content = $this->client
            ->sendRequest('POST', '/payments', null, $payment_request_body);
        return ObjectSerializer::deserialize($content, '\Stan\Model\PreparedPayment', []);
    }

    /**
     * Operation getPayment
     *
     * Get a payment
     *
     * @param  string $payment_id UID of the payment (required)
     *
     * @throws \Stan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Stan\Model\Payment
     */
    public function getPayment($payment_id)
    {
        $resourcePath = str_replace(
            '{' . 'payment_id' . '}',
            ObjectSerializer::toPathValue($payment_id),
            '/payments/{payment_id}'
        );
        $content = $this->client->sendRequest('GET', $resourcePath);
        return ObjectSerializer::deserialize($content, '\Stan\Model\Payment', []);
    }

    /**
     * Operation getPayments
     *
     * Get all payments
     *
     *
     * @throws \Stan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Stan\Model\Payment[]
     */
    public function getPayments()
    {
        $resBody = $this->client->sendRequest('GET', '/payments');
        return ObjectSerializer::deserialize($resBody, '\Stan\Model\Payment[]', []);
    }
}
