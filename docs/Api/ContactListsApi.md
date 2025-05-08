# ConstantContactApi\Client\ContactListsApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createList()**](ContactListsApi.md#createList) | **POST** /contact_lists | POST (create) a List |
| [**deleteList()**](ContactListsApi.md#deleteList) | **DELETE** /contact_lists/{list_id} | DELETE a List |
| [**getAllLists()**](ContactListsApi.md#getAllLists) | **GET** /contact_lists | GET Lists Collection |
| [**getList()**](ContactListsApi.md#getList) | **GET** /contact_lists/{list_id} | GET a List |
| [**getListIdXrefs()**](ContactListsApi.md#getListIdXrefs) | **GET** /contact_lists/list_id_xrefs | GET a collection of V2 and V3 API List IDs |
| [**updateList()**](ContactListsApi.md#updateList) | **PUT** /contact_lists/{list_id} | PUT (update) a List |


## `createList()`

```php
createList($update_list_request): \ConstantContactApi\Client\Model\UpdateList200Response
```

POST (create) a List

Create a new contact list resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_list_request = new \ConstantContactApi\Client\Model\UpdateListRequest(); // \ConstantContactApi\Client\Model\UpdateListRequest | JSON payload defining the new contact list

try {
    $result = $apiInstance->createList($update_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->createList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_list_request** | [**\ConstantContactApi\Client\Model\UpdateListRequest**](../Model/UpdateListRequest.md)| JSON payload defining the new contact list | |

### Return type

[**\ConstantContactApi\Client\Model\UpdateList200Response**](../Model/UpdateList200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteList()`

```php
deleteList($list_id): \ConstantContactApi\Client\Model\DeleteList202Response
```

DELETE a List

Deletes the specified contact list and its membership. DELETE List requests are processed asynchronously, and you can track the status of the request by making a GET call to the URI shown in the `_links` property in the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = cbc05bac-6a41-46fa-a063-79961763bf4b; // string | Unique ID of the list to delete

try {
    $result = $apiInstance->deleteList($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->deleteList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**| Unique ID of the list to delete | |

### Return type

[**\ConstantContactApi\Client\Model\DeleteList202Response**](../Model/DeleteList202Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllLists()`

```php
getAllLists($limit, $include_count, $include_membership_count, $name, $status): \ConstantContactApi\Client\Model\GetAllLists200Response
```

GET Lists Collection

Use this method to return details about all contact lists for the account. <div class=\"Msg\"><p class=\"note-text\">This method does not currently support filtering results using the contact list update date.</p></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Use to specify the number of results displayed per page of output, from 1 - 500, default = 50.
$include_count = true; // bool | Set `include_count` to `true` to return the total number of contact lists that meet your selection criteria.
$include_membership_count = all; // string | Use to include the total number of contacts per list. Set to  `active`, to count only active (mailable) contacts, or `all` to count all contacts.
$name = TopTier; // string | Use to get details for a single list by entering the full name of the list.
$status = all; // string | Use to get lists by status. Accepts comma-separated status values.

try {
    $result = $apiInstance->getAllLists($limit, $include_count, $include_membership_count, $name, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->getAllLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Use to specify the number of results displayed per page of output, from 1 - 500, default &#x3D; 50. | [optional] [default to 50] |
| **include_count** | **bool**| Set &#x60;include_count&#x60; to &#x60;true&#x60; to return the total number of contact lists that meet your selection criteria. | [optional] [default to false] |
| **include_membership_count** | **string**| Use to include the total number of contacts per list. Set to  &#x60;active&#x60;, to count only active (mailable) contacts, or &#x60;all&#x60; to count all contacts. | [optional] |
| **name** | **string**| Use to get details for a single list by entering the full name of the list. | [optional] |
| **status** | **string**| Use to get lists by status. Accepts comma-separated status values. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetAllLists200Response**](../Model/GetAllLists200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getList()`

```php
getList($list_id, $include_membership_count): \ConstantContactApi\Client\Model\GetList200Response
```

GET a List

Use this method to get details about a specific contact list (`list_id`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = cbc05bac-6a41-46fa-a063-79961763bf4b; // string | The system generated ID that uniquely identifies a contact list.
$include_membership_count = all; // string | Returns the total number of contacts per list that meet your selection criteria. Set the `include_membership_count` to `active`, to count only active contacts, or `all` to include all contacts in the count.

try {
    $result = $apiInstance->getList($list_id, $include_membership_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->getList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**| The system generated ID that uniquely identifies a contact list. | |
| **include_membership_count** | **string**| Returns the total number of contacts per list that meet your selection criteria. Set the &#x60;include_membership_count&#x60; to &#x60;active&#x60;, to count only active contacts, or &#x60;all&#x60; to include all contacts in the count. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetList200Response**](../Model/GetList200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListIdXrefs()`

```php
getListIdXrefs($sequence_ids): \ConstantContactApi\Client\Model\GetListIdXrefs200Response
```

GET a collection of V2 and V3 API List IDs

<div class=\"Msg Msg--warning\"><p class=\"note-text\">Use this endpoint to migrate your locally stored V2 contact list data to the new V3 format. Developers are expected to use this endpoint sparingly. This endpoint is NOT intended for regular or repeated use. Constant Contact will eventually deprecate and remove this endpoint.</p></div>  This GET call retrieves a collection of cross-referenced list sequence IDs (`id` used in the V2 API) and UUIDs (`list_id` used in the V3 API). This endpoint is intended for developers who have an existing V2 API integration, and are migrating their users to a new V3 API integration. The V2 and V3 APIs use different resource ID formats. Use the `sequence_ids` query parameter to specify a set of comma delimited V2 list ids to cross-reference. See [Migrating Apps and Data to V3](/api_guide/migration_overview.html) to learn more.\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequence_ids = 1995998026,1882999944,1775099999; // string | Comma delimited list of V2 API list `ids` to cross-reference with the V3 API `list_id` value. Endpoint accepts a maximum of 500 ids at a time.

try {
    $result = $apiInstance->getListIdXrefs($sequence_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->getListIdXrefs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sequence_ids** | **string**| Comma delimited list of V2 API list &#x60;ids&#x60; to cross-reference with the V3 API &#x60;list_id&#x60; value. Endpoint accepts a maximum of 500 ids at a time. | |

### Return type

[**\ConstantContactApi\Client\Model\GetListIdXrefs200Response**](../Model/GetListIdXrefs200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateList()`

```php
updateList($list_id, $update_list_request): \ConstantContactApi\Client\Model\UpdateList200Response
```

PUT (update) a List

Updates an existing contact list resource, specified by `list_id`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = cbc05bac-6a41-46fa-a063-79961763bf4b; // string | Unique ID of the contact list to update
$update_list_request = new \ConstantContactApi\Client\Model\UpdateListRequest(); // \ConstantContactApi\Client\Model\UpdateListRequest | JSON payload containing updates to the specified contact list

try {
    $result = $apiInstance->updateList($list_id, $update_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactListsApi->updateList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **string**| Unique ID of the contact list to update | |
| **update_list_request** | [**\ConstantContactApi\Client\Model\UpdateListRequest**](../Model/UpdateListRequest.md)| JSON payload containing updates to the specified contact list | |

### Return type

[**\ConstantContactApi\Client\Model\UpdateList200Response**](../Model/UpdateList200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
