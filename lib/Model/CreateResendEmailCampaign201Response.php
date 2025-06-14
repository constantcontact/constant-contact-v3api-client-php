<?php
/**
 * CreateResendEmailCampaign201Response
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
 * CreateResendEmailCampaign201Response Class Doc Comment
 *
 * @category Class
 * @package  ConstantContactApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateResendEmailCampaign201Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'createResendEmailCampaign_201_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'resend_subject' => 'string',
        'delay_days' => 'int',
        'delay_minutes' => 'int',
        'resend_date' => '\DateTime',
        'resend_request_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'resend_subject' => null,
        'delay_days' => 'int32',
        'delay_minutes' => 'int32',
        'resend_date' => 'date-time',
        'resend_request_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'resend_subject' => false,
        'delay_days' => false,
        'delay_minutes' => false,
        'resend_date' => false,
        'resend_request_id' => false
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
        'resend_subject' => 'resend_subject',
        'delay_days' => 'delay_days',
        'delay_minutes' => 'delay_minutes',
        'resend_date' => 'resend_date',
        'resend_request_id' => 'resend_request_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'resend_subject' => 'setResendSubject',
        'delay_days' => 'setDelayDays',
        'delay_minutes' => 'setDelayMinutes',
        'resend_date' => 'setResendDate',
        'resend_request_id' => 'setResendRequestId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'resend_subject' => 'getResendSubject',
        'delay_days' => 'getDelayDays',
        'delay_minutes' => 'getDelayMinutes',
        'resend_date' => 'getResendDate',
        'resend_request_id' => 'getResendRequestId'
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
        $this->setIfExists('resend_subject', $data ?? [], null);
        $this->setIfExists('delay_days', $data ?? [], null);
        $this->setIfExists('delay_minutes', $data ?? [], null);
        $this->setIfExists('resend_date', $data ?? [], null);
        $this->setIfExists('resend_request_id', $data ?? [], null);
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
     * Gets resend_subject
     *
     * @return string|null
     */
    public function getResendSubject()
    {
        return $this->container['resend_subject'];
    }

    /**
     * Sets resend_subject
     *
     * @param string|null $resend_subject The subject line for the resend email.
     *
     * @return self
     */
    public function setResendSubject($resend_subject)
    {
        if (is_null($resend_subject)) {
            throw new \InvalidArgumentException('non-nullable resend_subject cannot be null');
        }
        $this->container['resend_subject'] = $resend_subject;

        return $this;
    }

    /**
     * Gets delay_days
     *
     * @return int|null
     */
    public function getDelayDays()
    {
        return $this->container['delay_days'];
    }

    /**
     * Sets delay_days
     *
     * @param int|null $delay_days The number of days to wait before Constant Contact resends the email. Valid values include <code>1</code> to <code>10</code> days. This property is mutually exclusive with <code>delay_minutes</code>. This value is only returned in the response results if the resend activity was created with <code>delay_days</code> or the <code>delay_minutes</code> equal to an exact day value.
     *
     * @return self
     */
    public function setDelayDays($delay_days)
    {
        if (is_null($delay_days)) {
            throw new \InvalidArgumentException('non-nullable delay_days cannot be null');
        }
        $this->container['delay_days'] = $delay_days;

        return $this;
    }

    /**
     * Gets delay_minutes
     *
     * @return int|null
     */
    public function getDelayMinutes()
    {
        return $this->container['delay_minutes'];
    }

    /**
     * Sets delay_minutes
     *
     * @param int|null $delay_minutes The number of minutes to wait before Constant Contact resends the email. There are 1,440 minutes in a day. Valid values includes a minimum of <code>720</code> (12 hours) and a maximum of <code>14,400</code> minutes (10 days). This property is mutually exclusive with <code>delay_days</code>.
     *
     * @return self
     */
    public function setDelayMinutes($delay_minutes)
    {
        if (is_null($delay_minutes)) {
            throw new \InvalidArgumentException('non-nullable delay_minutes cannot be null');
        }
        $this->container['delay_minutes'] = $delay_minutes;

        return $this;
    }

    /**
     * Gets resend_date
     *
     * @return \DateTime|null
     */
    public function getResendDate()
    {
        return $this->container['resend_date'];
    }

    /**
     * Sets resend_date
     *
     * @param \DateTime|null $resend_date The system generated ISO-8601 format date and time that Constant Contact resent the email to non-openers.
     *
     * @return self
     */
    public function setResendDate($resend_date)
    {
        if (is_null($resend_date)) {
            throw new \InvalidArgumentException('non-nullable resend_date cannot be null');
        }
        $this->container['resend_date'] = $resend_date;

        return $this;
    }

    /**
     * Gets resend_request_id
     *
     * @return string|null
     */
    public function getResendRequestId()
    {
        return $this->container['resend_request_id'];
    }

    /**
     * Sets resend_request_id
     *
     * @param string|null $resend_request_id For scheduled or sent resend to non-opener emails, this property is a unique identifier for the resend. For draft email campaign resend activities, the value of this property is <code>DRAFT</code>.
     *
     * @return self
     */
    public function setResendRequestId($resend_request_id)
    {
        if (is_null($resend_request_id)) {
            throw new \InvalidArgumentException('non-nullable resend_request_id cannot be null');
        }
        $this->container['resend_request_id'] = $resend_request_id;

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


