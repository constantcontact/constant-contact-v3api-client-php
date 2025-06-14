<?php
/**
 * GetEmailCampaignActivity200ResponseDocumentProperties
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
 * GetEmailCampaignActivity200ResponseDocumentProperties Class Doc Comment
 *
 * @category Class
 * @description An object that contains optional properties for legacy format type emails (&lt;code&gt;format_type&lt;/code&gt; 1 and 2). If you attempt to add a property that does apply to the email &lt;code&gt;format_type&lt;/code&gt;, the API will ignore the property.
 * @package  ConstantContactApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetEmailCampaignActivity200ResponseDocumentProperties implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getEmailCampaignActivity_200_response_document_properties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'style_content' => 'string',
        'letter_format' => 'string',
        'greeting_salutation' => 'string',
        'greeting_name_type' => 'string',
        'greeting_secondary' => 'string',
        'subscribe_link_enabled' => 'string',
        'subscribe_link_name' => 'string',
        'text_content' => 'string',
        'permission_reminder_enabled' => 'string',
        'permission_reminder' => 'string',
        'view_as_webpage_enabled' => 'string',
        'view_as_webpage_text' => 'string',
        'view_as_webpage_link_name' => 'string',
        'forward_email_link_enabled' => 'string',
        'forward_email_link_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'style_content' => null,
        'letter_format' => null,
        'greeting_salutation' => null,
        'greeting_name_type' => null,
        'greeting_secondary' => null,
        'subscribe_link_enabled' => null,
        'subscribe_link_name' => null,
        'text_content' => null,
        'permission_reminder_enabled' => null,
        'permission_reminder' => null,
        'view_as_webpage_enabled' => null,
        'view_as_webpage_text' => null,
        'view_as_webpage_link_name' => null,
        'forward_email_link_enabled' => null,
        'forward_email_link_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'style_content' => false,
        'letter_format' => false,
        'greeting_salutation' => false,
        'greeting_name_type' => false,
        'greeting_secondary' => false,
        'subscribe_link_enabled' => false,
        'subscribe_link_name' => false,
        'text_content' => false,
        'permission_reminder_enabled' => false,
        'permission_reminder' => false,
        'view_as_webpage_enabled' => false,
        'view_as_webpage_text' => false,
        'view_as_webpage_link_name' => false,
        'forward_email_link_enabled' => false,
        'forward_email_link_name' => false
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
        'style_content' => 'style_content',
        'letter_format' => 'letter_format',
        'greeting_salutation' => 'greeting_salutation',
        'greeting_name_type' => 'greeting_name_type',
        'greeting_secondary' => 'greeting_secondary',
        'subscribe_link_enabled' => 'subscribe_link_enabled',
        'subscribe_link_name' => 'subscribe_link_name',
        'text_content' => 'text_content',
        'permission_reminder_enabled' => 'permission_reminder_enabled',
        'permission_reminder' => 'permission_reminder',
        'view_as_webpage_enabled' => 'view_as_webpage_enabled',
        'view_as_webpage_text' => 'view_as_webpage_text',
        'view_as_webpage_link_name' => 'view_as_webpage_link_name',
        'forward_email_link_enabled' => 'forward_email_link_enabled',
        'forward_email_link_name' => 'forward_email_link_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'style_content' => 'setStyleContent',
        'letter_format' => 'setLetterFormat',
        'greeting_salutation' => 'setGreetingSalutation',
        'greeting_name_type' => 'setGreetingNameType',
        'greeting_secondary' => 'setGreetingSecondary',
        'subscribe_link_enabled' => 'setSubscribeLinkEnabled',
        'subscribe_link_name' => 'setSubscribeLinkName',
        'text_content' => 'setTextContent',
        'permission_reminder_enabled' => 'setPermissionReminderEnabled',
        'permission_reminder' => 'setPermissionReminder',
        'view_as_webpage_enabled' => 'setViewAsWebpageEnabled',
        'view_as_webpage_text' => 'setViewAsWebpageText',
        'view_as_webpage_link_name' => 'setViewAsWebpageLinkName',
        'forward_email_link_enabled' => 'setForwardEmailLinkEnabled',
        'forward_email_link_name' => 'setForwardEmailLinkName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'style_content' => 'getStyleContent',
        'letter_format' => 'getLetterFormat',
        'greeting_salutation' => 'getGreetingSalutation',
        'greeting_name_type' => 'getGreetingNameType',
        'greeting_secondary' => 'getGreetingSecondary',
        'subscribe_link_enabled' => 'getSubscribeLinkEnabled',
        'subscribe_link_name' => 'getSubscribeLinkName',
        'text_content' => 'getTextContent',
        'permission_reminder_enabled' => 'getPermissionReminderEnabled',
        'permission_reminder' => 'getPermissionReminder',
        'view_as_webpage_enabled' => 'getViewAsWebpageEnabled',
        'view_as_webpage_text' => 'getViewAsWebpageText',
        'view_as_webpage_link_name' => 'getViewAsWebpageLinkName',
        'forward_email_link_enabled' => 'getForwardEmailLinkEnabled',
        'forward_email_link_name' => 'getForwardEmailLinkName'
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
        $this->setIfExists('style_content', $data ?? [], null);
        $this->setIfExists('letter_format', $data ?? [], 'HTML');
        $this->setIfExists('greeting_salutation', $data ?? [], null);
        $this->setIfExists('greeting_name_type', $data ?? [], 'N');
        $this->setIfExists('greeting_secondary', $data ?? [], null);
        $this->setIfExists('subscribe_link_enabled', $data ?? [], 'false');
        $this->setIfExists('subscribe_link_name', $data ?? [], null);
        $this->setIfExists('text_content', $data ?? [], null);
        $this->setIfExists('permission_reminder_enabled', $data ?? [], 'false');
        $this->setIfExists('permission_reminder', $data ?? [], null);
        $this->setIfExists('view_as_webpage_enabled', $data ?? [], 'false');
        $this->setIfExists('view_as_webpage_text', $data ?? [], null);
        $this->setIfExists('view_as_webpage_link_name', $data ?? [], null);
        $this->setIfExists('forward_email_link_enabled', $data ?? [], 'false');
        $this->setIfExists('forward_email_link_name', $data ?? [], null);
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

        if (!is_null($this->container['style_content']) && (mb_strlen($this->container['style_content']) > 150000)) {
            $invalidProperties[] = "invalid value for 'style_content', the character length must be smaller than or equal to 150000.";
        }

        if (!is_null($this->container['greeting_salutation']) && (mb_strlen($this->container['greeting_salutation']) > 50)) {
            $invalidProperties[] = "invalid value for 'greeting_salutation', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['greeting_secondary']) && (mb_strlen($this->container['greeting_secondary']) > 1500)) {
            $invalidProperties[] = "invalid value for 'greeting_secondary', the character length must be smaller than or equal to 1500.";
        }

        if (!is_null($this->container['subscribe_link_name']) && (mb_strlen($this->container['subscribe_link_name']) > 80)) {
            $invalidProperties[] = "invalid value for 'subscribe_link_name', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['text_content']) && (mb_strlen($this->container['text_content']) > 150000)) {
            $invalidProperties[] = "invalid value for 'text_content', the character length must be smaller than or equal to 150000.";
        }

        if (!is_null($this->container['permission_reminder']) && (mb_strlen($this->container['permission_reminder']) > 1500)) {
            $invalidProperties[] = "invalid value for 'permission_reminder', the character length must be smaller than or equal to 1500.";
        }

        if (!is_null($this->container['view_as_webpage_text']) && (mb_strlen($this->container['view_as_webpage_text']) > 50)) {
            $invalidProperties[] = "invalid value for 'view_as_webpage_text', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['forward_email_link_name']) && (mb_strlen($this->container['forward_email_link_name']) > 80)) {
            $invalidProperties[] = "invalid value for 'forward_email_link_name', the character length must be smaller than or equal to 80.";
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
     * Gets style_content
     *
     * @return string|null
     */
    public function getStyleContent()
    {
        return $this->container['style_content'];
    }

    /**
     * Sets style_content
     *
     * @param string|null $style_content Contains style sheet elements for XHTML letter format emails. This property applies only to <code>format_type</code> 1.
     *
     * @return self
     */
    public function setStyleContent($style_content)
    {
        if (is_null($style_content)) {
            throw new \InvalidArgumentException('non-nullable style_content cannot be null');
        }
        if ((mb_strlen($style_content) > 150000)) {
            throw new \InvalidArgumentException('invalid length for $style_content when calling GetEmailCampaignActivity200ResponseDocumentProperties., must be smaller than or equal to 150000.');
        }

        $this->container['style_content'] = $style_content;

        return $this;
    }

    /**
     * Gets letter_format
     *
     * @return string|null
     */
    public function getLetterFormat()
    {
        return $this->container['letter_format'];
    }

    /**
     * Sets letter_format
     *
     * @param string|null $letter_format Email message format. Valid values are <code>HTML</code> and <code>XHTML</code>. By default, the value is <code>HTML</code>. For more information, see the <a href=\"http://www.constantcontact.com/display_media.jsp?id=87\" target=\"_blank\">Advanced Editor User's Guide</a>. This property applies only to <code>format_type</code> 1. You cannot change this property after you create an email.
     *
     * @return self
     */
    public function setLetterFormat($letter_format)
    {
        if (is_null($letter_format)) {
            throw new \InvalidArgumentException('non-nullable letter_format cannot be null');
        }
        $this->container['letter_format'] = $letter_format;

        return $this;
    }

    /**
     * Gets greeting_salutation
     *
     * @return string|null
     */
    public function getGreetingSalutation()
    {
        return $this->container['greeting_salutation'];
    }

    /**
     * Sets greeting_salutation
     *
     * @param string|null $greeting_salutation The greeting used in the email message. This property applies only to <code>format_type</code> 1.
     *
     * @return self
     */
    public function setGreetingSalutation($greeting_salutation)
    {
        if (is_null($greeting_salutation)) {
            throw new \InvalidArgumentException('non-nullable greeting_salutation cannot be null');
        }
        if ((mb_strlen($greeting_salutation) > 50)) {
            throw new \InvalidArgumentException('invalid length for $greeting_salutation when calling GetEmailCampaignActivity200ResponseDocumentProperties., must be smaller than or equal to 50.');
        }

        $this->container['greeting_salutation'] = $greeting_salutation;

        return $this;
    }

    /**
     * Gets greeting_name_type
     *
     * @return string|null
     */
    public function getGreetingNameType()
    {
        return $this->container['greeting_name_type'];
    }

    /**
     * Sets greeting_name_type
     *
     * @param string|null $greeting_name_type The type of name the campaign uses to greet the contact. Valid values are <code>F</code> (First Name), <code>L</code> (Last Name), <code>B</code> (First and Last Name), or <code>N</code> (No greeting). By default, the value is <code>N</code>. This property applies only to <code>format_type</code> 1.
     *
     * @return self
     */
    public function setGreetingNameType($greeting_name_type)
    {
        if (is_null($greeting_name_type)) {
            throw new \InvalidArgumentException('non-nullable greeting_name_type cannot be null');
        }
        $this->container['greeting_name_type'] = $greeting_name_type;

        return $this;
    }

    /**
     * Gets greeting_secondary
     *
     * @return string|null
     */
    public function getGreetingSecondary()
    {
        return $this->container['greeting_secondary'];
    }

    /**
     * Sets greeting_secondary
     *
     * @param string|null $greeting_secondary A fallback text string the campaign uses to greet the contact when the <code>greeting_name_type</code> is not available or set to <code>N</code>. This property applies only to <code>format_type</code> 1.
     *
     * @return self
     */
    public function setGreetingSecondary($greeting_secondary)
    {
        if (is_null($greeting_secondary)) {
            throw new \InvalidArgumentException('non-nullable greeting_secondary cannot be null');
        }
        if ((mb_strlen($greeting_secondary) > 1500)) {
            throw new \InvalidArgumentException('invalid length for $greeting_secondary when calling GetEmailCampaignActivity200ResponseDocumentProperties., must be smaller than or equal to 1500.');
        }

        $this->container['greeting_secondary'] = $greeting_secondary;

        return $this;
    }

    /**
     * Gets subscribe_link_enabled
     *
     * @return string|null
     */
    public function getSubscribeLinkEnabled()
    {
        return $this->container['subscribe_link_enabled'];
    }

    /**
     * Sets subscribe_link_enabled
     *
     * @param string|null $subscribe_link_enabled If <code>true</code>, the email footer includes a link for subscribing to the list. If <code>false</code>, the message footer does not include a link for subscribing to the list. By default, the value is <code>false</code>. This property applies only to <code>format_type</code> 1.
     *
     * @return self
     */
    public function setSubscribeLinkEnabled($subscribe_link_enabled)
    {
        if (is_null($subscribe_link_enabled)) {
            throw new \InvalidArgumentException('non-nullable subscribe_link_enabled cannot be null');
        }
        $this->container['subscribe_link_enabled'] = $subscribe_link_enabled;

        return $this;
    }

    /**
     * Gets subscribe_link_name
     *
     * @return string|null
     */
    public function getSubscribeLinkName()
    {
        return $this->container['subscribe_link_name'];
    }

    /**
     * Sets subscribe_link_name
     *
     * @param string|null $subscribe_link_name The text displayed as the name for the subscribe link in the email footer. This property applies only to <code>format_type</code> 1.
     *
     * @return self
     */
    public function setSubscribeLinkName($subscribe_link_name)
    {
        if (is_null($subscribe_link_name)) {
            throw new \InvalidArgumentException('non-nullable subscribe_link_name cannot be null');
        }
        if ((mb_strlen($subscribe_link_name) > 80)) {
            throw new \InvalidArgumentException('invalid length for $subscribe_link_name when calling GetEmailCampaignActivity200ResponseDocumentProperties., must be smaller than or equal to 80.');
        }

        $this->container['subscribe_link_name'] = $subscribe_link_name;

        return $this;
    }

    /**
     * Gets text_content
     *
     * @return string|null
     */
    public function getTextContent()
    {
        return $this->container['text_content'];
    }

    /**
     * Sets text_content
     *
     * @param string|null $text_content Contains the text content that Constant Contact displays to contacts when their email client cannot display HTML email. If you do not specify text content, Constant Contact displays \"Greetings!\" as the text content. This property applies only to <code>format_type</code> 1.
     *
     * @return self
     */
    public function setTextContent($text_content)
    {
        if (is_null($text_content)) {
            throw new \InvalidArgumentException('non-nullable text_content cannot be null');
        }
        if ((mb_strlen($text_content) > 150000)) {
            throw new \InvalidArgumentException('invalid length for $text_content when calling GetEmailCampaignActivity200ResponseDocumentProperties., must be smaller than or equal to 150000.');
        }

        $this->container['text_content'] = $text_content;

        return $this;
    }

    /**
     * Gets permission_reminder_enabled
     *
     * @return string|null
     */
    public function getPermissionReminderEnabled()
    {
        return $this->container['permission_reminder_enabled'];
    }

    /**
     * Sets permission_reminder_enabled
     *
     * @param string|null $permission_reminder_enabled If <code>true</code>, Constant Contact displays your <code>permission_reminder</code> message to contacts at top of the email. If <code>false</code>, Constant Contact does not display the message. By default, the value is <code>false</code>. This property applies to <code>format_type</code> 1 and 2.
     *
     * @return self
     */
    public function setPermissionReminderEnabled($permission_reminder_enabled)
    {
        if (is_null($permission_reminder_enabled)) {
            throw new \InvalidArgumentException('non-nullable permission_reminder_enabled cannot be null');
        }
        $this->container['permission_reminder_enabled'] = $permission_reminder_enabled;

        return $this;
    }

    /**
     * Gets permission_reminder
     *
     * @return string|null
     */
    public function getPermissionReminder()
    {
        return $this->container['permission_reminder'];
    }

    /**
     * Sets permission_reminder
     *
     * @param string|null $permission_reminder The message text Constant Contact displays at the top of the email message to remind users that they are subscribed to an email list. This property applies to <code>format_type</code> 1 and 2.
     *
     * @return self
     */
    public function setPermissionReminder($permission_reminder)
    {
        if (is_null($permission_reminder)) {
            throw new \InvalidArgumentException('non-nullable permission_reminder cannot be null');
        }
        if ((mb_strlen($permission_reminder) > 1500)) {
            throw new \InvalidArgumentException('invalid length for $permission_reminder when calling GetEmailCampaignActivity200ResponseDocumentProperties., must be smaller than or equal to 1500.');
        }

        $this->container['permission_reminder'] = $permission_reminder;

        return $this;
    }

    /**
     * Gets view_as_webpage_enabled
     *
     * @return string|null
     */
    public function getViewAsWebpageEnabled()
    {
        return $this->container['view_as_webpage_enabled'];
    }

    /**
     * Sets view_as_webpage_enabled
     *
     * @param string|null $view_as_webpage_enabled If <code>true</code>, Constant Contact displays the view as web page email message. If <code>false</code> Constant Contact does not display the message. By default, the value is <code>false</code>. This property applies to <code>format_type</code> 1 and 2.
     *
     * @return self
     */
    public function setViewAsWebpageEnabled($view_as_webpage_enabled)
    {
        if (is_null($view_as_webpage_enabled)) {
            throw new \InvalidArgumentException('non-nullable view_as_webpage_enabled cannot be null');
        }
        $this->container['view_as_webpage_enabled'] = $view_as_webpage_enabled;

        return $this;
    }

    /**
     * Gets view_as_webpage_text
     *
     * @return string|null
     */
    public function getViewAsWebpageText()
    {
        return $this->container['view_as_webpage_text'];
    }

    /**
     * Sets view_as_webpage_text
     *
     * @param string|null $view_as_webpage_text The text Constant Contact displays before the view as web page link at the top of the email. This property applies to <code>format_type</code> 1 and 2.
     *
     * @return self
     */
    public function setViewAsWebpageText($view_as_webpage_text)
    {
        if (is_null($view_as_webpage_text)) {
            throw new \InvalidArgumentException('non-nullable view_as_webpage_text cannot be null');
        }
        if ((mb_strlen($view_as_webpage_text) > 50)) {
            throw new \InvalidArgumentException('invalid length for $view_as_webpage_text when calling GetEmailCampaignActivity200ResponseDocumentProperties., must be smaller than or equal to 50.');
        }

        $this->container['view_as_webpage_text'] = $view_as_webpage_text;

        return $this;
    }

    /**
     * Gets view_as_webpage_link_name
     *
     * @return string|null
     */
    public function getViewAsWebpageLinkName()
    {
        return $this->container['view_as_webpage_link_name'];
    }

    /**
     * Sets view_as_webpage_link_name
     *
     * @param string|null $view_as_webpage_link_name The name of the link that users can click to view the email as a web page. This property applies to <code>format_type</code> 1 and 2.
     *
     * @return self
     */
    public function setViewAsWebpageLinkName($view_as_webpage_link_name)
    {
        if (is_null($view_as_webpage_link_name)) {
            throw new \InvalidArgumentException('non-nullable view_as_webpage_link_name cannot be null');
        }
        $this->container['view_as_webpage_link_name'] = $view_as_webpage_link_name;

        return $this;
    }

    /**
     * Gets forward_email_link_enabled
     *
     * @return string|null
     */
    public function getForwardEmailLinkEnabled()
    {
        return $this->container['forward_email_link_enabled'];
    }

    /**
     * Sets forward_email_link_enabled
     *
     * @param string|null $forward_email_link_enabled If <code>true</code>, when the user forwards an email message the footer includes a link for subscribing to the list. If <code>false</code>, when a user forwards an email message the footer does not include a link for subscribing to the list. By default, the value is <code>false</code>. This property applies to <code>format_type</code> 1 and 2.
     *
     * @return self
     */
    public function setForwardEmailLinkEnabled($forward_email_link_enabled)
    {
        if (is_null($forward_email_link_enabled)) {
            throw new \InvalidArgumentException('non-nullable forward_email_link_enabled cannot be null');
        }
        $this->container['forward_email_link_enabled'] = $forward_email_link_enabled;

        return $this;
    }

    /**
     * Gets forward_email_link_name
     *
     * @return string|null
     */
    public function getForwardEmailLinkName()
    {
        return $this->container['forward_email_link_name'];
    }

    /**
     * Sets forward_email_link_name
     *
     * @param string|null $forward_email_link_name The text displayed as the name for the forward email link in the footer when a user forwards an email. This property applies to <code>format_type</code> 1 and 2.
     *
     * @return self
     */
    public function setForwardEmailLinkName($forward_email_link_name)
    {
        if (is_null($forward_email_link_name)) {
            throw new \InvalidArgumentException('non-nullable forward_email_link_name cannot be null');
        }
        if ((mb_strlen($forward_email_link_name) > 80)) {
            throw new \InvalidArgumentException('invalid length for $forward_email_link_name when calling GetEmailCampaignActivity200ResponseDocumentProperties., must be smaller than or equal to 80.');
        }

        $this->container['forward_email_link_name'] = $forward_email_link_name;

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


