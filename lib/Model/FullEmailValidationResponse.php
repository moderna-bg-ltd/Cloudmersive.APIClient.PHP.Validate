<?php
/**
 * FullEmailValidationResponse
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
 * FullEmailValidationResponse Class Doc Comment
 *
 * @category Class
 * @description Full email addresss validation result
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FullEmailValidationResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FullEmailValidationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'valid_address' => 'bool',
        'mail_server_used_for_validation' => 'string',
        'valid_syntax' => 'bool',
        'valid_domain' => 'bool',
        'valid_smtp' => 'bool',
        'is_catchall_domain' => 'bool',
        'domain' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'valid_address' => null,
        'mail_server_used_for_validation' => null,
        'valid_syntax' => null,
        'valid_domain' => null,
        'valid_smtp' => null,
        'is_catchall_domain' => null,
        'domain' => null
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
        'valid_address' => 'ValidAddress',
        'mail_server_used_for_validation' => 'MailServerUsedForValidation',
        'valid_syntax' => 'Valid_Syntax',
        'valid_domain' => 'Valid_Domain',
        'valid_smtp' => 'Valid_SMTP',
        'is_catchall_domain' => 'IsCatchallDomain',
        'domain' => 'Domain'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'valid_address' => 'setValidAddress',
        'mail_server_used_for_validation' => 'setMailServerUsedForValidation',
        'valid_syntax' => 'setValidSyntax',
        'valid_domain' => 'setValidDomain',
        'valid_smtp' => 'setValidSmtp',
        'is_catchall_domain' => 'setIsCatchallDomain',
        'domain' => 'setDomain'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'valid_address' => 'getValidAddress',
        'mail_server_used_for_validation' => 'getMailServerUsedForValidation',
        'valid_syntax' => 'getValidSyntax',
        'valid_domain' => 'getValidDomain',
        'valid_smtp' => 'getValidSmtp',
        'is_catchall_domain' => 'getIsCatchallDomain',
        'domain' => 'getDomain'
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
        $this->container['valid_address'] = isset($data['valid_address']) ? $data['valid_address'] : null;
        $this->container['mail_server_used_for_validation'] = isset($data['mail_server_used_for_validation']) ? $data['mail_server_used_for_validation'] : null;
        $this->container['valid_syntax'] = isset($data['valid_syntax']) ? $data['valid_syntax'] : null;
        $this->container['valid_domain'] = isset($data['valid_domain']) ? $data['valid_domain'] : null;
        $this->container['valid_smtp'] = isset($data['valid_smtp']) ? $data['valid_smtp'] : null;
        $this->container['is_catchall_domain'] = isset($data['is_catchall_domain']) ? $data['is_catchall_domain'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
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
     * Gets valid_address
     *
     * @return bool
     */
    public function getValidAddress()
    {
        return $this->container['valid_address'];
    }

    /**
     * Sets valid_address
     *
     * @param bool $valid_address True if the email address is valid overall, false otherwise
     *
     * @return $this
     */
    public function setValidAddress($valid_address)
    {
        $this->container['valid_address'] = $valid_address;

        return $this;
    }

    /**
     * Gets mail_server_used_for_validation
     *
     * @return string
     */
    public function getMailServerUsedForValidation()
    {
        return $this->container['mail_server_used_for_validation'];
    }

    /**
     * Sets mail_server_used_for_validation
     *
     * @param string $mail_server_used_for_validation Email server connected to for verification
     *
     * @return $this
     */
    public function setMailServerUsedForValidation($mail_server_used_for_validation)
    {
        $this->container['mail_server_used_for_validation'] = $mail_server_used_for_validation;

        return $this;
    }

    /**
     * Gets valid_syntax
     *
     * @return bool
     */
    public function getValidSyntax()
    {
        return $this->container['valid_syntax'];
    }

    /**
     * Sets valid_syntax
     *
     * @param bool $valid_syntax True if the syntax of the email address is valid, false otherwise.  This is one component of ValidAddress, but not the only one.
     *
     * @return $this
     */
    public function setValidSyntax($valid_syntax)
    {
        $this->container['valid_syntax'] = $valid_syntax;

        return $this;
    }

    /**
     * Gets valid_domain
     *
     * @return bool
     */
    public function getValidDomain()
    {
        return $this->container['valid_domain'];
    }

    /**
     * Sets valid_domain
     *
     * @param bool $valid_domain True if the domain name of the email address is valid, false otherwise.  This is one component of ValidAddress, but not the only one.
     *
     * @return $this
     */
    public function setValidDomain($valid_domain)
    {
        $this->container['valid_domain'] = $valid_domain;

        return $this;
    }

    /**
     * Gets valid_smtp
     *
     * @return bool
     */
    public function getValidSmtp()
    {
        return $this->container['valid_smtp'];
    }

    /**
     * Sets valid_smtp
     *
     * @param bool $valid_smtp True if the email address was verified by the remote server, false otherwise.  This is one component of ValidAddress, but not the only one.
     *
     * @return $this
     */
    public function setValidSmtp($valid_smtp)
    {
        $this->container['valid_smtp'] = $valid_smtp;

        return $this;
    }

    /**
     * Gets is_catchall_domain
     *
     * @return bool
     */
    public function getIsCatchallDomain()
    {
        return $this->container['is_catchall_domain'];
    }

    /**
     * Sets is_catchall_domain
     *
     * @param bool $is_catchall_domain True if the domain is a catch-all domain name, false otherwise.  Catch-all domain names, while rare, always accept inbound email to ensure they do not lose any potentially useful emails.  Catch-all domain names can occassionally be configured to first accept and store all inbound email, but then later send a bounce email back to the sender after a delayed period of time.
     *
     * @return $this
     */
    public function setIsCatchallDomain($is_catchall_domain)
    {
        $this->container['is_catchall_domain'] = $is_catchall_domain;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain Domain name of the email address
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

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


