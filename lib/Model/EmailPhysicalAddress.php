<?php
/**
 * EmailPhysicalAddress
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
 * EmailPhysicalAddress Class Doc Comment
 *
 * @category Class
 * @package  ConstantContactApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailPhysicalAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailPhysicalAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_line3' => 'string',
        'address_optional' => 'string',
        'city' => 'string',
        'country_code' => 'string',
        'country_name' => 'string',
        'organization_name' => 'string',
        'postal_code' => 'string',
        'state_code' => 'string',
        'state_name' => 'string',
        'state_non_us_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address_line1' => null,
        'address_line2' => null,
        'address_line3' => null,
        'address_optional' => null,
        'city' => null,
        'country_code' => null,
        'country_name' => null,
        'organization_name' => null,
        'postal_code' => null,
        'state_code' => null,
        'state_name' => null,
        'state_non_us_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address_line1' => false,
        'address_line2' => false,
        'address_line3' => false,
        'address_optional' => false,
        'city' => false,
        'country_code' => false,
        'country_name' => false,
        'organization_name' => false,
        'postal_code' => false,
        'state_code' => false,
        'state_name' => false,
        'state_non_us_name' => false
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
        'address_line1' => 'address_line1',
        'address_line2' => 'address_line2',
        'address_line3' => 'address_line3',
        'address_optional' => 'address_optional',
        'city' => 'city',
        'country_code' => 'country_code',
        'country_name' => 'country_name',
        'organization_name' => 'organization_name',
        'postal_code' => 'postal_code',
        'state_code' => 'state_code',
        'state_name' => 'state_name',
        'state_non_us_name' => 'state_non_us_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_line3' => 'setAddressLine3',
        'address_optional' => 'setAddressOptional',
        'city' => 'setCity',
        'country_code' => 'setCountryCode',
        'country_name' => 'setCountryName',
        'organization_name' => 'setOrganizationName',
        'postal_code' => 'setPostalCode',
        'state_code' => 'setStateCode',
        'state_name' => 'setStateName',
        'state_non_us_name' => 'setStateNonUsName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_line3' => 'getAddressLine3',
        'address_optional' => 'getAddressOptional',
        'city' => 'getCity',
        'country_code' => 'getCountryCode',
        'country_name' => 'getCountryName',
        'organization_name' => 'getOrganizationName',
        'postal_code' => 'getPostalCode',
        'state_code' => 'getStateCode',
        'state_name' => 'getStateName',
        'state_non_us_name' => 'getStateNonUsName'
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
        $this->setIfExists('address_line1', $data ?? [], null);
        $this->setIfExists('address_line2', $data ?? [], null);
        $this->setIfExists('address_line3', $data ?? [], null);
        $this->setIfExists('address_optional', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('country_name', $data ?? [], null);
        $this->setIfExists('organization_name', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('state_code', $data ?? [], null);
        $this->setIfExists('state_name', $data ?? [], null);
        $this->setIfExists('state_non_us_name', $data ?? [], null);
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

        if ($this->container['address_line1'] === null) {
            $invalidProperties[] = "'address_line1' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ($this->container['organization_name'] === null) {
            $invalidProperties[] = "'organization_name' can't be null";
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
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 Line 1 of the organization's street address.
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        if (is_null($address_line1)) {
            throw new \InvalidArgumentException('non-nullable address_line1 cannot be null');
        }
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 Line 2 of the organization's street address.
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        if (is_null($address_line2)) {
            throw new \InvalidArgumentException('non-nullable address_line2 cannot be null');
        }
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets address_line3
     *
     * @return string|null
     */
    public function getAddressLine3()
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3
     *
     * @param string|null $address_line3 Line 3 of the organization's street address.
     *
     * @return self
     */
    public function setAddressLine3($address_line3)
    {
        if (is_null($address_line3)) {
            throw new \InvalidArgumentException('non-nullable address_line3 cannot be null');
        }
        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    /**
     * Gets address_optional
     *
     * @return string|null
     */
    public function getAddressOptional()
    {
        return $this->container['address_optional'];
    }

    /**
     * Sets address_optional
     *
     * @param string|null $address_optional An optional address field for the organization. Only <code>format_type</code> 3, 4, and 5 can use this property.
     *
     * @return self
     */
    public function setAddressOptional($address_optional)
    {
        if (is_null($address_optional)) {
            throw new \InvalidArgumentException('non-nullable address_optional cannot be null');
        }
        $this->container['address_optional'] = $address_optional;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The city where the organization sending the email campaign is located.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

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
     * @param string $country_code The uppercase two letter <a href='https://en.wikipedia.org/wiki/ISO_3166-1' target='_blank'>ISO 3166-1 code</a> for the organization's country.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets country_name
     *
     * @return string|null
     */
    public function getCountryName()
    {
        return $this->container['country_name'];
    }

    /**
     * Sets country_name
     *
     * @param string|null $country_name The full name of the country where the organization sending the email is located. Automatically generated using the <code>country_code</code>.
     *
     * @return self
     */
    public function setCountryName($country_name)
    {
        if (is_null($country_name)) {
            throw new \InvalidArgumentException('non-nullable country_name cannot be null');
        }
        $this->container['country_name'] = $country_name;

        return $this;
    }

    /**
     * Gets organization_name
     *
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->container['organization_name'];
    }

    /**
     * Sets organization_name
     *
     * @param string $organization_name The name of the organization that is sending the email campaign.
     *
     * @return self
     */
    public function setOrganizationName($organization_name)
    {
        if (is_null($organization_name)) {
            throw new \InvalidArgumentException('non-nullable organization_name cannot be null');
        }
        $this->container['organization_name'] = $organization_name;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code The postal code address (ZIP code) of the organization.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets state_code
     *
     * @return string|null
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     *
     * @param string|null $state_code The uppercase two letter <a href='https://en.wikipedia.org/wiki/ISO_3166-1' target='_blank'>ISO 3166-1 code</a> for the organization's state. This property is required if the <code>country_code</code> is US (United States).
     *
     * @return self
     */
    public function setStateCode($state_code)
    {
        if (is_null($state_code)) {
            throw new \InvalidArgumentException('non-nullable state_code cannot be null');
        }
        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets state_name
     *
     * @return string|null
     */
    public function getStateName()
    {
        return $this->container['state_name'];
    }

    /**
     * Sets state_name
     *
     * @param string|null $state_name The full state name for a <code>state_code</code> that is inside the United States. Automatically generated using the <code>state_code</code>.
     *
     * @return self
     */
    public function setStateName($state_name)
    {
        if (is_null($state_name)) {
            throw new \InvalidArgumentException('non-nullable state_name cannot be null');
        }
        $this->container['state_name'] = $state_name;

        return $this;
    }

    /**
     * Gets state_non_us_name
     *
     * @return string|null
     */
    public function getStateNonUsName()
    {
        return $this->container['state_non_us_name'];
    }

    /**
     * Sets state_non_us_name
     *
     * @param string|null $state_non_us_name The full state name for a <code>state_code</code> that is outside the United States. This property is not read only.
     *
     * @return self
     */
    public function setStateNonUsName($state_non_us_name)
    {
        if (is_null($state_non_us_name)) {
            throw new \InvalidArgumentException('non-nullable state_non_us_name cannot be null');
        }
        $this->container['state_non_us_name'] = $state_non_us_name;

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


