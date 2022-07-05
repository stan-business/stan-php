# Stan\SettingsApi

All URIs are relative to https://api.stan-app.fr/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateAPISetting()**](SettingsApi.md#updateAPISetting) | **PUT** /apis | Updates API settings


## `updateAPISetting()`

```php
updateAPISetting($api_setting_request_body)
```

Updates API settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: stan_basic_auth
$config = Stan\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_API_CLIENT_ID')
              ->setPassword('YOUR_API_CLIENT_SECRET');


$apiInstance = new Stan\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_setting_request_body = new \Stan\Model\APISettingRequestBody(); // \Stan\Model\APISettingRequestBody

try {
    $apiInstance->updateAPISetting($api_setting_request_body);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateAPISetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_setting_request_body** | [**\Stan\Model\APISettingRequestBody**](../Model/APISettingRequestBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[stan_basic_auth](../../README.md#stan_basic_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
