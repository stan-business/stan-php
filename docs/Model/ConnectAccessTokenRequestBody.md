# # ConnectAccessTokenRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The code received from authorization request | [optional]
**client_id** | **string** | Your Stan Connect client ID, find it in your Dashboard | [optional]
**client_secret** | **string** | Your Stan Connect client secret, find it in your Dashboard | [optional]
**redirect_uri** | **string** | The URI you provided when you requested authorization | [optional]
**grant_type** | **string** | The authorization mecanism, since you provided a code, put authorization_code | [optional]
**scope** | **string** | The user&#39;s information you will be using. You must set the same scope provided in authorization request. Separate scopes with \&quot; \&quot; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
