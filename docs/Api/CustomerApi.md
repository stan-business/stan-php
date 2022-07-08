# Stan\CustomerApi

All URIs are relative to https://api.stan-app.fr/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](CustomerApi.md#create) | **POST** /customers | Create a new customer


## `create()`

```php
create($customer_request_body): \Stan\Model\Customer
```

Create a new customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: stan_basic_auth
$config = Stan\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_API_CLIENT_ID')
              ->setPassword('YOUR_API_CLIENT_SECRET');


$apiInstance = new Stan\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_request_body = new \Stan\Model\CustomerRequestBody(); // \Stan\Model\CustomerRequestBody

try {
    $result = $apiInstance->create($customer_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_request_body** | [**\Stan\Model\CustomerRequestBody**](../Model/CustomerRequestBody.md)|  | [optional]

### Return type

[**\Stan\Model\Customer**](../Model/Customer.md)

### Authorization

[stan_basic_auth](../../README.md#stan_basic_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
