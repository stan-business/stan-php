# Stan\ConnectApi

All URIs are relative to https://api.stan-app.fr/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**userConnect()**](ConnectApi.md#userConnect) | **POST** /oauth/token | Create an access token to request user&#39;s infos


## `userConnect()`

```php
userConnect($connect_access_token_request_body): \Stan\Model\ConnectAccessToken
```

Create an access token to request user's infos

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Stan\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connect_access_token_request_body = new \Stan\Model\ConnectAccessTokenRequestBody(); // \Stan\Model\ConnectAccessTokenRequestBody

try {
    $result = $apiInstance->userConnect($connect_access_token_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->userConnect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connect_access_token_request_body** | [**\Stan\Model\ConnectAccessTokenRequestBody**](../Model/ConnectAccessTokenRequestBody.md)|  | [optional]

### Return type

[**\Stan\Model\ConnectAccessToken**](../Model/ConnectAccessToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
