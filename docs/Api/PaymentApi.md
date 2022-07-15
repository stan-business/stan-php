# Stan\PaymentApi

All URIs are relative to https://api.stan-app.fr/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](PaymentApi.md#create) | **POST** /payments | Prepare a payment
[**findPaymentsByID()**](PaymentApi.md#findPaymentsByID) | **GET** /payments/{payment_id} | Get a payment
[**getPayments()**](PaymentApi.md#getPayments) | **GET** /payments | Get all payments


## `createPaymentInvoice()`

```php
create($payment_request_body): \Stan\Model\PreparedPayment
```

Create a payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: stan_basic_auth
$config = Stan\Configuration::getDefaultConfiguration()
              ->setClientId('YOUR_API_CLIENT_ID')
              ->setClientSecret('YOUR_API_CLIENT_SECRET');


$stan_client = new Stan\Api\StanClient($config);
$payment_request_body = new \Stan\Model\PaymentRequestBody(); // \Stan\Model\PaymentRequestBody

try {
    $result = $stan_client->paymentApi->create($payment_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_request_body** | [**\Stan\Model\PaymentRequestBody**](../Model/PaymentRequestBody.md)|  | [optional]

### Return type

[**\Stan\Model\PreparedPayment**](../Model/PreparedPayment.md)

### Authorization

[stan_basic_auth](../../README.md#stan_basic_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findPaymentsByID()`

```php
findPaymentsByID($payment_id): \Stan\Model\Payment
```

Get a payment

Get a payment with an UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: stan_basic_auth
$config = Stan\Configuration::getDefaultConfiguration()
              ->setClientId('YOUR_API_CLIENT_ID')
              ->setClientSecret('YOUR_API_CLIENT_SECRET');


$apiInstance = new Stan\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 'payment_id_example'; // string | UID of the payment

try {
    $result = $apiInstance->findPaymentsByID($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->findPaymentsByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**| UID of the payment |

### Return type

[**\Stan\Model\Payment**](../Model/Payment.md)

### Authorization

[stan_basic_auth](../../README.md#stan_basic_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayments()`

```php
getPayments(): \Stan\Model\Payment[]
```

Get all payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: stan_basic_auth
$config = Stan\Configuration::getDefaultConfiguration()
              ->setClientId('YOUR_API_CLIENT_ID')
              ->setClientSecret('YOUR_API_CLIENT_SECRET');


$apiInstance = new Stan\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPayments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->getPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Stan\Model\Payment[]**](../Model/Payment.md)

### Authorization

[stan_basic_auth](../../README.md#stan_basic_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
