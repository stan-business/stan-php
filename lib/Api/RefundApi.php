<?php
/**
 * RefundApi
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

/**
 * RefundApi Class Doc Comment
 *
 * @category Class
 * @package  Stan
 * @author Brightweb
 * @link https://stan-business.fr
 */
class RefundApi extends StanREsource
{

    /**
     * Operation create
     *
     * Create a refund
     *
     * @param  \Stan\Model\RefundRequestBody $refund_request_body refund_request_body
     *
     * @throws \Stan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Stan\Model\Refund
     */
    public function create($refund_request_body)
    {
        $content = $this->client
            ->sendRequest('POST', '/v1/refunds', null, $refund_request_body);
        return ObjectSerializer::deserialize($content, '\Stan\Model\Refund', []);
    }

    /**
     * Operation getRefund
     *
     * Get a refund
     *
     * @param  string $refund_id UID of the refund (required)
     *
     * @throws \Stan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Stan\Model\Refund
     */
    public function getRefund($refund_id)
    {
        $resourcePath = str_replace(
            '{' . 'refund_id' . '}',
            ObjectSerializer::toPathValue($refund_id),
            '/v1/refunds/{refund_id}'
        );
        $content = $this->client->sendRequest('GET', $resourcePath);
        return ObjectSerializer::deserialize($content, '\Stan\Model\Refund', []);
    }

    /**
     * Operation getRefunds
     *
     * Get all refunds
     *
     *
     * @throws \Stan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Stan\Model\Refund[]
     */
    public function getRefunds()
    {
        $content = $this->client
            ->sendRequest('GET', '/v1/refunds');
        return ObjectSerializer::deserialize($content, '\Stan\Model\Refund[]', []);
    }
}
