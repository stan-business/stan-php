# Stan\ApiSettings

All URIs are relative to https://api.stan-app.fr/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**UpdateApiSettings()**](ApiSettings.md#UpdateApiSettings) | **PUT** /apis | Updates API settings


## `UpdateApiSettings()`

```php
UpdateApiSettings($api_settings_request_body)
```

Updates API settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: stan_basic_auth
$config = Stan\Configuration::getDefaultConfiguration()
              ->setClientId('YOUR_API_CLIENT_ID')
              ->setClientSecret('YOUR_API_CLIENT_SECRET');

$stan_client = new Stan\Api\StanClient($config);
$api_settings_request_body = new \Stan\Model\ApiSettingsRequestBody(); // \Stan\Model\ApiSettingsRequestBody

try {
    $stan_client->apiSettingsApi->updateApiSettings($api_settings_request_body);
} catch (Exception $e) {
    echo 'Exception when calling ApiSettingsApi->updateApiSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_settings_request_body** | [**\Stan\Model\ApiSettingsRequestBody**](../Model/ApiSettingsRequestBody.md)|  | [optional]

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
