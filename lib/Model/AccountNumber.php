<?php
/**
 * AccountNumber
 *
 * PHP version 5
 *
 * @category Class
 * @package  Karix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * karix api
 *
 * Karix API lets you interact with the Karix platform. It allows you to query your account, set up webhooks, send messages and buy phone numbers.
 *
 * OpenAPI spec version: 1.0
 * Contact: support@karix.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Karix\Model;

use \ArrayAccess;
use \Karix\ObjectSerializer;

/**
 * AccountNumber Class Doc Comment
 *
 * @category Class
 * @package  Karix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountNumber implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountNumber';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'webhook_uid' => 'string',
        'alias' => 'string',
        'account_uid' => 'string',
        'number_details' => '\Karix\Model\PhoneNumber',
        'date_rented' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'webhook_uid' => null,
        'alias' => null,
        'account_uid' => null,
        'number_details' => null,
        'date_rented' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'webhook_uid' => 'webhook_uid',
        'alias' => 'alias',
        'account_uid' => 'account_uid',
        'number_details' => 'number_details',
        'date_rented' => 'date_rented'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'webhook_uid' => 'setWebhookUid',
        'alias' => 'setAlias',
        'account_uid' => 'setAccountUid',
        'number_details' => 'setNumberDetails',
        'date_rented' => 'setDateRented'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'webhook_uid' => 'getWebhookUid',
        'alias' => 'getAlias',
        'account_uid' => 'getAccountUid',
        'number_details' => 'getNumberDetails',
        'date_rented' => 'getDateRented'
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
        return self::$swaggerModelName;
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
        $this->container['webhook_uid'] = isset($data['webhook_uid']) ? $data['webhook_uid'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['account_uid'] = isset($data['account_uid']) ? $data['account_uid'] : null;
        $this->container['number_details'] = isset($data['number_details']) ? $data['number_details'] : null;
        $this->container['date_rented'] = isset($data['date_rented']) ? $data['date_rented'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets webhook_uid
     *
     * @return string
     */
    public function getWebhookUid()
    {
        return $this->container['webhook_uid'];
    }

    /**
     * Sets webhook_uid
     *
     * @param string $webhook_uid Webhook attached to this phone number which is triggered on an event like incoming message.
     *
     * @return $this
     */
    public function setWebhookUid($webhook_uid)
    {
        $this->container['webhook_uid'] = $webhook_uid;

        return $this;
    }

    /**
     * Gets alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string $alias Display alias of this number for the account
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets account_uid
     *
     * @return string
     */
    public function getAccountUid()
    {
        return $this->container['account_uid'];
    }

    /**
     * Sets account_uid
     *
     * @param string $account_uid Unique ID of the account which rented this number
     *
     * @return $this
     */
    public function setAccountUid($account_uid)
    {
        $this->container['account_uid'] = $account_uid;

        return $this;
    }

    /**
     * Gets number_details
     *
     * @return \Karix\Model\PhoneNumber
     */
    public function getNumberDetails()
    {
        return $this->container['number_details'];
    }

    /**
     * Sets number_details
     *
     * @param \Karix\Model\PhoneNumber $number_details number_details
     *
     * @return $this
     */
    public function setNumberDetails($number_details)
    {
        $this->container['number_details'] = $number_details;

        return $this;
    }

    /**
     * Gets date_rented
     *
     * @return string
     */
    public function getDateRented()
    {
        return $this->container['date_rented'];
    }

    /**
     * Sets date_rented
     *
     * @param string $date_rented Timestamp when this number was rented
     *
     * @return $this
     */
    public function setDateRented($date_rented)
    {
        $this->container['date_rented'] = $date_rented;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


