# ConstantContactApi\Client\BulkActivitiesApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCSVImportActivity()**](BulkActivitiesApi.md#createCSVImportActivity) | **POST** /activities/contacts_file_import | Import Contacts using a CSV File |
| [**createDeleteActivity()**](BulkActivitiesApi.md#createDeleteActivity) | **POST** /activities/contact_delete | Delete Contacts in Bulk |
| [**createExportActivity()**](BulkActivitiesApi.md#createExportActivity) | **POST** /activities/contact_exports | Export Contacts to a File |
| [**createImportJSONActivity()**](BulkActivitiesApi.md#createImportJSONActivity) | **POST** /activities/contacts_json_import | Import Contacts using a JSON Payload |
| [**createListAddActivity()**](BulkActivitiesApi.md#createListAddActivity) | **POST** /activities/add_list_memberships | Add Contacts to Lists |
| [**createListDeleteActivity()**](BulkActivitiesApi.md#createListDeleteActivity) | **POST** /activities/list_delete | Delete Contact Lists |
| [**createListRemoveActivity()**](BulkActivitiesApi.md#createListRemoveActivity) | **POST** /activities/remove_list_memberships | Remove Contacts from Lists |
| [**createTagAddContactActivity()**](BulkActivitiesApi.md#createTagAddContactActivity) | **POST** /activities/contacts_taggings_add | Add Tags to Contacts |
| [**createTagDeleteActivity()**](BulkActivitiesApi.md#createTagDeleteActivity) | **POST** /activities/contacts_tags_delete | Delete Tags |
| [**createTagRemoveActivity()**](BulkActivitiesApi.md#createTagRemoveActivity) | **POST** /activities/contacts_taggings_remove | Remove Tags from Contacts |
| [**getActivityById()**](BulkActivitiesApi.md#getActivityById) | **GET** /activities/{activity_id} | GET an Activity Status |
| [**getAllActivities()**](BulkActivitiesApi.md#getAllActivities) | **GET** /activities | GET Activity Status Collection |
| [**getCSVExportFile()**](BulkActivitiesApi.md#getCSVExportFile) | **GET** /contact_exports/{file_export_id} | Retrieve Exported Contacts File |
| [**postCustomFieldDelete()**](BulkActivitiesApi.md#postCustomFieldDelete) | **POST** /activities/custom_fields_delete | Delete Custom Fields |


## `createCSVImportActivity()`

```php
createCSVImportActivity($file, $list_ids, $sms_permission_to_send): \ConstantContactApi\Client\Model\CreateCSVImportActivity201Response
```

Import Contacts using a CSV File

This multipart method creates an asynchronous background job that adds or updates contacts by importing a CSV file containing contact information. Do not use a Content-Type header value with this method.  Importing a new contact email address automatically sets the contact's `permission_to_send` property as `implicit` and the `opt_in_source` property as `Account`. Importing an existing contact only updates the contact properties you include in the request. Importing contacts with `sms_number`s requires using the `sms_permission_to_send` parameter  to specify permissions for all contacts being imported. Set to `explicit` to specify that all contacts either provided explicit permission. Set to `not_set` if permission was not provided. If `explicit`, you must also include the `sms_consent_date` as a column header to include the date the contact consented to receiving SMS messages. Contacts must have either an email address or an SMS number defined.   The CSV file has a maximum of 40,000 lines including the header row (39,999 contacts) and a maximum file size of 4 megabytes (MB).  Lines above the 40,000 line maximum are not processed. If the request body exceeds 4 MB, only the contacts contained in the first 4 MB are imported and the remaining data is dropped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | The CSV file you are importing  must include either `email` or `sms_number` as a column heading. Other properties you can include using column headings are: `first_name`.  `last_name`, `phone`, `job_title`, `anniversary`, `birthday_day`, `birthday_month`, `company_name`, `street`, `street2`, `city`, `state`, `zip`, `country`, and `sms_consent_date`.   If adding an `sms_number`, you must also include the `sms_permission_to_send` parameter and set it to either `not_set` or `explicit`. If `explicit`, requires including `sms_consent_date` as a column header to specify the date the contact consented to receiving SMS messages.   You can also use custom fields as column headings. Enter the custom field name prefixed with `cf:` as the column heading. For example, use `cf:first_name` as the header name if you have a custom field named \\\"first_name\\\". The custom field must already exist in the Constant Contact account you are using. Depending on the custom field data type, you can enter dates or strings as the value of the custom field. Each contact can contain up to 25 different custom fields.
$list_ids = array('list_ids_example'); // string[] | Specify which contact lists you are adding all imported contacts to as an array of up to 50 contact `list_id` values.
$sms_permission_to_send = 'sms_permission_to_send_example'; // string | If importing contact `sms_number`s, use this parameter to specify how SMS consent was provided. If all contacts in the file provided their consent, set to `explicit` and include each contact's `sms_consent_date`. If all contacts in the file have not yet provided consent, set to `not_set` (`sms_consent_date` is not required). You cannot message a contact that does not have a sms consent date set.

try {
    $result = $apiInstance->createCSVImportActivity($file, $list_ids, $sms_permission_to_send);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->createCSVImportActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| The CSV file you are importing  must include either &#x60;email&#x60; or &#x60;sms_number&#x60; as a column heading. Other properties you can include using column headings are: &#x60;first_name&#x60;.  &#x60;last_name&#x60;, &#x60;phone&#x60;, &#x60;job_title&#x60;, &#x60;anniversary&#x60;, &#x60;birthday_day&#x60;, &#x60;birthday_month&#x60;, &#x60;company_name&#x60;, &#x60;street&#x60;, &#x60;street2&#x60;, &#x60;city&#x60;, &#x60;state&#x60;, &#x60;zip&#x60;, &#x60;country&#x60;, and &#x60;sms_consent_date&#x60;.   If adding an &#x60;sms_number&#x60;, you must also include the &#x60;sms_permission_to_send&#x60; parameter and set it to either &#x60;not_set&#x60; or &#x60;explicit&#x60;. If &#x60;explicit&#x60;, requires including &#x60;sms_consent_date&#x60; as a column header to specify the date the contact consented to receiving SMS messages.   You can also use custom fields as column headings. Enter the custom field name prefixed with &#x60;cf:&#x60; as the column heading. For example, use &#x60;cf:first_name&#x60; as the header name if you have a custom field named \\\&quot;first_name\\\&quot;. The custom field must already exist in the Constant Contact account you are using. Depending on the custom field data type, you can enter dates or strings as the value of the custom field. Each contact can contain up to 25 different custom fields. | |
| **list_ids** | [**string[]**](../Model/string.md)| Specify which contact lists you are adding all imported contacts to as an array of up to 50 contact &#x60;list_id&#x60; values. | |
| **sms_permission_to_send** | **string**| If importing contact &#x60;sms_number&#x60;s, use this parameter to specify how SMS consent was provided. If all contacts in the file provided their consent, set to &#x60;explicit&#x60; and include each contact&#39;s &#x60;sms_consent_date&#x60;. If all contacts in the file have not yet provided consent, set to &#x60;not_set&#x60; (&#x60;sms_consent_date&#x60; is not required). You cannot message a contact that does not have a sms consent date set. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\CreateCSVImportActivity201Response**](../Model/CreateCSVImportActivity201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDeleteActivity()`

```php
createDeleteActivity($create_delete_activity_request): \ConstantContactApi\Client\Model\CreateDeleteActivity201Response
```

Delete Contacts in Bulk

Use this endpoint to bulk delete contacts in an account. Contacts to delete are specified by contact_id (up to 500), or by list_id (up to 50 lists); all contacts that are members of the list_ids are deleted. Deleted contacts won’t receive email from you, and they don’t count as active contacts. Unlike unsubscribed contacts, deleted contacts can be added back to an account. [Learn how to revive deleted contacts](/api_guide/contacts_delete.html#revive).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_delete_activity_request = new \ConstantContactApi\Client\Model\CreateDeleteActivityRequest(); // \ConstantContactApi\Client\Model\CreateDeleteActivityRequest | The request body contains an array of contact_ids <em>or</em> list_ids. All contact_ids provided are deleted, or all members of each specified list_id are deleted.

try {
    $result = $apiInstance->createDeleteActivity($create_delete_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->createDeleteActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_delete_activity_request** | [**\ConstantContactApi\Client\Model\CreateDeleteActivityRequest**](../Model/CreateDeleteActivityRequest.md)| The request body contains an array of contact_ids &lt;em&gt;or&lt;/em&gt; list_ids. All contact_ids provided are deleted, or all members of each specified list_id are deleted. | |

### Return type

[**\ConstantContactApi\Client\Model\CreateDeleteActivity201Response**](../Model/CreateDeleteActivity201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createExportActivity()`

```php
createExportActivity($create_export_activity_request): \ConstantContactApi\Client\Model\CreateExportActivity201Response
```

Export Contacts to a File

Use this method to create an activity that exports contacts and contact details to a CSV file.  You can choose to export all contacts in your account (default) or you can use parameters to filter on which contacts to export. After Constant Contact finishes processing the activity, use the `results` link in the response body to retrieve the CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_export_activity_request = new \ConstantContactApi\Client\Model\CreateExportActivityRequest(); // \ConstantContactApi\Client\Model\CreateExportActivityRequest | A JSON payload that specifies the contacts (rows in the CSV file) and contact properties (columns in the CSV file) you want to export.

try {
    $result = $apiInstance->createExportActivity($create_export_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->createExportActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_export_activity_request** | [**\ConstantContactApi\Client\Model\CreateExportActivityRequest**](../Model/CreateExportActivityRequest.md)| A JSON payload that specifies the contacts (rows in the CSV file) and contact properties (columns in the CSV file) you want to export. | |

### Return type

[**\ConstantContactApi\Client\Model\CreateExportActivity201Response**](../Model/CreateExportActivity201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createImportJSONActivity()`

```php
createImportJSONActivity($create_import_json_activity_request): \ConstantContactApi\Client\Model\CreateCSVImportActivity201Response
```

Import Contacts using a JSON Payload

Use this method to create an asynchronous background job that adds new contacts or updates existing contacts by importing a JSON payload. This method requires a request body that contains the contact data you are importing and the contact lists to which you want to add the imported contacts. A contact's data must include an `email` address and/or `sms_number`. The `sms_number` must be a US phone number to associate with the contact's SMS-enabled phone. Valid formats are <code>1231231234</code> or <code>123-123-1234</code> (the country code must be valid).  Importing a new contact using this method automatically sets the contact's email `permission_to_send` property to `implicit` and the `opt_in_source` property as `Account`. Importing an existing contact only updates the contact properties you include in the request. For each contact, you can import up to three addresses and three phone numbers. International phone numbers are currently not supported.        To import custom fields, prefix the custom field name with `cf:` and add it as a contact property. For example, use the property name `cf:first_name` if you have a custom field named `first_name`. The custom field must already exist in the Constant Contact account you are using. Each contact can contain up to 25 custom fields.  To include a contact's `sms_number`, if the contact provided explicit permission to receive SMS messages, you must set the `sms_permission_to_send` property to `explicit` and specify the date of consent using the `sms_consent_date` column header. If explicit permission was not provided, set `sms_permission_to_send` to `not_set` (the `sms_consent_date` is not required). If the `sms_consent_date` is not set, SMS messages cannot be sent to contacts and `sms_permission_to_send` defaults to `not_set`. Valid value formats for `sms_consent_date` include MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D,M-D-YYYY, or M-DD-YYYY.   The request body payload has a maximum size of 4 megabytes (MB). If the request body exceeds 4 MB, this method only imports the first 4 MB and drops the remaining data. Use the activity URL to check the status of the import activity request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_import_json_activity_request = new \ConstantContactApi\Client\Model\CreateImportJSONActivityRequest(); // \ConstantContactApi\Client\Model\CreateImportJSONActivityRequest | The JSON request payload that contains the contact data and contact lists for the import.

try {
    $result = $apiInstance->createImportJSONActivity($create_import_json_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->createImportJSONActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_import_json_activity_request** | [**\ConstantContactApi\Client\Model\CreateImportJSONActivityRequest**](../Model/CreateImportJSONActivityRequest.md)| The JSON request payload that contains the contact data and contact lists for the import. | |

### Return type

[**\ConstantContactApi\Client\Model\CreateCSVImportActivity201Response**](../Model/CreateCSVImportActivity201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createListAddActivity()`

```php
createListAddActivity($create_list_add_activity_request): \ConstantContactApi\Client\Model\CreateListRemoveActivity201Response
```

Add Contacts to Lists

Use this method to create an activity that adds contacts to one or more lists. Each contact can be a member of up to 50 lists. Use the properties in the `source` object to specify the contacts you want to add to lists. Use the `list_ids` array to specify which lists you want to add your source contacts to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_list_add_activity_request = new \ConstantContactApi\Client\Model\CreateListAddActivityRequest(); // \ConstantContactApi\Client\Model\CreateListAddActivityRequest | The JSON payload used to create the 'add contacts to lists' activity

try {
    $result = $apiInstance->createListAddActivity($create_list_add_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->createListAddActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_list_add_activity_request** | [**\ConstantContactApi\Client\Model\CreateListAddActivityRequest**](../Model/CreateListAddActivityRequest.md)| The JSON payload used to create the &#39;add contacts to lists&#39; activity | |

### Return type

[**\ConstantContactApi\Client\Model\CreateListRemoveActivity201Response**](../Model/CreateListRemoveActivity201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createListDeleteActivity()`

```php
createListDeleteActivity($create_list_delete_activity_request): \ConstantContactApi\Client\Model\CreateListDeleteActivity201Response
```

Delete Contact Lists

Use this endpoint to delete up to 100 contact lists in an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_list_delete_activity_request = new \ConstantContactApi\Client\Model\CreateListDeleteActivityRequest(); // \ConstantContactApi\Client\Model\CreateListDeleteActivityRequest | An array of `list_id`'s to delete.

try {
    $result = $apiInstance->createListDeleteActivity($create_list_delete_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->createListDeleteActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_list_delete_activity_request** | [**\ConstantContactApi\Client\Model\CreateListDeleteActivityRequest**](../Model/CreateListDeleteActivityRequest.md)| An array of &#x60;list_id&#x60;&#39;s to delete. | |

### Return type

[**\ConstantContactApi\Client\Model\CreateListDeleteActivity201Response**](../Model/CreateListDeleteActivity201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createListRemoveActivity()`

```php
createListRemoveActivity($create_list_remove_activity_request): \ConstantContactApi\Client\Model\CreateListRemoveActivity201Response
```

Remove Contacts from Lists

Use this method to create an activity that removes contacts from one or more contact lists. Use the properties in the `source` object to remove specific contacts from your lists. Use the `list_ids` array to specify the target lists from which contacts are removed. Optionally, if the source is  `all_active_contacts` (billable) or `list_ids`, use the `exclude` object to exclude specific contacts from being removed from the destination lists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_list_remove_activity_request = new \ConstantContactApi\Client\Model\CreateListRemoveActivityRequest(); // \ConstantContactApi\Client\Model\CreateListRemoveActivityRequest | The JSON payload used to create the Remove Contacts from Lists' activity

try {
    $result = $apiInstance->createListRemoveActivity($create_list_remove_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->createListRemoveActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_list_remove_activity_request** | [**\ConstantContactApi\Client\Model\CreateListRemoveActivityRequest**](../Model/CreateListRemoveActivityRequest.md)| The JSON payload used to create the Remove Contacts from Lists&#39; activity | |

### Return type

[**\ConstantContactApi\Client\Model\CreateListRemoveActivity201Response**](../Model/CreateListRemoveActivity201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTagAddContactActivity()`

```php
createTagAddContactActivity($create_tag_remove_activity_request): \ConstantContactApi\Client\Model\CreateTagRemoveActivity201Response
```

Add Tags to Contacts

Use this method to create an asynchronous activity that adds one or more tags to all contacts meeting your contact filtering criteria. Use the `source` type to identify contacts from which the specified tags (`tag_id`) are added. Source criteria are mutually exclusive. If the source is `all_active_contacts` or `list_ids`, you can optionally choose to `exclude` contacts by `contact_id`. Use the activity link in the results to check the status of your request. For more use case information, see \"[Add Tags to Contacts](/api_guide/add_tagging_activity.html)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_tag_remove_activity_request = new \ConstantContactApi\Client\Model\CreateTagRemoveActivityRequest(); // \ConstantContactApi\Client\Model\CreateTagRemoveActivityRequest | The JSON payload used to create an asynchronous activity that adds tags to contacts that meet your specified contact filtering criteria.

try {
    $result = $apiInstance->createTagAddContactActivity($create_tag_remove_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->createTagAddContactActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_tag_remove_activity_request** | [**\ConstantContactApi\Client\Model\CreateTagRemoveActivityRequest**](../Model/CreateTagRemoveActivityRequest.md)| The JSON payload used to create an asynchronous activity that adds tags to contacts that meet your specified contact filtering criteria. | |

### Return type

[**\ConstantContactApi\Client\Model\CreateTagRemoveActivity201Response**](../Model/CreateTagRemoveActivity201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTagDeleteActivity()`

```php
createTagDeleteActivity($create_tag_delete_activity_request): \ConstantContactApi\Client\Model\CreateTagRemoveActivity201Response
```

Delete Tags

Use this method to create an asynchronous activity that deletes up to 500 tags. Deleted tags are automatically removed from tagged contacts. Use the `tag_ids` array of string values in the request body to specify which tags to delete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_tag_delete_activity_request = new \ConstantContactApi\Client\Model\CreateTagDeleteActivityRequest(); // \ConstantContactApi\Client\Model\CreateTagDeleteActivityRequest | An array of string values (`tag_id`s) to delete.

try {
    $result = $apiInstance->createTagDeleteActivity($create_tag_delete_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->createTagDeleteActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_tag_delete_activity_request** | [**\ConstantContactApi\Client\Model\CreateTagDeleteActivityRequest**](../Model/CreateTagDeleteActivityRequest.md)| An array of string values (&#x60;tag_id&#x60;s) to delete. | |

### Return type

[**\ConstantContactApi\Client\Model\CreateTagRemoveActivity201Response**](../Model/CreateTagRemoveActivity201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTagRemoveActivity()`

```php
createTagRemoveActivity($create_tag_remove_activity_request): \ConstantContactApi\Client\Model\CreateTagRemoveActivity201Response
```

Remove Tags from Contacts

Use this method to create an asynchronous activity that removes one or more tags from all contacts meeting your contact filtering criteria. Filtering criteria must include the `source` type used to identify contacts from which the specified tags (`tag_id`) are removed. Source types are mutually exclusive. If the specified source is either `all_active_contacts` or `list_ids`, you can optionally choose to `exclude` specified contacts by `contact_id`. Use the activity link in the results to check the status of your request.\" For more use case information, see \"[Remove Tags from Contacts](/api_guide/remove_tagging_activity.html)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_tag_remove_activity_request = new \ConstantContactApi\Client\Model\CreateTagRemoveActivityRequest(); // \ConstantContactApi\Client\Model\CreateTagRemoveActivityRequest | The JSON payload used to create an asynchronous activity that removes tags from contacts meeting your specified contact filtering criteria.

try {
    $result = $apiInstance->createTagRemoveActivity($create_tag_remove_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->createTagRemoveActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_tag_remove_activity_request** | [**\ConstantContactApi\Client\Model\CreateTagRemoveActivityRequest**](../Model/CreateTagRemoveActivityRequest.md)| The JSON payload used to create an asynchronous activity that removes tags from contacts meeting your specified contact filtering criteria. | |

### Return type

[**\ConstantContactApi\Client\Model\CreateTagRemoveActivity201Response**](../Model/CreateTagRemoveActivity201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActivityById()`

```php
getActivityById($activity_id): \ConstantContactApi\Client\Model\GetActivityById200Response
```

GET an Activity Status

This endpoint returns an activity status report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activity_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | The unique ID of the activity to GET

try {
    $result = $apiInstance->getActivityById($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->getActivityById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **activity_id** | **string**| The unique ID of the activity to GET | |

### Return type

[**\ConstantContactApi\Client\Model\GetActivityById200Response**](../Model/GetActivityById200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllActivities()`

```php
getAllActivities($limit, $state): \ConstantContactApi\Client\Model\GetAllActivities200Response
```

GET Activity Status Collection

This endpoint returns a collection of activities. Use the state query parameter to include only activities with a specific status (processing, completed, cancelled, failed, or time_out). Use the limit query parameter to define the number of activities returned per page. Learn [more](/api_guide/activity_status.html).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | Specifies the number of results displayed per page of output, from 1 - 500, default = 50.
$state = processing; // string | Use this parameter to filter the response to include only activities in one of the following states: cancelled, completed, failed, processing, or timed_out.

try {
    $result = $apiInstance->getAllActivities($limit, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->getAllActivities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Specifies the number of results displayed per page of output, from 1 - 500, default &#x3D; 50. | [optional] [default to 50] |
| **state** | **string**| Use this parameter to filter the response to include only activities in one of the following states: cancelled, completed, failed, processing, or timed_out. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetAllActivities200Response**](../Model/GetAllActivities200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCSVExportFile()`

```php
getCSVExportFile($file_export_id): string
```

Retrieve Exported Contacts File

Use this endpoint to retrieve (GET) a CSV file containing exported contacts by providing the `activity_id` of a completed CSV export activity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_export_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | The unique ID of the exported file provided in the results: section of the export contacts activity response.

try {
    $result = $apiInstance->getCSVExportFile($file_export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->getCSVExportFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_export_id** | **string**| The unique ID of the exported file provided in the results: section of the export contacts activity response. | |

### Return type

**string**

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCustomFieldDelete()`

```php
postCustomFieldDelete($post_custom_field_delete_request): \ConstantContactApi\Client\Model\PostCustomFieldDelete201Response
```

Delete Custom Fields

Use this endpoint to delete up to 100 custom fields for an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\BulkActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_custom_field_delete_request = new \ConstantContactApi\Client\Model\PostCustomFieldDeleteRequest(); // \ConstantContactApi\Client\Model\PostCustomFieldDeleteRequest | An array of `custom_field_id`'s to delete.

try {
    $result = $apiInstance->postCustomFieldDelete($post_custom_field_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActivitiesApi->postCustomFieldDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_custom_field_delete_request** | [**\ConstantContactApi\Client\Model\PostCustomFieldDeleteRequest**](../Model/PostCustomFieldDeleteRequest.md)| An array of &#x60;custom_field_id&#x60;&#39;s to delete. | |

### Return type

[**\ConstantContactApi\Client\Model\PostCustomFieldDelete201Response**](../Model/PostCustomFieldDelete201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
