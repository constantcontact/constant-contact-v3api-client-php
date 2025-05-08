# ConstantContactApi\Client\EmailCampaignsABTestsApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createABTestEmailCampaign()**](EmailCampaignsABTestsApi.md#createABTestEmailCampaign) | **POST** /emails/activities/{campaign_activity_id}/abtest | POST (Create) an A/B Test for an Email Campaign Activity |
| [**deleteABTestEmailCampaign()**](EmailCampaignsABTestsApi.md#deleteABTestEmailCampaign) | **DELETE** /emails/activities/{campaign_activity_id}/abtest | DELETE an A/B Test for an Email Campaign Activity |
| [**getABTestEmailCampaign()**](EmailCampaignsABTestsApi.md#getABTestEmailCampaign) | **GET** /emails/activities/{campaign_activity_id}/abtest | GET A/B Test Details for an Email Campaign Activity |


## `createABTestEmailCampaign()`

```php
createABTestEmailCampaign($campaign_activity_id, $get_ab_test_email_campaign200_response): \ConstantContactApi\Client\Model\GetABTestEmailCampaign200Response
```

POST (Create) an A/B Test for an Email Campaign Activity

Use this method to create a new A/B test for a primary email campaign activity. You must specify an alternative subject line, the percentage of contact to use for the A/B test, and the number of hours to wait after the A/B test is sent before determining the winning subject line. To create an A/B test, the campaign must have a `current_status` of `DRAFT`. When you create an A/B test, the `type` changes from Newsletter (code= `10`) to A/B Test (code= `57`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailCampaignsABTestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for the primary email campaign activity.
$get_ab_test_email_campaign200_response = new \ConstantContactApi\Client\Model\GetABTestEmailCampaign200Response(); // \ConstantContactApi\Client\Model\GetABTestEmailCampaign200Response | Specify the `alternative_subject` line, `test_size` percentage of contacts (value must from `5` to `50` inclusively), and the `winner_wait_duration` (value must be `6`, `12`, `24`, or `48` hours).

try {
    $result = $apiInstance->createABTestEmailCampaign($campaign_activity_id, $get_ab_test_email_campaign200_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsABTestsApi->createABTestEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for the primary email campaign activity. | |
| **get_ab_test_email_campaign200_response** | [**\ConstantContactApi\Client\Model\GetABTestEmailCampaign200Response**](../Model/GetABTestEmailCampaign200Response.md)| Specify the &#x60;alternative_subject&#x60; line, &#x60;test_size&#x60; percentage of contacts (value must from &#x60;5&#x60; to &#x60;50&#x60; inclusively), and the &#x60;winner_wait_duration&#x60; (value must be &#x60;6&#x60;, &#x60;12&#x60;, &#x60;24&#x60;, or &#x60;48&#x60; hours). | |

### Return type

[**\ConstantContactApi\Client\Model\GetABTestEmailCampaign200Response**](../Model/GetABTestEmailCampaign200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteABTestEmailCampaign()`

```php
deleteABTestEmailCampaign($campaign_activity_id)
```

DELETE an A/B Test for an Email Campaign Activity

Deletes an A/B Test on an primary email campaign activity. You can only delete A/B tests that have a `current_status` of `Draft`. Deleting an A/B tests reverts the email campaign activity `type` from A/B Test (code= `57`) back to NewsLetter (code= `10`). Constant Contact uses the original subject line, rather than the alternate A/B test subject line, when an A/B test is deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailCampaignsABTestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for the primary email campaign activity.

try {
    $apiInstance->deleteABTestEmailCampaign($campaign_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsABTestsApi->deleteABTestEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for the primary email campaign activity. | |

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

## `getABTestEmailCampaign()`

```php
getABTestEmailCampaign($campaign_activity_id): \ConstantContactApi\Client\Model\GetABTestEmailCampaign200Response
```

GET A/B Test Details for an Email Campaign Activity

Use this method to get A/B test details for a primary email campaign activity, such as the alternate email subject line, the contact test percentage size, and the number of hours to wait to determine the winning subject line to use. Currently, A/B tests support subject line only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailCampaignsABTestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for the primary email campaign activity.

try {
    $result = $apiInstance->getABTestEmailCampaign($campaign_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsABTestsApi->getABTestEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for the primary email campaign activity. | |

### Return type

[**\ConstantContactApi\Client\Model\GetABTestEmailCampaign200Response**](../Model/GetABTestEmailCampaign200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
