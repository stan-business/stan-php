# # Payment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**order_id** | **string** |  | [optional]
**amount** | **int** | Amount in cents | [optional]
**payment_status** | **string** | Status of the payment | [optional]
**merchant_id** | **string** | UUID of the merchant who created the payment | [optional]
**customer_id** | **string** | UUID of the customer | [optional]
**is_refundable** | **bool** | Weither the payment is refundable or not | [optional]
**refunded_amount** | **int** | Refunded amount for this payment in cents | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
