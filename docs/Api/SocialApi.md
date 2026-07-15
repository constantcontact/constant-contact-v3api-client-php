# ConstantContactApi\Client\SocialApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSocialPost()**](SocialApi.md#createSocialPost) | **POST** /social/posts | POST (create) a social media post |
| [**getHashtagGroups()**](SocialApi.md#getHashtagGroups) | **GET** /social/hashtags/groups | GET hashtag groups |
| [**getSocialConnections()**](SocialApi.md#getSocialConnections) | **GET** /social/connections | GET social network connections |
| [**getSocialProfiles()**](SocialApi.md#getSocialProfiles) | **GET** /social/profiles | GET social media profiles |


## `createSocialPost()`

```php
createSocialPost($create_social_post_request): \ConstantContactApi\Client\Model\CreateSocialPost200Response
```

POST (create) a social media post

Creates a new social media post that can be published immediately or scheduled for later publication. A post can target one or more social profiles, and can include text, images, and network-specific settings.  Set `status` to `DRAFT` to save without publishing, or `SCHEDULED` to schedule for publication. Scheduled posts require a `scheduled_time` in ISO-8601 format.  Post content and settings can vary per profile — each `profile_posts` entry can have its own text, images, and network-specific settings (e.g., TikTok-specific settings like `disable_comment`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_social_post_request = new \ConstantContactApi\Client\Model\CreateSocialPostRequest(); // \ConstantContactApi\Client\Model\CreateSocialPostRequest | The social post content and configuration.

try {
    $result = $apiInstance->createSocialPost($create_social_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->createSocialPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_social_post_request** | [**\ConstantContactApi\Client\Model\CreateSocialPostRequest**](../Model/CreateSocialPostRequest.md)| The social post content and configuration. | |

### Return type

[**\ConstantContactApi\Client\Model\CreateSocialPost200Response**](../Model/CreateSocialPost200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHashtagGroups()`

```php
getHashtagGroups($limit, $page): \ConstantContactApi\Client\Model\GetHashtagGroups200Response
```

GET hashtag groups

Retrieves a paginated list of saved hashtag groups for the account. Hashtag groups allow users to save and organize reusable collections of hashtags that can be applied to social posts.  Use the `limit` and `page` query parameters to paginate through results. Navigate to the next page using the `_links.next` link in the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 5; // int | Maximum number of hashtag groups to retrieve per page. Default and maximum is `5`.
$page = 0; // int | Page number to retrieve (0-based).

try {
    $result = $apiInstance->getHashtagGroups($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->getHashtagGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Maximum number of hashtag groups to retrieve per page. Default and maximum is &#x60;5&#x60;. | [optional] [default to 5] |
| **page** | **int**| Page number to retrieve (0-based). | [optional] [default to 0] |

### Return type

[**\ConstantContactApi\Client\Model\GetHashtagGroups200Response**](../Model/GetHashtagGroups200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSocialConnections()`

```php
getSocialConnections(): \ConstantContactApi\Client\Model\GetSocialConnections200Response
```

GET social network connections

Retrieves all social network accounts connected to the Constant Contact account, with support for multiple accounts per social network.  A connection represents the authorization link between a Constant Contact account and a single account on a social network (Facebook, Instagram, LinkedIn, TikTok, etc.). Each connection includes account information about the connected user on that network (display name, username, image, etc.) and the current status of the connection (whether it's active, rate-limited, or has any errors).  Note that a single connection may have multiple profiles (pages) associated with it — use `GET /social/profiles` to retrieve the individual profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSocialConnections();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->getSocialConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ConstantContactApi\Client\Model\GetSocialConnections200Response**](../Model/GetSocialConnections200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSocialProfiles()`

```php
getSocialProfiles($include): \ConstantContactApi\Client\Model\GetSocialProfiles200ResponseInner[]
```

GET social media profiles

Retrieves all social media profiles connected to the account. A profile represents a single account on a social network (such as a Facebook Business Page, a LinkedIn Company Page, or an Instagram Business account) that the user has connected to Constant Contact.  Use the `include=accessible` query parameter to additionally check whether each profile is currently accessible for posting. Profiles that are not currently accessible will fail if used to publish a post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = accessible; // string[] | Optional sub-resources to include. Use `accessible` to check if profiles are accessible on the network.

try {
    $result = $apiInstance->getSocialProfiles($include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->getSocialProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include** | [**string[]**](../Model/string.md)| Optional sub-resources to include. Use &#x60;accessible&#x60; to check if profiles are accessible on the network. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetSocialProfiles200ResponseInner[]**](../Model/GetSocialProfiles200ResponseInner.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
