<?php
/**
 * ApiSettings
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
 * ApiSettings Class Doc Comment
 *
 * @category Class
 * @package  Stan
 * @author Brightweb
 * @link https://stan-business.fr
 */
class ApiSettingsApi extends StanResource
{

    /**
     * Operation updateApiSettings
     *
     * Updates API settings
     *
     * @param  \Stan\Model\ApiSettingsRequestBody $api_settings_request_body api_settings_request_body
     *
     * @throws \Stan\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateApiSettings($api_settings_request_body)
    {
        $content = $this->client
            ->sendRequest('PUT', '/apis', null, $api_settings_request_body);
    }
}
