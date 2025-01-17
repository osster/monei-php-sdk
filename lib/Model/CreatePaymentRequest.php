<?php
/**
 * CreatePaymentRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MONEI API v1
 *
 * The MONEI API is organized around [REST](https://en.wikipedia.org/wiki/Representational_State_Transfer). Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs.
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CreatePaymentRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreatePaymentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreatePaymentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'currency' => 'string',
        'order_id' => 'string',
        'callback_url' => 'string',
        'complete_url' => 'string',
        'fail_url' => 'string',
        'cancel_url' => 'string',
        'payment_token' => 'string',
        'session_id' => 'string',
        'generate_payment_token' => 'bool',
        'payment_method' => '\OpenAPI\Client\Model\PaymentPaymentMethodInput',
        'allowed_payment_methods' => '\OpenAPI\Client\Model\PaymentPaymentMethods',
        'transaction_type' => '\OpenAPI\Client\Model\PaymentTransactionType',
        'sequence' => '\OpenAPI\Client\Model\PaymentSequence',
        'description' => 'string',
        'customer' => '\OpenAPI\Client\Model\PaymentCustomer',
        'billing_details' => '\OpenAPI\Client\Model\PaymentBillingDetails',
        'shipping_details' => '\OpenAPI\Client\Model\PaymentShippingDetails',
        'session_details' => '\OpenAPI\Client\Model\PaymentSessionDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'amount' => 'int32',
        'currency' => null,
        'order_id' => null,
        'callback_url' => null,
        'complete_url' => null,
        'fail_url' => null,
        'cancel_url' => null,
        'payment_token' => null,
        'session_id' => null,
        'generate_payment_token' => null,
        'payment_method' => null,
        'allowed_payment_methods' => null,
        'transaction_type' => null,
        'sequence' => null,
        'description' => null,
        'customer' => null,
        'billing_details' => null,
        'shipping_details' => null,
        'session_details' => null
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
        'amount' => 'amount',
        'currency' => 'currency',
        'order_id' => 'orderId',
        'callback_url' => 'callbackUrl',
        'complete_url' => 'completeUrl',
        'fail_url' => 'failUrl',
        'cancel_url' => 'cancelUrl',
        'payment_token' => 'paymentToken',
        'session_id' => 'sessionId',
        'generate_payment_token' => 'generatePaymentToken',
        'payment_method' => 'paymentMethod',
        'allowed_payment_methods' => 'allowedPaymentMethods',
        'transaction_type' => 'transactionType',
        'sequence' => 'sequence',
        'description' => 'description',
        'customer' => 'customer',
        'billing_details' => 'billingDetails',
        'shipping_details' => 'shippingDetails',
        'session_details' => 'sessionDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'order_id' => 'setOrderId',
        'callback_url' => 'setCallbackUrl',
        'complete_url' => 'setCompleteUrl',
        'fail_url' => 'setFailUrl',
        'cancel_url' => 'setCancelUrl',
        'payment_token' => 'setPaymentToken',
        'session_id' => 'setSessionId',
        'generate_payment_token' => 'setGeneratePaymentToken',
        'payment_method' => 'setPaymentMethod',
        'allowed_payment_methods' => 'setAllowedPaymentMethods',
        'transaction_type' => 'setTransactionType',
        'sequence' => 'setSequence',
        'description' => 'setDescription',
        'customer' => 'setCustomer',
        'billing_details' => 'setBillingDetails',
        'shipping_details' => 'setShippingDetails',
        'session_details' => 'setSessionDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'order_id' => 'getOrderId',
        'callback_url' => 'getCallbackUrl',
        'complete_url' => 'getCompleteUrl',
        'fail_url' => 'getFailUrl',
        'cancel_url' => 'getCancelUrl',
        'payment_token' => 'getPaymentToken',
        'session_id' => 'getSessionId',
        'generate_payment_token' => 'getGeneratePaymentToken',
        'payment_method' => 'getPaymentMethod',
        'allowed_payment_methods' => 'getAllowedPaymentMethods',
        'transaction_type' => 'getTransactionType',
        'sequence' => 'getSequence',
        'description' => 'getDescription',
        'customer' => 'getCustomer',
        'billing_details' => 'getBillingDetails',
        'shipping_details' => 'getShippingDetails',
        'session_details' => 'getSessionDetails'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['callback_url'] = isset($data['callback_url']) ? $data['callback_url'] : null;
        $this->container['complete_url'] = isset($data['complete_url']) ? $data['complete_url'] : null;
        $this->container['fail_url'] = isset($data['fail_url']) ? $data['fail_url'] : null;
        $this->container['cancel_url'] = isset($data['cancel_url']) ? $data['cancel_url'] : null;
        $this->container['payment_token'] = isset($data['payment_token']) ? $data['payment_token'] : null;
        $this->container['session_id'] = isset($data['session_id']) ? $data['session_id'] : null;
        $this->container['generate_payment_token'] = isset($data['generate_payment_token']) ? $data['generate_payment_token'] : false;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['allowed_payment_methods'] = isset($data['allowed_payment_methods']) ? $data['allowed_payment_methods'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['billing_details'] = isset($data['billing_details']) ? $data['billing_details'] : null;
        $this->container['shipping_details'] = isset($data['shipping_details']) ? $data['shipping_details'] : null;
        $this->container['session_details'] = isset($data['session_details']) ? $data['session_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['callback_url'] === null) {
            $invalidProperties[] = "'callback_url' can't be null";
        }
        if ($this->container['complete_url'] === null) {
            $invalidProperties[] = "'complete_url' can't be null";
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
     * @param int $amount Amount intended to be collected by this payment. A positive integer representing how much to charge in the smallest currency unit (e.g., 100 cents to charge 1.00 USD).
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Three-letter [ISO currency code](https://en.wikipedia.org/wiki/ISO_4217), in uppercase. Must be a supported currency.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
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
     * @param string $order_id An order ID from your system. A unique identifier that can be used to reconcile the payment with your internal system.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets callback_url
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string $callback_url The URL to which a payment result should be sent asynchronously.
     *
     * @return $this
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets complete_url
     *
     * @return string
     */
    public function getCompleteUrl()
    {
        return $this->container['complete_url'];
    }

    /**
     * Sets complete_url
     *
     * @param string $complete_url The URL the customer will be directed to after transaction completed (successful or failed - except if `failUrl` is provided).
     *
     * @return $this
     */
    public function setCompleteUrl($complete_url)
    {
        $this->container['complete_url'] = $complete_url;

        return $this;
    }

    /**
     * Gets fail_url
     *
     * @return string|null
     */
    public function getFailUrl()
    {
        return $this->container['fail_url'];
    }

    /**
     * Sets fail_url
     *
     * @param string|null $fail_url The URL the customer will be directed to after transaction has failed, instead of `completeUrl` (used in hosted payment page). This allows to provide two different URLs for successful and failed payments.
     *
     * @return $this
     */
    public function setFailUrl($fail_url)
    {
        $this->container['fail_url'] = $fail_url;

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
     * @param string|null $cancel_url The URL the customer will be directed to if they decide to cancel payment and return to your website (used in hosted payment page).
     *
     * @return $this
     */
    public function setCancelUrl($cancel_url)
    {
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets payment_token
     *
     * @return string|null
     */
    public function getPaymentToken()
    {
        return $this->container['payment_token'];
    }

    /**
     * Sets payment_token
     *
     * @param string|null $payment_token A payment token generated by monei.js [UI Components](https://docs.monei.com/docs/monei-js-overview) or a paymentToken [saved after a previous successful payment](https://docs.monei.com/docs/save-payment-method). In case of the first one, you will also need to send the `sessionId` used to generate the token in the first place.
     *
     * @return $this
     */
    public function setPaymentToken($payment_token)
    {
        $this->container['payment_token'] = $payment_token;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string|null $session_id A unique identifier within your system that adds security to the payment process. You need to pass the same session ID as the one used on the frontend to initialize MONEI Component (if you needed to). This is required if a payment token (not permanent) was already generated in the frontend.
     *
     * @return $this
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets generate_payment_token
     *
     * @return bool|null
     */
    public function getGeneratePaymentToken()
    {
        return $this->container['generate_payment_token'];
    }

    /**
     * Sets generate_payment_token
     *
     * @param bool|null $generate_payment_token If set to true a permanent token that represents a payment method used in the payment will be generated.
     *
     * @return $this
     */
    public function setGeneratePaymentToken($generate_payment_token)
    {
        $this->container['generate_payment_token'] = $generate_payment_token;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \OpenAPI\Client\Model\PaymentPaymentMethodInput|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \OpenAPI\Client\Model\PaymentPaymentMethodInput|null $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets allowed_payment_methods
     *
     * @return \OpenAPI\Client\Model\PaymentPaymentMethods|null
     */
    public function getAllowedPaymentMethods()
    {
        return $this->container['allowed_payment_methods'];
    }

    /**
     * Sets allowed_payment_methods
     *
     * @param \OpenAPI\Client\Model\PaymentPaymentMethods|null $allowed_payment_methods allowed_payment_methods
     *
     * @return $this
     */
    public function setAllowedPaymentMethods($allowed_payment_methods)
    {
        $this->container['allowed_payment_methods'] = $allowed_payment_methods;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return \OpenAPI\Client\Model\PaymentTransactionType|null
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param \OpenAPI\Client\Model\PaymentTransactionType|null $transaction_type transaction_type
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return \OpenAPI\Client\Model\PaymentSequence|null
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param \OpenAPI\Client\Model\PaymentSequence|null $sequence sequence
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description An arbitrary string attached to the payment. Often useful for displaying to users.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \OpenAPI\Client\Model\PaymentCustomer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\Client\Model\PaymentCustomer|null $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets billing_details
     *
     * @return \OpenAPI\Client\Model\PaymentBillingDetails|null
     */
    public function getBillingDetails()
    {
        return $this->container['billing_details'];
    }

    /**
     * Sets billing_details
     *
     * @param \OpenAPI\Client\Model\PaymentBillingDetails|null $billing_details billing_details
     *
     * @return $this
     */
    public function setBillingDetails($billing_details)
    {
        $this->container['billing_details'] = $billing_details;

        return $this;
    }

    /**
     * Gets shipping_details
     *
     * @return \OpenAPI\Client\Model\PaymentShippingDetails|null
     */
    public function getShippingDetails()
    {
        return $this->container['shipping_details'];
    }

    /**
     * Sets shipping_details
     *
     * @param \OpenAPI\Client\Model\PaymentShippingDetails|null $shipping_details shipping_details
     *
     * @return $this
     */
    public function setShippingDetails($shipping_details)
    {
        $this->container['shipping_details'] = $shipping_details;

        return $this;
    }

    /**
     * Gets session_details
     *
     * @return \OpenAPI\Client\Model\PaymentSessionDetails|null
     */
    public function getSessionDetails()
    {
        return $this->container['session_details'];
    }

    /**
     * Sets session_details
     *
     * @param \OpenAPI\Client\Model\PaymentSessionDetails|null $session_details session_details
     *
     * @return $this
     */
    public function setSessionDetails($session_details)
    {
        $this->container['session_details'] = $session_details;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


