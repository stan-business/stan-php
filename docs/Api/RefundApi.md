# Stan\RefundApi

All URIs are relative to https://api.stan-app.fr/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](RefundApi.md#create) | **POST** /refunds | Create a refund
[**getRefund()**](RefundApi.md#getRefund) | **GET** /refunds/{refund_id} | Get a refund
[**getRefunds()**](RefundApi.md#getRefunds) | **GET** /refunds | Get all refunds


## `create()`

```php
create($refund_request_body): \Stan\Model\Refund
```

Create a refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: stan_basic_auth
$config = Stan\Configuration::getDefaultConfiguration()
              ->setClientId('YOUR_API_CLIENT_ID')
              ->setClientSecret('YOUR_API_CLIENT_SECRET');

$stan_client = new Stan\Api\StanClient($config);
$refund_request_body = new \Stan\Model\RefundRequestBody(); // \Stan\Model\RefundRequestBody

try {
    $result = $stan_client->refundApi->create($refund_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_request_body** | [**\Stan\Model\RefundRequestBody**](../Model/RefundRequestBody.md)|  | [optional]

### Return type

[**\Stan\Model\Refund**](../Model/Refund.md)

### Authorization

[stan_basic_auth](../../README.md#stan_basic_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRefund()`

```php
getRefund($refund_id): \Stan\Model\Refund
```

Get a refund

Get a refund with an UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: stan_basic_auth
$config = Stan\Configuration::getDefaultConfiguration()
              ->setClientId('YOUR_API_CLIENT_ID')
              ->setClientSecret('YOUR_API_CLIENT_SECRET');


$apiInstance = new Stan\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_id = 'refund_id_example'; // string | UID of the refund

try {
    $result = $apiInstance->getRefund($refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->getRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **string**| UID of the refund |

### Return type

[**\Stan\Model\Refund**](../Model/Refund.md)

### Authorization

[stan_basic_auth](../../README.md#stan_basic_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRefunds()`

```php
getRefunds(): \Stan\Model\Refund[]
```

Get all refunds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: stan_basic_auth
$config = Stan\Configuration::getDefaultConfiguration()
              ->setClientId('YOUR_API_CLIENT_ID')
              ->setClientSecret('YOUR_API_CLIENT_SECRET');


$apiInstance = new Stan\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRefunds();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->getRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Stan\Model\Refund[]**](../Model/Refund.md)

### Authorization

[stan_basic_auth](../../README.md#stan_basic_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
