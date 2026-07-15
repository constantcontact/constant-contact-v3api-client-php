# ConstantContactApi\Client\ContactsCustomFieldsApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomFields()**](ContactsCustomFieldsApi.md#createCustomFields) | **POST** /contact_custom_fields | POST (create) a custom_field |
| [**deleteCustomField()**](ContactsCustomFieldsApi.md#deleteCustomField) | **DELETE** /contact_custom_fields/{custom_field_id} | DELETE a custom_field |
| [**getAllCustomFields()**](ContactsCustomFieldsApi.md#getAllCustomFields) | **GET** /contact_custom_fields | GET custom_fields Collection |
| [**getCustomField()**](ContactsCustomFieldsApi.md#getCustomField) | **GET** /contact_custom_fields/{custom_field_id} | GET a custom_field |
| [**updateCustomField()**](ContactsCustomFieldsApi.md#updateCustomField) | **PUT** /contact_custom_fields/{custom_field_id} | Update a custom field. |


## `createCustomFields()`

```php
createCustomFields($create_custom_fields_request): \ConstantContactApi\Client\Model\GetCustomField200Response
```

POST (create) a custom_field

Custom fields are extra data fields you create to store additional information about your contacts, such as preferences, membership levels, and interests. Use custom fields to organize contacts, send personalized email campaigns, and to identify a targeted audience for a specific campaign. Custom fields types include text, number, date, drop-down lists, radio buttons, and checkboxes. A user can configure up to 100 `custom_fields` in their account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_fields_request = new \ConstantContactApi\Client\Model\CreateCustomFieldsRequest(); // \ConstantContactApi\Client\Model\CreateCustomFieldsRequest | The JSON payload required to create a new custom field.

try {
    $result = $apiInstance->createCustomFields($create_custom_fields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsCustomFieldsApi->createCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_custom_fields_request** | [**\ConstantContactApi\Client\Model\CreateCustomFieldsRequest**](../Model/CreateCustomFieldsRequest.md)| The JSON payload required to create a new custom field. | |

### Return type

[**\ConstantContactApi\Client\Model\GetCustomField200Response**](../Model/GetCustomField200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomField()`

```php
deleteCustomField($custom_field_id)
```

DELETE a custom_field

Delete a custom field from the user's account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | The ID that uniquely identifies the custom field to delete.

try {
    $apiInstance->deleteCustomField($custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsCustomFieldsApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**| The ID that uniquely identifies the custom field to delete. | |

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

## `getAllCustomFields()`

```php
getAllCustomFields($limit): \ConstantContactApi\Client\Model\GetAllCustomFields200Response
```

GET custom_fields Collection

Get all custom fields defined in the user's account. <div class=\"Msg\"><p class=\"note-text\">This method does not currently support filtering results using the custom field update date.</p></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Specifies the number of results displayed per page of output, from 1 - 100, default = 50.

try {
    $result = $apiInstance->getAllCustomFields($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsCustomFieldsApi->getAllCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Specifies the number of results displayed per page of output, from 1 - 100, default &#x3D; 50. | [optional] [default to 50] |

### Return type

[**\ConstantContactApi\Client\Model\GetAllCustomFields200Response**](../Model/GetAllCustomFields200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomField()`

```php
getCustomField($custom_field_id): \ConstantContactApi\Client\Model\GetCustomField200Response
```

GET a custom_field

Get details for a specified custom field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | The ID that uniquely identifies the custom field.

try {
    $result = $apiInstance->getCustomField($custom_field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsCustomFieldsApi->getCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**| The ID that uniquely identifies the custom field. | |

### Return type

[**\ConstantContactApi\Client\Model\GetCustomField200Response**](../Model/GetCustomField200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomField()`

```php
updateCustomField($custom_field_id, $update_custom_field_request): \ConstantContactApi\Client\Model\GetCustomField200Response
```

Update a custom field.

Update an existing custom field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsCustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 04fe9a-a579-43c5-bb1a-58ed29bf0a6a; // string | The ID that uniquely identifies the custom field to update.
$update_custom_field_request = new \ConstantContactApi\Client\Model\UpdateCustomFieldRequest(); // \ConstantContactApi\Client\Model\UpdateCustomFieldRequest | The JSON payload used to update an existing custom field. Any properties omitted in the PUT request are overwritten with a null value.

try {
    $result = $apiInstance->updateCustomField($custom_field_id, $update_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsCustomFieldsApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_id** | **string**| The ID that uniquely identifies the custom field to update. | |
| **update_custom_field_request** | [**\ConstantContactApi\Client\Model\UpdateCustomFieldRequest**](../Model/UpdateCustomFieldRequest.md)| The JSON payload used to update an existing custom field. Any properties omitted in the PUT request are overwritten with a null value. | |

### Return type

[**\ConstantContactApi\Client\Model\GetCustomField200Response**](../Model/GetCustomField200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
