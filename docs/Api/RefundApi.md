# Stan\RefundApi

All URIs are relative to https://api.stan-app.fr/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRefund()**](RefundApi.md#createRefund) | **POST** /refunds | Create a refund
[**fundRefundByID()**](RefundApi.md#fundRefundByID) | **GET** /refunds/{refund_id} | Get a refund
[**getRefunds()**](RefundApi.md#getRefunds) | **GET** /refunds | Get all refunds


## `createRefund()`

```php
createRefund($refund_request_body): \Stan\Model\Refund
```

Create a refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stan\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refund_request_body = new \Stan\Model\RefundRequestBody(); // \Stan\Model\RefundRequestBody

try {
    $result = $apiInstance->createRefund($refund_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_request_body** | [**\Stan\Model\RefundRequestBody**](../Model/RefundRequestBody.md)|  | [optional]

### Return type

[**\Stan\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fundRefundByID()`

```php
fundRefundByID($refund_id): \Stan\Model\Refund
```

Get a refund

Get a refund with an UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stan\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refund_id = 'refund_id_example'; // string | UID of the refund

try {
    $result = $apiInstance->fundRefundByID($refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->fundRefundByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **string**| UID of the refund |

### Return type

[**\Stan\Model\Refund**](../Model/Refund.md)

### Authorization

No authorization required

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
              ->setUsername('YOUR_API_CLIENT_ID')
              ->setPassword('YOUR_API_CLIENT_SECRET');


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
