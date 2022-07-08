# Stan\ConnectApi

All URIs are relative to https://api.stan-app.fr/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](ConnectApi.md#create) | **POST** /oauth/token | Create an access token to request user&#39;s infos


## `create()`

```php
create($connect_access_token_request_body): \Stan\Model\ConnectAccessToken
```

Create an access token to request user's infos

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: stan_basic_auth
$config = Stan\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_API_CLIENT_ID')
              ->setPassword('YOUR_API_CLIENT_SECRET');

$stan_client = new Stan\Api\StanClient($config);

$connect_access_token_request_body = new \Stan\Model\ConnectAccessTokenRequestBody(); // \Stan\Model\ConnectAccessTokenRequestBody

try {
    $result = $stan_client->connectApi->createConnectAccessToken($connect_access_token_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->createConnectAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connect_access_token_request_body** | [**\Stan\Model\ConnectAccessTokenRequestBody**](../Model/ConnectAccessTokenRequestBody.md)|  | [optional]

### Return type

[**\Stan\Model\ConnectAccessToken**](../Model/ConnectAccessToken.md)

### Authorization

[stan_basic_auth](../../README.md#stan_basic_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
