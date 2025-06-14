<?php
/**
 * PartnerAccountSiteOwnerListInner
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
 * PartnerAccountSiteOwnerListInner Class Doc Comment
 *
 * @category Class
 * @package  ConstantContactApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PartnerAccountSiteOwnerListInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PartnerAccount_site_owner_list_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'encoded_account_id' => 'string',
        'subscriber_count' => 'int',
        'organization_name' => 'string',
        'site_owner_name' => 'string',
        'billing_status' => 'string',
        'last_login_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'encoded_account_id' => null,
        'subscriber_count' => 'int64',
        'organization_name' => null,
        'site_owner_name' => null,
        'billing_status' => null,
        'last_login_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'encoded_account_id' => false,
        'subscriber_count' => false,
        'organization_name' => false,
        'site_owner_name' => false,
        'billing_status' => false,
        'last_login_date' => false
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
        'encoded_account_id' => 'encoded_account_id',
        'subscriber_count' => 'subscriber_count',
        'organization_name' => 'organization_name',
        'site_owner_name' => 'site_owner_name',
        'billing_status' => 'billing_status',
        'last_login_date' => 'last_login_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'encoded_account_id' => 'setEncodedAccountId',
        'subscriber_count' => 'setSubscriberCount',
        'organization_name' => 'setOrganizationName',
        'site_owner_name' => 'setSiteOwnerName',
        'billing_status' => 'setBillingStatus',
        'last_login_date' => 'setLastLoginDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'encoded_account_id' => 'getEncodedAccountId',
        'subscriber_count' => 'getSubscriberCount',
        'organization_name' => 'getOrganizationName',
        'site_owner_name' => 'getSiteOwnerName',
        'billing_status' => 'getBillingStatus',
        'last_login_date' => 'getLastLoginDate'
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
        $this->setIfExists('encoded_account_id', $data ?? [], null);
        $this->setIfExists('subscriber_count', $data ?? [], null);
        $this->setIfExists('organization_name', $data ?? [], null);
        $this->setIfExists('site_owner_name', $data ?? [], null);
        $this->setIfExists('billing_status', $data ?? [], null);
        $this->setIfExists('last_login_date', $data ?? [], null);
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
     * Gets encoded_account_id
     *
     * @return string|null
     */
    public function getEncodedAccountId()
    {
        return $this->container['encoded_account_id'];
    }

    /**
     * Sets encoded_account_id
     *
     * @param string|null $encoded_account_id The obfuscated ID used to uniquely identify a client account.
     *
     * @return self
     */
    public function setEncodedAccountId($encoded_account_id)
    {
        if (is_null($encoded_account_id)) {
            throw new \InvalidArgumentException('non-nullable encoded_account_id cannot be null');
        }
        $this->container['encoded_account_id'] = $encoded_account_id;

        return $this;
    }

    /**
     * Gets subscriber_count
     *
     * @return int|null
     */
    public function getSubscriberCount()
    {
        return $this->container['subscriber_count'];
    }

    /**
     * Sets subscriber_count
     *
     * @param int|null $subscriber_count The total number of subscriber contacts that are associated with a client account.
     *
     * @return self
     */
    public function setSubscriberCount($subscriber_count)
    {
        if (is_null($subscriber_count)) {
            throw new \InvalidArgumentException('non-nullable subscriber_count cannot be null');
        }
        $this->container['subscriber_count'] = $subscriber_count;

        return $this;
    }

    /**
     * Gets organization_name
     *
     * @return string|null
     */
    public function getOrganizationName()
    {
        return $this->container['organization_name'];
    }

    /**
     * Sets organization_name
     *
     * @param string|null $organization_name The name of the organization associated with this client account.
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
     * Gets site_owner_name
     *
     * @return string|null
     */
    public function getSiteOwnerName()
    {
        return $this->container['site_owner_name'];
    }

    /**
     * Sets site_owner_name
     *
     * @param string|null $site_owner_name The user name that identifies a client account.
     *
     * @return self
     */
    public function setSiteOwnerName($site_owner_name)
    {
        if (is_null($site_owner_name)) {
            throw new \InvalidArgumentException('non-nullable site_owner_name cannot be null');
        }
        $this->container['site_owner_name'] = $site_owner_name;

        return $this;
    }

    /**
     * Gets billing_status
     *
     * @return string|null
     */
    public function getBillingStatus()
    {
        return $this->container['billing_status'];
    }

    /**
     * Sets billing_status
     *
     * @param string|null $billing_status The client's account billing status. When you first create a client account the `billing status` defaults to `Trial`. Billing status values include: <ul>   <li><code>Trial</code> - A non-paying trial client account (default value).</li>   <li><code>Open</code> - An active and paying client account.</li>   <li><code>Canceled</code> - A canceled client account.</li>   <li><code>Trial End</code> - The trial period has ended for this client account.</li> </ul>
     *
     * @return self
     */
    public function setBillingStatus($billing_status)
    {
        if (is_null($billing_status)) {
            throw new \InvalidArgumentException('non-nullable billing_status cannot be null');
        }
        $this->container['billing_status'] = $billing_status;

        return $this;
    }

    /**
     * Gets last_login_date
     *
     * @return \DateTime|null
     */
    public function getLastLoginDate()
    {
        return $this->container['last_login_date'];
    }

    /**
     * Sets last_login_date
     *
     * @param \DateTime|null $last_login_date The system generated date and time (ISO-8601) showing when the client last logged into their Constant Contact account. If a client has not logged into their account, the value is `null`. This property does not display in the results.
     *
     * @return self
     */
    public function setLastLoginDate($last_login_date)
    {
        if (is_null($last_login_date)) {
            throw new \InvalidArgumentException('non-nullable last_login_date cannot be null');
        }
        $this->container['last_login_date'] = $last_login_date;

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


