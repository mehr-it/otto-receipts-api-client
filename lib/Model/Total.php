<?php
/**
 * Total
 *
 * PHP version 5
 *
 * @category Class
 * @package  MehrIt\OttoReceiptsApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Receipts API
 *
 * Interface for the partner to get receipts information
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MehrIt\OttoReceiptsApiClient\Model;

use \ArrayAccess;
use \MehrIt\OttoReceiptsApiClient\ObjectSerializer;

/**
 * Total Class Doc Comment
 *
 * @category Class
 * @description Total amounts, which are charged or reimbursed of this receipt. Values are always positive. Whether it is an amount to be paid or refunded must be determined in context of the type of a receipt.
 * @package  MehrIt\OttoReceiptsApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Total implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Total';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gross' => 'AllOfTotalGross',
'net' => 'AllOfTotalNet',
'vat' => 'map[string,null]',
'amount_due' => 'AllOfTotalAmountDue'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gross' => null,
'net' => null,
'vat' => null,
'amount_due' => null    ];

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
        'gross' => 'gross',
'net' => 'net',
'vat' => 'vat',
'amount_due' => 'amountDue'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gross' => 'setGross',
'net' => 'setNet',
'vat' => 'setVat',
'amount_due' => 'setAmountDue'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gross' => 'getGross',
'net' => 'getNet',
'vat' => 'getVat',
'amount_due' => 'getAmountDue'    ];

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
        $this->container['gross'] = isset($data['gross']) ? $data['gross'] : null;
        $this->container['net'] = isset($data['net']) ? $data['net'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['amount_due'] = isset($data['amount_due']) ? $data['amount_due'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['gross'] === null) {
            $invalidProperties[] = "'gross' can't be null";
        }
        if ($this->container['net'] === null) {
            $invalidProperties[] = "'net' can't be null";
        }
        if ($this->container['vat'] === null) {
            $invalidProperties[] = "'vat' can't be null";
        }
        if ($this->container['amount_due'] === null) {
            $invalidProperties[] = "'amount_due' can't be null";
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
     * Gets gross
     *
     * @return AllOfTotalGross
     */
    public function getGross()
    {
        return $this->container['gross'];
    }

    /**
     * Sets gross
     *
     * @param AllOfTotalGross $gross Total gross value of the receipt.
     *
     * @return $this
     */
    public function setGross($gross)
    {
        $this->container['gross'] = $gross;

        return $this;
    }

    /**
     * Gets net
     *
     * @return AllOfTotalNet
     */
    public function getNet()
    {
        return $this->container['net'];
    }

    /**
     * Sets net
     *
     * @param AllOfTotalNet $net Total net value of the receipt.
     *
     * @return $this
     */
    public function setNet($net)
    {
        $this->container['net'] = $net;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return map[string,null]
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param map[string,null] $vat Total vat values of the receipt.
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets amount_due
     *
     * @return AllOfTotalAmountDue
     */
    public function getAmountDue()
    {
        return $this->container['amount_due'];
    }

    /**
     * Sets amount_due
     *
     * @param AllOfTotalAmountDue $amount_due Gross due amount.
     *
     * @return $this
     */
    public function setAmountDue($amount_due)
    {
        $this->container['amount_due'] = $amount_due;

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
