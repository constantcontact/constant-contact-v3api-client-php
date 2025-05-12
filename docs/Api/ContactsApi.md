# ConstantContactApi\Client\ContactsApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContact()**](ContactsApi.md#createContact) | **POST** /contacts | POST (create) a Contact |
| [**createOrUpdateContact()**](ContactsApi.md#createOrUpdateContact) | **POST** /contacts/sign_up_form | Create or Update a Contact |
| [**deleteContact()**](ContactsApi.md#deleteContact) | **DELETE** /contacts/{contact_id} | DELETE a Contact |
| [**getAllContacts()**](ContactsApi.md#getAllContacts) | **GET** /contacts | GET Contacts Collection |
| [**getContactById()**](ContactsApi.md#getContactById) | **GET** /contacts/{contact_id} | GET a Contact |
| [**getContactCounts()**](ContactsApi.md#getContactCounts) | **GET** /contacts/counts | GET Contact Consent Counts |
| [**getContactIdXrefs()**](ContactsApi.md#getContactIdXrefs) | **GET** /contacts/contact_id_xrefs | GET a collection of V2 and V3 API contact IDs |
| [**getSmsEngagementHistory()**](ContactsApi.md#getSmsEngagementHistory) | **GET** /contacts/sms_engagement_history/{contact_id} | GET SMS Engagement History for a Contact |
| [**resubscribeContact()**](ContactsApi.md#resubscribeContact) | **PUT** /contacts/resubscribe/{contact_id} | PUT Resubscribe a Contact |
| [**updateContact()**](ContactsApi.md#updateContact) | **PUT** /contacts/{contact_id} | PUT (update) a Contact |


## `createContact()`

```php
createContact($create_contact_request): \ConstantContactApi\Client\Model\GetContactById200Response
```

POST (create) a Contact

Creates a new contact resource. You must include the `create_source` property and at least one of the following properties: `first_name`, `last_name`, a unique `email_address` (specified using the `EmailAddress` object), or the `sms_channel` property (specified using the `ContactSmsChannel` object).  <div class=\"Msg\"><p class=\"note-text\">If `email_address` is specified: **Only use this method when a contact gives you their explicit permission to send them an email. It is a violation of anti-spam and telemarketing laws, as well as a serious violation of the Constant Contact Terms of Service to use the Opt-in features of the API to opt a contact back in without his or her own action and consent.</p></div>  If `sms_channel` is specified: <div class=\"Msg\"><p class=\"note-text\">Only use this method when a contact gives you their explicit permission to send them an SMS. It is a violation of anti-spam and telemarketing laws, as well as a serious violation of the Constant Contact Terms of Service to use the Opt-in features of the API to opt a contact back in without his or her own action and consent.</p></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_contact_request = new \ConstantContactApi\Client\Model\CreateContactRequest(); // \ConstantContactApi\Client\Model\CreateContactRequest | The JSON payload defining the contact

try {
    $result = $apiInstance->createContact($create_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_contact_request** | [**\ConstantContactApi\Client\Model\CreateContactRequest**](../Model/CreateContactRequest.md)| The JSON payload defining the contact | |

### Return type

[**\ConstantContactApi\Client\Model\GetContactById200Response**](../Model/GetContactById200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrUpdateContact()`

```php
createOrUpdateContact($create_or_update_contact_request): \ConstantContactApi\Client\Model\CreateOrUpdateContact200Response
```

Create or Update a Contact

Use this method to create a new contact or update an existing contact. In the request body, this method requires including the `list_memberships` array as well as either the contact's `email_address` string or `sms_channel` object which includes the contact's SMS number. The information you specify determines if a new contact is either created (the email address or SMS number does not already exist in the account), or if an existing contact is updated (the email address or SMS number already exists). The SMS product feature does not need to be enabled to include a contacts SMS details.  Updates to existing contacts are partial updates. This method only updates the contact properties you include in the request body. Updates append new contact lists or custom fields to the existing `list_memberships` or `custom_fields` arrays.  If `email_address` is specified: <div class=\"Msg\"><p class=\"note-text\">Only use this method when a contact gives you their explicit permission to send them an email. It is a violation of anti-spam and telemarketing laws, as well as a serious violation of the Constant Contact Terms of Service to use the Opt-in features of the API to opt a contact back in without his or her own action and consent.</p></div>  If `sms_channel` is specified: <div class=\"Msg\"><p class=\"note-text\">Only use this method when a contact gives you their explicit permission to send them an SMS. It is a violation of anti-spam and telemarketing laws, as well as a serious violation of the Constant Contact Terms of Service to use the Opt-in features of the API to opt a contact back in without his or her own action and consent.</p></div>  When this method creates a new contact, it returns a 201 response code.When this method updates an existing contact, it returns a 200 response code. Updating a deleted contact restores the contact.  The method automatically modifies the contact's `permission_to_send` and `opt_in_source` properties depending on the [Confirmed Opt-In](https://knowledgebase.constantcontact.com/articles/KnowledgeBase/5533-obtain-permission-to-send-email-campaigns-to-your-contacts-by-using-confirmed-opt-in) Constant Contact account setting:  If Confirmed Opt-in is _enabled_, this method automatically sets the `permission_to_send` property as `pending_confirmation` for new contacts. If Confirmed Opt-in is _disabled_, this method automatically sets the `permission_to_send` property as explicit and the `opt_in_source` property as `Contact` for new contacts. Updated contacts have their `permission_to_send` property set as explicit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_or_update_contact_request = new \ConstantContactApi\Client\Model\CreateOrUpdateContactRequest(); // \ConstantContactApi\Client\Model\CreateOrUpdateContactRequest | A JSON request body payload that contains the contact resource you are creating or updating. The request body must contain the `email_address` property and `list_memberships` array, or the `sms_channel` object.

try {
    $result = $apiInstance->createOrUpdateContact($create_or_update_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createOrUpdateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_or_update_contact_request** | [**\ConstantContactApi\Client\Model\CreateOrUpdateContactRequest**](../Model/CreateOrUpdateContactRequest.md)| A JSON request body payload that contains the contact resource you are creating or updating. The request body must contain the &#x60;email_address&#x60; property and &#x60;list_memberships&#x60; array, or the &#x60;sms_channel&#x60; object. | |

### Return type

[**\ConstantContactApi\Client\Model\CreateOrUpdateContact200Response**](../Model/CreateOrUpdateContact200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContact()`

```php
deleteContact($contact_id)
```

DELETE a Contact

Deletes the contact identified by the contact_id path parameter. Deleted contacts won't receive email from you, and they don't count as active contacts. Unlike unsubscribed contacts, deleted contacts can be revived, or added back to an account. Learn how to [revive deleted contacts](/api_guide/contacts_delete.html#revive).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | Unique ID of contact to DELETE

try {
    $apiInstance->deleteContact($contact_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| Unique ID of contact to DELETE | |

### Return type

void (empty response body)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllContacts()`

```php
getAllContacts($status, $email, $lists, $segment_id, $tags, $updated_after, $updated_before, $created_after, $created_before, $optout_after, $optout_before, $include, $sms_status, $include_count, $limit): \ConstantContactApi\Client\Model\GetAllContacts200Response
```

GET Contacts Collection

Use this method to return a collection of contacts. Use the query parameters to search for contacts that match specific contact properties and sub-resource properties as criteria. For example, you can search using the contact's `email` address, `lists` memberships, and by the date range that a contact was created or updated. Use the `limit` query parameter to limit the number of results returned per page. Use the `include` query parameter to include contact sub-resources in the response and `include_count` to include the total number of contacts that meet your specified search criteria.  By default, this method returns all contacts that are not deleted. Use the `status` query parameter with the value `all` to return all contacts including deleted contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Use the `status` query parameter to search for contacts by status. This parameter accepts one or more comma separated values: `all`, `active`, `deleted`, `not_set`, `pending_confirmation`, `temp_hold`, and `unsubscribed`.
$email = xyz@example.com; // string | Use the `email` query parameter to search for a contact using a specific email address.
$lists = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a,04fe9a-a579-43c5-bb1a-58ed29bf0a6a,04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | Use the `lists` query parameter to search for contacts that are members of one or more specified lists. Use a comma to separate multiple `list_id` values, up to a maximum of 25.
$segment_id = 14; // string | Use to get contacts that meet the segment criteria for a single specified `segment_id`. This query parameter can only be combined with the limit query parameter. When using the `segment_id` query parameter, the V3 API may return a 202 response code instead of a 200 response. The 202 response code indicates that your request has been accepted, but not fully completed. Retry sending your API request to return the completed results and a 200 response code.
$tags = fa85f64-5717-4562-b3fc-2c963f66afa6; // string | Use to get contact details for up to 50 specified tags. Use a comma to separate each `tag_id`.
$updated_after = 2022-01-01T16:37:59.091Z; // \DateTime | Use `updated_after` to search for contacts that have been updated after the date you specify. To search for updated contacts within a date range, specify both `updated_after` and `updated_before` dates. Accepts ISO-8601 formatted dates.
$updated_before = 2022-07-16T16:37:59.091Z; // \DateTime | Use `updated_before` to search for contacts that have been updated before a specified date. To search for updated contacts within a date range, specify both `updated_after` and `updated_before` dates. Accepts ISO-8601 formatted dates.
$created_after = 2021-01-01T16:37:59.091Z; // \DateTime | Use `created_after` to search for contacts created after a specified date. To search for contacts created within a date range, specify both `created_after` and `created_before` dates. Accepts ISO-8601 formatted dates.
$created_before = 2022-07-16T16:37:59.091Z; // \DateTime | Use `created_before` to search for contacts created before a specified date. To search for contacts created within a date range, specify both `created_after` and `created_before` dates. Accepts ISO-8601 formatted dates.
$optout_after = 2022-11-16T16:20:59.091Z; // \DateTime | Use `optout_after` to search for contacts that unsubscribed after a specified date.
$optout_before = 2022-11-16T16:20:59.091Z; // \DateTime | Use `optout_before` to search for contacts that unsubscribed before a specified date.
$include = custom_fields,list_memberships; // string | Use `include` to specify which contact sub-resources to include in the response. Use a comma to separate multiple sub-resources. Valid values: `custom_fields`, `list_memberships`, `taggings`, `notes`,`phone_numbers`, `street_addresses`.
$sms_status = 'sms_status_example'; // string | Use to get contacts by their SMS status. This parameter accepts one or more comma separated values: `all`, `explicit`, `unsubscribed`, `pending_confirmation`, `not_set`.
$include_count = true; // bool | Set `include_count=true` to include the total number of contacts (`contacts_count`) that meet all search criteria in the response body.
$limit = 25; // int | Specifies the number of results displayed per page of output in the response, from 1 - 500, default = 50.

try {
    $result = $apiInstance->getAllContacts($status, $email, $lists, $segment_id, $tags, $updated_after, $updated_before, $created_after, $created_before, $optout_after, $optout_before, $include, $sms_status, $include_count, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getAllContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**| Use the &#x60;status&#x60; query parameter to search for contacts by status. This parameter accepts one or more comma separated values: &#x60;all&#x60;, &#x60;active&#x60;, &#x60;deleted&#x60;, &#x60;not_set&#x60;, &#x60;pending_confirmation&#x60;, &#x60;temp_hold&#x60;, and &#x60;unsubscribed&#x60;. | [optional] |
| **email** | **string**| Use the &#x60;email&#x60; query parameter to search for a contact using a specific email address. | [optional] |
| **lists** | **string**| Use the &#x60;lists&#x60; query parameter to search for contacts that are members of one or more specified lists. Use a comma to separate multiple &#x60;list_id&#x60; values, up to a maximum of 25. | [optional] |
| **segment_id** | **string**| Use to get contacts that meet the segment criteria for a single specified &#x60;segment_id&#x60;. This query parameter can only be combined with the limit query parameter. When using the &#x60;segment_id&#x60; query parameter, the V3 API may return a 202 response code instead of a 200 response. The 202 response code indicates that your request has been accepted, but not fully completed. Retry sending your API request to return the completed results and a 200 response code. | [optional] |
| **tags** | **string**| Use to get contact details for up to 50 specified tags. Use a comma to separate each &#x60;tag_id&#x60;. | [optional] |
| **updated_after** | **\DateTime**| Use &#x60;updated_after&#x60; to search for contacts that have been updated after the date you specify. To search for updated contacts within a date range, specify both &#x60;updated_after&#x60; and &#x60;updated_before&#x60; dates. Accepts ISO-8601 formatted dates. | [optional] |
| **updated_before** | **\DateTime**| Use &#x60;updated_before&#x60; to search for contacts that have been updated before a specified date. To search for updated contacts within a date range, specify both &#x60;updated_after&#x60; and &#x60;updated_before&#x60; dates. Accepts ISO-8601 formatted dates. | [optional] |
| **created_after** | **\DateTime**| Use &#x60;created_after&#x60; to search for contacts created after a specified date. To search for contacts created within a date range, specify both &#x60;created_after&#x60; and &#x60;created_before&#x60; dates. Accepts ISO-8601 formatted dates. | [optional] |
| **created_before** | **\DateTime**| Use &#x60;created_before&#x60; to search for contacts created before a specified date. To search for contacts created within a date range, specify both &#x60;created_after&#x60; and &#x60;created_before&#x60; dates. Accepts ISO-8601 formatted dates. | [optional] |
| **optout_after** | **\DateTime**| Use &#x60;optout_after&#x60; to search for contacts that unsubscribed after a specified date. | [optional] |
| **optout_before** | **\DateTime**| Use &#x60;optout_before&#x60; to search for contacts that unsubscribed before a specified date. | [optional] |
| **include** | **string**| Use &#x60;include&#x60; to specify which contact sub-resources to include in the response. Use a comma to separate multiple sub-resources. Valid values: &#x60;custom_fields&#x60;, &#x60;list_memberships&#x60;, &#x60;taggings&#x60;, &#x60;notes&#x60;,&#x60;phone_numbers&#x60;, &#x60;street_addresses&#x60;. | [optional] |
| **sms_status** | **string**| Use to get contacts by their SMS status. This parameter accepts one or more comma separated values: &#x60;all&#x60;, &#x60;explicit&#x60;, &#x60;unsubscribed&#x60;, &#x60;pending_confirmation&#x60;, &#x60;not_set&#x60;. | [optional] |
| **include_count** | **bool**| Set &#x60;include_count&#x3D;true&#x60; to include the total number of contacts (&#x60;contacts_count&#x60;) that meet all search criteria in the response body. | [optional] |
| **limit** | **int**| Specifies the number of results displayed per page of output in the response, from 1 - 500, default &#x3D; 50. | [optional] [default to 50] |

### Return type

[**\ConstantContactApi\Client\Model\GetAllContacts200Response**](../Model/GetAllContacts200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactById()`

```php
getContactById($contact_id, $include): \ConstantContactApi\Client\Model\GetContactById200Response
```

GET a Contact

This endpoint GETs a specific contact resource (contact_id). Use the `include` query parameter to add any of the available contact sub-resources to the response payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | Unique ID of contact to GET
$include = custom_fields,list_memberships; // string | Use `include` to specify which contact sub-resources to include in the response. Use a comma to separate multiple sub-resources. Valid values: `custom_fields`, `list_memberships`, `phone_numbers`, `street_addresses`, `notes`, and `taggings`.

try {
    $result = $apiInstance->getContactById($contact_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| Unique ID of contact to GET | |
| **include** | **string**| Use &#x60;include&#x60; to specify which contact sub-resources to include in the response. Use a comma to separate multiple sub-resources. Valid values: &#x60;custom_fields&#x60;, &#x60;list_memberships&#x60;, &#x60;phone_numbers&#x60;, &#x60;street_addresses&#x60;, &#x60;notes&#x60;, and &#x60;taggings&#x60;. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetContactById200Response**](../Model/GetContactById200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactCounts()`

```php
getContactCounts($include): \ConstantContactApi\Client\Model\GetContactCounts200Response
```

GET Contact Consent Counts

Use to get the total contacts count for the account and the total contact-consent counts for each consent state. Optionally, to include the total number of contacts that subscribed within the last 30 days in the results, use `new_subscribers` in the `include` query parameter. To optimize open rates, reduce spam reports, and help grow your business,  you must value your contact's consent to receive or to not receive your emails.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = new_subscriber; // string | Use to return the total number of contacts that subscribed within the last 30 days in the results.

try {
    $result = $apiInstance->getContactCounts($include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactCounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include** | **string**| Use to return the total number of contacts that subscribed within the last 30 days in the results. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetContactCounts200Response**](../Model/GetContactCounts200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactIdXrefs()`

```php
getContactIdXrefs($sequence_ids): \ConstantContactApi\Client\Model\GetContactIdXrefs200Response
```

GET a collection of V2 and V3 API contact IDs

<div class=\"Msg Msg--warning\"><p class=\"note-text\">Use this endpoint to migrate your locally stored V2 contact ids to the new V3 format. Developers are expected to use this endpoint sparingly. This endpoint is NOT intended for regular or repeated use. Constant Contact will eventually deprecate and remove this endpoint.</p></div>  This GET call retrieves a collection of cross-referenced contact sequence IDs (`id` used in the V2 API) and UUIDs (`contact_id` used in the V3 API). This endpoint is intended for developers who have an existing V2 API integration, and are migrating their users to a new V3 API integration. The V2 and V3 APIs use different resource ID formats. Use the `sequence_ids` query parameter to specify a set of comma delimited V2 contacts ids to cross-referenced with their V3 `contact_ids`. See [Migrating to V3](/api_guide/migration_overview.html) to learn more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_ids = 1995998026,1882999944,1775099999; // string | Comma delimited list of V2 API contact `ids` to cross-reference with the V3 API `contact_id` value. Endpoint accepts a maximum of 500 ids at a time.

try {
    $result = $apiInstance->getContactIdXrefs($sequence_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactIdXrefs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_ids** | **string**| Comma delimited list of V2 API contact &#x60;ids&#x60; to cross-reference with the V3 API &#x60;contact_id&#x60; value. Endpoint accepts a maximum of 500 ids at a time. | |

### Return type

[**\ConstantContactApi\Client\Model\GetContactIdXrefs200Response**](../Model/GetContactIdXrefs200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsEngagementHistory()`

```php
getSmsEngagementHistory($contact_id): \ConstantContactApi\Client\Model\GetSmsEngagementHistory200ResponseInner[]
```

GET SMS Engagement History for a Contact

Use this method to return SMS engagement details for a contact, such as SMS consent and advertising frequency details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | The contact's unique ID.

try {
    $result = $apiInstance->getSmsEngagementHistory($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getSmsEngagementHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| The contact&#39;s unique ID. | |

### Return type

[**\ConstantContactApi\Client\Model\GetSmsEngagementHistory200ResponseInner[]**](../Model/GetSmsEngagementHistory200ResponseInner.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resubscribeContact()`

```php
resubscribeContact($contact_id, $resubscribe_contact_request)
```

PUT Resubscribe a Contact

Use this endpoint to send a confirmation resubscribe email to a contact in order to get their confirmation to resubscribe. This endpoint also adds the resubscribed contact to the contact lists you specify in the request body. You can only send a resubscribe email to the unsubscribed contact once. The contact is not resubscribed until after you receive their confirmation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | The ID that uniquely identifies the contact to resubscribe.
$resubscribe_contact_request = new \ConstantContactApi\Client\Model\ResubscribeContactRequest(); // \ConstantContactApi\Client\Model\ResubscribeContactRequest | The JSON payload used to specify one (or more) contact lists to which the contact requested to be resubscribed.

try {
    $apiInstance->resubscribeContact($contact_id, $resubscribe_contact_request);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->resubscribeContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| The ID that uniquely identifies the contact to resubscribe. | |
| **resubscribe_contact_request** | [**\ConstantContactApi\Client\Model\ResubscribeContactRequest**](../Model/ResubscribeContactRequest.md)| The JSON payload used to specify one (or more) contact lists to which the contact requested to be resubscribed. | |

### Return type

void (empty response body)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContact()`

```php
updateContact($contact_id, $update_contact_request): \ConstantContactApi\Client\Model\GetContactById200Response
```

PUT (update) a Contact

The PUT method updates an existing contact. You must include the `update_source` property in the PUT request payload. To restore  a deleted contact you must specify the `update_source` as `Account`. When updating any resource using PUT, all properties are updated, overwriting all previous values. Any properties left blank or not included in the request are overwritten with null value - however this does not apply to contact subresources.   Add or change any of the subresources by including them in the PUT request payload. Omitted subresources are not overwritten with null. If the contact being updated is deleted, the contact will be revived. If `email_address` is specified: <div class=\"Msg\"><p class=\"note-text\"> **Only use this method when a contact gives you their explicit permission to send them an email. It is a violation of anti-spam and telemarketing laws, as well as a serious violation of the Constant Contact Terms of Service to use the Opt-in features of the API to opt a contact back in without his or her own action and consent.</p></div>  If `sms_channel` is specified: <div class=\"Msg\"><p class=\"note-text\">Only use this method when a contact gives you their explicit permission to send them an SMS. It is a violation of anti-spam and telemarketing laws, as well as a serious violation of the Constant Contact Terms of Service to use the Opt-in features of the API to opt a contact back in without his or her own action and consent.</p></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | Unique ID of contact to update
$update_contact_request = new \ConstantContactApi\Client\Model\UpdateContactRequest(); // \ConstantContactApi\Client\Model\UpdateContactRequest | JSON payload defining the contact object, with updates. Any properties left blank or not included in the PUT payload are overwritten with null value - does not apply to contact subresources.

try {
    $result = $apiInstance->updateContact($contact_id, $update_contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| Unique ID of contact to update | |
| **update_contact_request** | [**\ConstantContactApi\Client\Model\UpdateContactRequest**](../Model/UpdateContactRequest.md)| JSON payload defining the contact object, with updates. Any properties left blank or not included in the PUT payload are overwritten with null value - does not apply to contact subresources. | |

### Return type

[**\ConstantContactApi\Client\Model\GetContactById200Response**](../Model/GetContactById200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
