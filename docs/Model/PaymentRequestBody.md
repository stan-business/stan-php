# # PaymentRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** |  |
**amount** | **int** | Amount in cents |
**subtotal_amount** | **int** | The subtotal amount in cents. This amount is optionnal, it&#39;s useful to give information to the user. | [optional]
**shipping_amount** | **int** | The shipping cost in cents. This amount is optionnal, it&#39;s useful to give information to the user. | [optional]
**discount_amount** | **int** | The discount amount in cents. This amount is optionnal, it&#39;s useful to give information to the user. | [optional]
**tax_amount** | **int** | The tax amount in cents. This amount is optionnal, it&#39;s useful to give information to the user. | [optional]
**return_url** | **string** | The return URL where the user will land after the payment has been complete. The URL will be appended with a URI query payment_status with the value corresponding to the Payment status and state with the value you provided in state. |
**cancel_url** | **string** | The redirect URL used in case of payment cancel or fail. | [optional]
**customer_id** | **string** | UUID of the customer | [optional]
**state** | **string** | Payment state that will be used to preserve the state after the redirection to the provided return_url or cancel_url. If not state is provided Stan will generate one and transmit it to the return_url or cancel_url. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
