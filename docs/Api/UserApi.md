# Stan\UserApi

All URIs are relative to https://api.stan-app.fr/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUser()**](UserApi.md#getUser) | **GET** /sessions/users | Get user infos


## `getUser()`

```php
getUser(): \Stan\Model\User[]
```

Get user infos

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: stan_connect_auth
$config = Stan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$stan_client = new Stan\Api\StanClient($config);

try {
    $result = $stan_client->userApi->getUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Stan\Model\User[]**](../Model/User.md)

### Authorization

[stan_connect_auth](../../README.md#stan_connect_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
