<?php
/**
 * GetGenderRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * validateapi
 *
 * The validation APIs help you validate data. Check if an E-mail address is real. Check if a domain is real. Check up on an IP address, and even where it is located. All this and much more is available in the validation API.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GetGenderRequest Class Doc Comment
 *
 * @category Class
 * @description Request to get the gender from a first name
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetGenderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetGenderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_name' => 'string',
        'country_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'first_name' => null,
        'country_code' => null
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
        'first_name' => 'FirstName',
        'country_code' => 'CountryCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'country_code' => 'setCountryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'country_code' => 'getCountryCode'
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
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
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

        return true;
    }


    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name Input first name (given name) to get the gender of
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code Optional; the country for this name, possible values are \"US\", \"LY\", \"NI\", \"TT\", \"MK\", \"KZ\", \"BO\", \"UG\", \"TZ\", \"CL\", \"SI\", \"MA\", \"RW\", \"VN\", \"AW\", \"CY\", \"BH\", \"SG\", \"ZA\", \"MU\", \"BR\", \"TN\", \"KH\", \"US\", \"TH\", \"TW\", \"UY\", \"DO\", \"CO\", \"UA\", \"QA\", \"BY\", \"SN\", \"SD\", \"FJ\", \"LB\", \"BE\", \"ML\", \"LV\", \"FR\", \"TM\", \"NG\", \"EC\", \"NO\", \"SL\", \"CR\", \"PA\", \"GE\", \"CH\", \"KR\", \"RS\", \"ZM\", \"FI\", \"BF\", \"MC\", \"AU\", \"GA\", \"LS\", \"RU\", \"IN\", \"SE\", \"LK\", \"BZ\", \"MX\", \"GH\", \"AF\", \"TJ\", \"BN\", \"DZ\", \"CM\", \"GR\", \"MD\", \"HN\", \"AT\", \"NZ\", \"SV\", \"GW\", \"NA\", \"AR\", \"MZ\", \"PK\", \"MN\", \"IQ\", \"BW\", \"VE\", \"PT\", \"BS\", \"AL\", \"TG\", \"ID\", \"ET\", \"CF\", \"JP\", \"BB\", \"PH\", \"CU\", \"BD\", \"AO\", \"SM\", \"LC\", \"ME\", \"RO\",  DANIL\"O\"\", \"ES\", \"EE\", \"IL\", \"ZW\", \"SY\", \"MW\", \"LU\", \"IR\", \"SC\", \"NL\", \"JO\", \"AM\", \"DE\", \"GL\", \"OM\", \"DK\", \"HR\", \"LI\", \"TD\", \"KM\", \"BA\", \"GM\", \"GD\", \"CA\", \"CZ\", \"MR\", \"ST\", \"IS\", \"LR\", \"IE\", \"VC\", \"AE\", \"KG\", \"DJ\", \"TR\", \"KE\", \"NE\", \"UZ\", \"CN\", \"GQ\", \"SK\", \"BJ\", \"MG\", \"BT\", \"EG\", \"PL\", \"IT\", \"SA\", \"MY\", \"CI\", \"AG\", \"AD\", \"KS\", \"HU\", \"CG\", \"KP\", \"DM\", \"GN\", \"GT\", \"NP\", \"JM\", \"LA\", \"GB\", \"BG\", \"HT\", \"PE\", \"AZ\", \"LT\", \"SZ\", \"PY\", \"MT\", \"VA\"
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

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


