<?php
/**
 * PhoneNumber
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ConstantContactApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Constant Contact API v3
 *
 * Swagger build version 3.0.62
 *
 * The version of the OpenAPI document: 1.0.182
 * Contact: webservices@constantcontact.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ConstantContactApi\Client\Model;

use \ArrayAccess;
use \ConstantContactApi\Client\ObjectSerializer;

/**
 * PhoneNumber Class Doc Comment
 *
 * @category Class
 * @package  ConstantContactApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PhoneNumber implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PhoneNumber';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'phone_number_id' => 'string',
        'phone_number' => 'string',
        'kind' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'update_source' => 'string',
        'create_source' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'phone_number_id' => 'uuid',
        'phone_number' => null,
        'kind' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'update_source' => null,
        'create_source' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'phone_number_id' => false,
        'phone_number' => false,
        'kind' => false,
        'created_at' => false,
        'updated_at' => false,
        'update_source' => false,
        'create_source' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'phone_number_id' => 'phone_number_id',
        'phone_number' => 'phone_number',
        'kind' => 'kind',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'update_source' => 'update_source',
        'create_source' => 'create_source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phone_number_id' => 'setPhoneNumberId',
        'phone_number' => 'setPhoneNumber',
        'kind' => 'setKind',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'update_source' => 'setUpdateSource',
        'create_source' => 'setCreateSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phone_number_id' => 'getPhoneNumberId',
        'phone_number' => 'getPhoneNumber',
        'kind' => 'getKind',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'update_source' => 'getUpdateSource',
        'create_source' => 'getCreateSource'
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
        $this->setIfExists('phone_number_id', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('update_source', $data ?? [], null);
        $this->setIfExists('create_source', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 25)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 25.";
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
     * Gets phone_number_id
     *
     * @return string|null
     */
    public function getPhoneNumberId()
    {
        return $this->container['phone_number_id'];
    }

    /**
     * Sets phone_number_id
     *
     * @param string|null $phone_number_id Unique ID for the phone number
     *
     * @return self
     */
    public function setPhoneNumberId($phone_number_id)
    {
        if (is_null($phone_number_id)) {
            throw new \InvalidArgumentException('non-nullable phone_number_id cannot be null');
        }
        $this->container['phone_number_id'] = $phone_number_id;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number The contact's phone number.
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        if ((mb_strlen($phone_number) > 25)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling PhoneNumber., must be smaller than or equal to 25.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string|null $kind Identifies the type of phone number; valid values are home, work, mobile, or other.
     *
     * @return self
     */
    public function setKind($kind)
    {
        if (is_null($kind)) {
            throw new \InvalidArgumentException('non-nullable kind cannot be null');
        }
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Date and time that the street address was created, in ISO-8601 format. System generated.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Date and time that the phone number was last updated, in ISO-8601 format. System generated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets update_source
     *
     * @return string|null
     */
    public function getUpdateSource()
    {
        return $this->container['update_source'];
    }

    /**
     * Sets update_source
     *
     * @param string|null $update_source Identifies who last updated the phone number; valid values are Contact or Account
     *
     * @return self
     */
    public function setUpdateSource($update_source)
    {
        if (is_null($update_source)) {
            throw new \InvalidArgumentException('non-nullable update_source cannot be null');
        }
        $this->container['update_source'] = $update_source;

        return $this;
    }

    /**
     * Gets create_source
     *
     * @return string|null
     */
    public function getCreateSource()
    {
        return $this->container['create_source'];
    }

    /**
     * Sets create_source
     *
     * @param string|null $create_source Identifies who added the phone number; valid values are Contact or Account.
     *
     * @return self
     */
    public function setCreateSource($create_source)
    {
        if (is_null($create_source)) {
            throw new \InvalidArgumentException('non-nullable create_source cannot be null');
        }
        $this->container['create_source'] = $create_source;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


