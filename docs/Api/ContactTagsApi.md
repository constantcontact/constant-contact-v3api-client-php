# ConstantContactApi\Client\ContactTagsApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteTag()**](ContactTagsApi.md#deleteTag) | **DELETE** /contact_tags/{tag_id} | DELETE a Tag |
| [**getAllTags()**](ContactTagsApi.md#getAllTags) | **GET** /contact_tags | GET Details for All Tags |
| [**getTag()**](ContactTagsApi.md#getTag) | **GET** /contact_tags/{tag_id} | GET Tag Details |
| [**postTag()**](ContactTagsApi.md#postTag) | **POST** /contact_tags | POST (Create) a Tag |
| [**putTag()**](ContactTagsApi.md#putTag) | **PUT** /contact_tags/{tag_id} | PUT (Update) a Tag |


## `deleteTag()`

```php
deleteTag($tag_id): \ConstantContactApi\Client\Model\DeleteTag202Response
```

DELETE a Tag

Use this method to create an activity used to un-assign a tag from all assigned contacts and delete the tag. This is an asynchronous activity. To view activity details for the delete request, use the href link returned in the response. [Learn more](/api_guide/tags_delete.html).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 30c97dd0-332e-11eb-923c-fa163e595327; // string | The ID that uniquely identifies a tag in UUID format.

try {
    $result = $apiInstance->deleteTag($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTagsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| The ID that uniquely identifies a tag in UUID format. | |

### Return type

[**\ConstantContactApi\Client\Model\DeleteTag202Response**](../Model/DeleteTag202Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTags()`

```php
getAllTags($limit, $include_count): \ConstantContactApi\Client\Model\GetAllTags200Response
```

GET Details for All Tags

Use this endpoint to get details for all tags in your account. Use the <code>include_count</code> query parameter to include the total number of contacts assigned each tag. Use the <code>limit</code> query parameter to limit the number of tag results returned per page. To get the next page of results, copy the <code>cursor={the cursor ID}</code> from the resulting href link and add it (<code>&</code>) to the URL. For example:  <p><code>/v3/contact_tags?limit=1&cursor=</code></p><p><code>bGltaXQ9MSZuZXh0PTJjZDgwMjdhLTc4YzAtMTFlOS1iZmQwLWZhMTYzZTZiMDFjMQ=</code></p> To learn more, see [Get Tags](/api_guide/tags_get.html).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | Use to specify the number of tag results (up to `500`) to display per page of output. The default is `50`.
$include_count = true; // bool | Returns the total number of contacts (`contacts_count`) to which a tag applies.

try {
    $result = $apiInstance->getAllTags($limit, $include_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTagsApi->getAllTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Use to specify the number of tag results (up to &#x60;500&#x60;) to display per page of output. The default is &#x60;50&#x60;. | [optional] [default to 50] |
| **include_count** | **bool**| Returns the total number of contacts (&#x60;contacts_count&#x60;) to which a tag applies. | [optional] [default to false] |

### Return type

[**\ConstantContactApi\Client\Model\GetAllTags200Response**](../Model/GetAllTags200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTag()`

```php
getTag($tag_id, $include_count): \ConstantContactApi\Client\Model\GetTag200Response
```

GET Tag Details

Use this method to get tag details for a specified `tag_id`. Use the `include_count` query parameter to include or exclude the total number of contacts to which this tag is assigned. To learn more, see  [Get a Tag's Details](/api_guide/tags_get_single.html).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = d938260a-af1e-11e9-a540-fa163e595123; // string | The ID that uniquely identifies a tag (UUID format).
$include_count = true; // bool | Use to include (`true`) or exclude (`false`) the total number of tagged contacts (`contacts_count`) from the results.

try {
    $result = $apiInstance->getTag($tag_id, $include_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTagsApi->getTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| The ID that uniquely identifies a tag (UUID format). | |
| **include_count** | **bool**| Use to include (&#x60;true&#x60;) or exclude (&#x60;false&#x60;) the total number of tagged contacts (&#x60;contacts_count&#x60;) from the results. | [optional] [default to false] |

### Return type

[**\ConstantContactApi\Client\Model\GetTag200Response**](../Model/GetTag200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTag()`

```php
postTag($post_tag_request): \ConstantContactApi\Client\Model\GetTag200Response
```

POST (Create) a Tag

Use this method to create a new tag. The tag `name` is required and must be unique and can include most common keyboard symbols. Optionally, when creating a new tag you can specify the source (`tag_source`) used to identify the contacts to tag in the request body. [Learn more](/api_guide/tags_create.html).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_tag_request = new \ConstantContactApi\Client\Model\PostTagRequest(); // \ConstantContactApi\Client\Model\PostTagRequest | The JSON payload to use to create a new tag.

try {
    $result = $apiInstance->postTag($post_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTagsApi->postTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_tag_request** | [**\ConstantContactApi\Client\Model\PostTagRequest**](../Model/PostTagRequest.md)| The JSON payload to use to create a new tag. | |

### Return type

[**\ConstantContactApi\Client\Model\GetTag200Response**](../Model/GetTag200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putTag()`

```php
putTag($tag_id, $put_tag_request): \ConstantContactApi\Client\Model\GetTag200Response
```

PUT (Update) a Tag

Use this method to rename an existing tag to a new unique tag name (`name`). The maximum length is 255 characters. The `tag_source` value cannot be updated using this method. You can set the `tag_source` value using the `POST contact_tags method`. [Learn more](/api_guide/tags_update.html)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 30c97dd0-332e-11eb-923c-fa163e595327; // string | The system generated ID used to uniquely identify the tag that you want to rename (UUID format).
$put_tag_request = new \ConstantContactApi\Client\Model\PutTagRequest(); // \ConstantContactApi\Client\Model\PutTagRequest | The JSON payload used to update the tag name (`name`).

try {
    $result = $apiInstance->putTag($tag_id, $put_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTagsApi->putTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **string**| The system generated ID used to uniquely identify the tag that you want to rename (UUID format). | |
| **put_tag_request** | [**\ConstantContactApi\Client\Model\PutTagRequest**](../Model/PutTagRequest.md)| The JSON payload used to update the tag name (&#x60;name&#x60;). | |

### Return type

[**\ConstantContactApi\Client\Model\GetTag200Response**](../Model/GetTag200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
