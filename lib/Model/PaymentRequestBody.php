<?php
/**
 * PaymentRequestBody
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Stan
 * @author   Brightweb
 * @link     https://stan-business.fr
 */

/**
 * Stan API
 *
 * Stan Client API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Stan\Model;

use \ArrayAccess;
use \Stan\ObjectSerializer;

/**
 * PaymentRequestBody Class Doc Comment
 *
 * @category Class
 * @package  Stan
 * @author   Brightweb
 * @link     https://stan-business.fr
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_id' => 'string',
        'amount' => 'int',
        'subtotal_amount' => 'int',
        'shipping_amount' => 'int',
        'discount_amount' => 'int',
        'tax_amount' => 'int',
        'return_url' => 'string',
        'cancel_url' => 'string',
        'customer_id' => 'string',
        'state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_id' => 'string',
        'amount' => 'int32',
        'subtotal_amount' => 'int32',
        'shipping_amount' => 'int32',
        'discount_amount' => 'int32',
        'tax_amount' => 'int32',
        'return_url' => 'uri',
        'cancel_url' => 'uri',
        'customer_id' => 'uuid',
        'state' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_id' => 'order_id',
        'amount' => 'amount',
        'subtotal_amount' => 'subtotal_amount',
        'shipping_amount' => 'shipping_amount',
        'discount_amount' => 'discount_amount',
        'tax_amount' => 'tax_amount',
        'return_url' => 'return_url',
        'cancel_url' => 'cancel_url',
        'customer_id' => 'customer_id',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'amount' => 'setAmount',
        'subtotal_amount' => 'setSubtotalAmount',
        'shipping_amount' => 'setShippingAmount',
        'discount_amount' => 'setDiscountAmount',
        'tax_amount' => 'setTaxAmount',
        'return_url' => 'setReturnUrl',
        'cancel_url' => 'setCancelUrl',
        'customer_id' => 'setCustomerId',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'amount' => 'getAmount',
        'subtotal_amount' => 'getSubtotalAmount',
        'shipping_amount' => 'getShippingAmount',
        'discount_amount' => 'getDiscountAmount',
        'tax_amount' => 'getTaxAmount',
        'return_url' => 'getReturnUrl',
        'cancel_url' => 'getCancelUrl',
        'customer_id' => 'getCustomerId',
        'state' => 'getState'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['subtotal_amount'] = $data['subtotal_amount'] ?? null;
        $this->container['shipping_amount'] = $data['shipping_amount'] ?? null;
        $this->container['discount_amount'] = $data['discount_amount'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['return_url'] = $data['return_url'] ?? null;
        $this->container['cancel_url'] = $data['cancel_url'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['return_url'] === null) {
            $invalidProperties[] = "'return_url' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Amount in cents
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets subtotal_amount
     *
     * @return int|null
     */
    public function getSubtotalAmount()
    {
        return $this->container['subtotal_amount'];
    }

    /**
     * Sets subtotal_amount
     *
     * @param int|null $subtotal_amount The subtotal amount in cents. This amount is optionnal, it's useful to give information to the user.
     *
     * @return self
     */
    public function setSubtotalAmount($subtotal_amount)
    {
        $this->container['subtotal_amount'] = $subtotal_amount;

        return $this;
    }

    /**
     * Gets shipping_amount
     *
     * @return int|null
     */
    public function getShippingAmount()
    {
        return $this->container['shipping_amount'];
    }

    /**
     * Sets shipping_amount
     *
     * @param int|null $shipping_amount The shipping cost in cents. This amount is optionnal, it's useful to give information to the user.
     *
     * @return self
     */
    public function setShippingAmount($shipping_amount)
    {
        $this->container['shipping_amount'] = $shipping_amount;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return int|null
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param int|null $discount_amount The discount amount in cents. This amount is optionnal, it's useful to give information to the user.
     *
     * @return self
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return int|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param int|null $tax_amount The tax amount in cents. This amount is optionnal, it's useful to give information to the user.
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets return_url
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->container['return_url'];
    }

    /**
     * Sets return_url
     *
     * @param string $return_url The return URL where the user will land after the payment has been complete. The URL will be appended with a URI query payment_status with the value corresponding to the Payment status and state with the value you provided in state.
     *
     * @return self
     */
    public function setReturnUrl($return_url)
    {
        $this->container['return_url'] = $return_url;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string|null
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string|null $cancel_url The redirect URL used in case of payment cancel or fail.
     *
     * @return self
     */
    public function setCancelUrl($cancel_url)
    {
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id UUID of the customer
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state Payment state that will be used to preserve the state after the redirection to the provided return_url or cancel_url. If not state is provided Stan will generate one and transmit it to the return_url or cancel_url.
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


