# Stan

Stan Client API


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Stan/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.stan-app.fr/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ConnectApi* | [**userConnect**](docs/Api/ConnectApi.md#userconnect) | **POST** /oauth/token | Create an access token to request user&#39;s infos
*CustomerApi* | [**createCustomer**](docs/Api/CustomerApi.md#createcustomer) | **POST** /customers | Create a new customer
*PaymentApi* | [**createPaymentInvoice**](docs/Api/PaymentApi.md#createpaymentinvoice) | **POST** /payments | Create a payment
*PaymentApi* | [**findPaymentsByID**](docs/Api/PaymentApi.md#findpaymentsbyid) | **GET** /payments/{payment_id} | Get a payment
*PaymentApi* | [**getPayments**](docs/Api/PaymentApi.md#getpayments) | **GET** /payments | Get all payments
*RefundApi* | [**createRefund**](docs/Api/RefundApi.md#createrefund) | **POST** /refunds | Create a refund
*RefundApi* | [**fundRefundByID**](docs/Api/RefundApi.md#fundrefundbyid) | **GET** /refunds/{refund_id} | Get a refund
*RefundApi* | [**getRefunds**](docs/Api/RefundApi.md#getrefunds) | **GET** /refunds | Get all refunds
*SettingsApi* | [**updateAPISetting**](docs/Api/SettingsApi.md#updateapisetting) | **PUT** /apis | Updates API settings
*UserApi* | [**getUser**](docs/Api/UserApi.md#getuser) | **GET** /sessions/users | Get user infos

## Models

- [APISettingRequestBody](docs/Model/APISettingRequestBody.md)
- [Address](docs/Model/Address.md)
- [ConnectAccessToken](docs/Model/ConnectAccessToken.md)
- [ConnectAccessTokenRequestBody](docs/Model/ConnectAccessTokenRequestBody.md)
- [Customer](docs/Model/Customer.md)
- [CustomerRequestBody](docs/Model/CustomerRequestBody.md)
- [Payment](docs/Model/Payment.md)
- [PaymentRequestBody](docs/Model/PaymentRequestBody.md)
- [Refund](docs/Model/Refund.md)
- [RefundRequestBody](docs/Model/RefundRequestBody.md)
- [User](docs/Model/User.md)

## Authorization

### stan_basic_auth

- **Type**: HTTP basic authentication


### stan_connect_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://api.stan-app.fr/v1/oauth/auth`
- **Scopes**: 
    - **openid**: Specify that you will be requesting personnal data
    - **email**: Specify that you will be requesting the user's email address
    - **phone**: Specify that you will be requesting the user's phone number
    - **profile**: Specify that you will be requesting the user's fullname
    - **address**: Specify that you will be requesting the user's delivery address

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

Brightweb

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
