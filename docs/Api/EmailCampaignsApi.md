# ConstantContactApi\Client\EmailCampaignsApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEmailCampaign()**](EmailCampaignsApi.md#createEmailCampaign) | **POST** /emails | POST (Create) a New Email Campaign |
| [**createResendEmailCampaign()**](EmailCampaignsApi.md#createResendEmailCampaign) | **POST** /emails/activities/{campaign_activity_id}/non_opener_resends | POST a Resend to Non-openers Campaign Activity |
| [**deleteEmailCampaign()**](EmailCampaignsApi.md#deleteEmailCampaign) | **DELETE** /emails/{campaign_id} | DELETE an Email Campaign |
| [**deleteResendEmailCampaign()**](EmailCampaignsApi.md#deleteResendEmailCampaign) | **DELETE** /emails/activities/{campaign_activity_id}/non_opener_resends/{resend_request_id} | DELETE a Resend to Non Openers Activity |
| [**getAllEmailCampaigns()**](EmailCampaignsApi.md#getAllEmailCampaigns) | **GET** /emails | GET a Collection of Email Campaigns |
| [**getEmailCampaignActivity()**](EmailCampaignsApi.md#getEmailCampaignActivity) | **GET** /emails/activities/{campaign_activity_id} | GET a Single Email Campaign Activity |
| [**getEmailCampaignById()**](EmailCampaignsApi.md#getEmailCampaignById) | **GET** /emails/{campaign_id} | GET Details About a Single Email Campaign |
| [**getEmailCampaignXrefs()**](EmailCampaignsApi.md#getEmailCampaignXrefs) | **GET** /emails/campaign_id_xrefs | GET a Collection of V2 and V3 API Email Campaign Identifiers |
| [**getResendEmailCampaign()**](EmailCampaignsApi.md#getResendEmailCampaign) | **GET** /emails/activities/{campaign_activity_id}/non_opener_resends | GET Details for a Resend to Non-openers Campaign Activity |
| [**patchEmailCampaignName()**](EmailCampaignsApi.md#patchEmailCampaignName) | **PATCH** /emails/{campaign_id} | PATCH (Update) an Email Campaign Name |
| [**updateEmailCampaignActivity()**](EmailCampaignsApi.md#updateEmailCampaignActivity) | **PUT** /emails/activities/{campaign_activity_id} | PUT (Update) An Email Campaign Activity |


## `createEmailCampaign()`

```php
createEmailCampaign($create_email_campaign_request): \ConstantContactApi\Client\Model\CreateEmailCampaign200Response
```

POST (Create) a New Email Campaign

Use this method to create a new email campaign. This method also creates new `primary_email` and `permalink` email campaign activities and associates them with the new email campaign.  The request body must contain the `name` property and the `email_campaign_activities` array. The `name` must be unique. The `email_campaign_activities` array contains the main content of your email campaign and must include `format_type`, `from_name`, `from_email`, `reply_to_email`, `subject`, and `html_content` properties. The `from_email` address you use must use a verified email address for your account. NOTE: If you create an email campaign using a legacy (V7) format, Constant Contact automatically converts it to the newer custom code format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_email_campaign_request = new \ConstantContactApi\Client\Model\CreateEmailCampaignRequest(); // \ConstantContactApi\Client\Model\CreateEmailCampaignRequest | A JSON request body that contains the email content.

try {
    $result = $apiInstance->createEmailCampaign($create_email_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->createEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_email_campaign_request** | [**\ConstantContactApi\Client\Model\CreateEmailCampaignRequest**](../Model/CreateEmailCampaignRequest.md)| A JSON request body that contains the email content. | |

### Return type

[**\ConstantContactApi\Client\Model\CreateEmailCampaign200Response**](../Model/CreateEmailCampaign200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createResendEmailCampaign()`

```php
createResendEmailCampaign($campaign_activity_id, $create_resend_email_campaign_request): \ConstantContactApi\Client\Model\CreateResendEmailCampaign201Response
```

POST a Resend to Non-openers Campaign Activity

Use this POST method to resend a primary campaign activity to contacts that did not open a campaign activity that has a current `status` of `Draft`, `Scheduled`, or `Done`. You can only create one resend activity per email campaign.    After an email campaign activity is sent to contacts, Constant Contact waits the specified number of `delay_days` or `delay_minutes` (properties are mutually exclusive) before resending to non-openers. If you set both `delay_days` or `delay_minutes`, `delay_minutes` is ignored in the request. You can resend to non-openers a minimum of twelve hours (720 minutes) and a maximum of up to 10 days (or 10 x 1440 minutes) after the initial send date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for the primary email campaign activity.
$create_resend_email_campaign_request = new \ConstantContactApi\Client\Model\CreateResendEmailCampaignRequest(); // \ConstantContactApi\Client\Model\CreateResendEmailCampaignRequest | A JSON request body that specifies when to resend the campaign activity to non-openers.

try {
    $result = $apiInstance->createResendEmailCampaign($campaign_activity_id, $create_resend_email_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->createResendEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for the primary email campaign activity. | |
| **create_resend_email_campaign_request** | [**\ConstantContactApi\Client\Model\CreateResendEmailCampaignRequest**](../Model/CreateResendEmailCampaignRequest.md)| A JSON request body that specifies when to resend the campaign activity to non-openers. | |

### Return type

[**\ConstantContactApi\Client\Model\CreateResendEmailCampaign201Response**](../Model/CreateResendEmailCampaign201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailCampaign()`

```php
deleteEmailCampaign($campaign_id)
```

DELETE an Email Campaign

Use this method to delete an email campaign and the email campaign activities associated with the email campaign. You cannot delete an email campaign when it has a `Scheduled` status.  Constant Contact users can restore deleted email campaigns using the UI.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for the email campaign you are deleting.

try {
    $apiInstance->deleteEmailCampaign($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->deleteEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The unique ID for the email campaign you are deleting. | |

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

## `deleteResendEmailCampaign()`

```php
deleteResendEmailCampaign($campaign_activity_id, $resend_request_id)
```

DELETE a Resend to Non Openers Activity

Use this `DELETE` method to delete (unschedule) a resend to non openers activity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for the primary email campaign activity.
$resend_request_id = 389093; // string | The unique ID associated with the resend for the email campaign activity (for example: `389093`). If the email campaign activity is currently in draft status, specify `DRAFT` as the ID.

try {
    $apiInstance->deleteResendEmailCampaign($campaign_activity_id, $resend_request_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->deleteResendEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for the primary email campaign activity. | |
| **resend_request_id** | **string**| The unique ID associated with the resend for the email campaign activity (for example: &#x60;389093&#x60;). If the email campaign activity is currently in draft status, specify &#x60;DRAFT&#x60; as the ID. | |

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

## `getAllEmailCampaigns()`

```php
getAllEmailCampaigns($limit, $before_date, $after_date): \ConstantContactApi\Client\Model\GetAllEmailCampaigns200Response
```

GET a Collection of Email Campaigns

Use this method to list and get details about your email campaigns. By default, this method returns all email campaigns for the user account including deleted email campaigns. To get email campaigns within a date-range, use the `after_date` and `before_date` query parameters.  This endpoint does not return campaign activity details for each email campaign in the collection. To get email campaign activity details for a single email campaign, use the GET `/emails/{campaign_id}` endpoint.\" <div class=\"Msg\"><p class=\"note-text\">This method does not currently support filtering results using the email campaign creation date.</p></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Specifies the number of campaigns to display on each page of output that is returned (from return 1 - 500). The default returns 50 campaigns per page.
$before_date = 2021-01-10T11:42:57.000Z; // \DateTime | Use to return email campaigns with `updated_at` timestamps that are before a specific date and time (in ISO-8601 format). Use with the `after_date` query parameter to get email campaigns sent within a specific date range.
$after_date = 2021-03-10T11:42:57.000Z; // \DateTime | Use to return email campaigns with last `updated_at` timestamps that are after a specific date and time (in ISO-8601 format). Use with the `before_date` query parameter to get email campaigns sent within a specific date range.

try {
    $result = $apiInstance->getAllEmailCampaigns($limit, $before_date, $after_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->getAllEmailCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Specifies the number of campaigns to display on each page of output that is returned (from return 1 - 500). The default returns 50 campaigns per page. | [optional] [default to 50] |
| **before_date** | **\DateTime**| Use to return email campaigns with &#x60;updated_at&#x60; timestamps that are before a specific date and time (in ISO-8601 format). Use with the &#x60;after_date&#x60; query parameter to get email campaigns sent within a specific date range. | [optional] |
| **after_date** | **\DateTime**| Use to return email campaigns with last &#x60;updated_at&#x60; timestamps that are after a specific date and time (in ISO-8601 format). Use with the &#x60;before_date&#x60; query parameter to get email campaigns sent within a specific date range. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetAllEmailCampaigns200Response**](../Model/GetAllEmailCampaigns200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaignActivity()`

```php
getEmailCampaignActivity($campaign_activity_id, $include): \ConstantContactApi\Client\Model\GetEmailCampaignActivity200Response
```

GET a Single Email Campaign Activity

Use this method to return a specific email campaign activity. Each email campaign activity contains the email content, metadata, and styling information of an email. Email campaign activities can also contain either contact lists or segments. Constant Contact uses this information to determine who to send the email campaign activity to when you schedule it. You cannot get email campaign activities that have a `REMOVED` status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for an email campaign activity.
$include = 'include_example'; // string | Use the `include` query parameter to enter a comma separated list of additional email campaign activity properties for the V3 API to return. Valid values are `physical_address_in_footer`, `permalink_url`, `html_content`, and `document_properties`.

try {
    $result = $apiInstance->getEmailCampaignActivity($campaign_activity_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->getEmailCampaignActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. | |
| **include** | **string**| Use the &#x60;include&#x60; query parameter to enter a comma separated list of additional email campaign activity properties for the V3 API to return. Valid values are &#x60;physical_address_in_footer&#x60;, &#x60;permalink_url&#x60;, &#x60;html_content&#x60;, and &#x60;document_properties&#x60;. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetEmailCampaignActivity200Response**](../Model/GetEmailCampaignActivity200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaignById()`

```php
getEmailCampaignById($campaign_id): \ConstantContactApi\Client\Model\CreateEmailCampaign200Response
```

GET Details About a Single Email Campaign

Use this method to get details about a single email campaign and campaign related activities. Details include the email campaign name, current status, create date, last update date, and a list of campaign activities; including the `campaign_activity_id` and `role`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The ID (UUID format) that uniquely identifies this email campaign.

try {
    $result = $apiInstance->getEmailCampaignById($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->getEmailCampaignById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The ID (UUID format) that uniquely identifies this email campaign. | |

### Return type

[**\ConstantContactApi\Client\Model\CreateEmailCampaign200Response**](../Model/CreateEmailCampaign200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaignXrefs()`

```php
getEmailCampaignXrefs($v2_email_campaign_ids): \ConstantContactApi\Client\Model\GetEmailCampaignXrefs200Response
```

GET a Collection of V2 and V3 API Email Campaign Identifiers

<div class=\"Msg Msg--warning\"><p class=\"note-text\">Use this endpoint to migrate your locally stored V2 email campaign data to the new V3 format. Developers are expected to use this endpoint sparingly. This endpoint is NOT intended for regular or repeated use. Constant Contact will eventually deprecate and remove this endpoint.</p></div>  Use this method to migrate your local V2 API email data to the V3 API format. For each value that you provide in the `v2_email_campaign_ids` query parameter, this method returns the corresponding V3 `campaign_id` and V3 `campaign_activity_id` UUID value. For more information on the changes to the email campaign resource model, see [V3 Email Campaign Resource Changes](/api_guide/v3_v2_email_campaign_deltas.html) in the API guide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v2_email_campaign_ids = 1100567546598,1604567396117,12002485195578; // string | Comma separated list of V2 API `campaignId` values. You can enter up to 50 V2 `campaignId` values in each request.

try {
    $result = $apiInstance->getEmailCampaignXrefs($v2_email_campaign_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->getEmailCampaignXrefs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v2_email_campaign_ids** | **string**| Comma separated list of V2 API &#x60;campaignId&#x60; values. You can enter up to 50 V2 &#x60;campaignId&#x60; values in each request. | |

### Return type

[**\ConstantContactApi\Client\Model\GetEmailCampaignXrefs200Response**](../Model/GetEmailCampaignXrefs200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResendEmailCampaign()`

```php
getResendEmailCampaign($campaign_activity_id): \ConstantContactApi\Client\Model\GetResendEmailCampaign200ResponseInner[]
```

GET Details for a Resend to Non-openers Campaign Activity

Get details about a resend to non-openers campaign activity. If resend activity does not exist for the specified `campaign_activity_id`, an empty list is returned in the results. You can only create one resend activity per email campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for the primary email campaign activity.

try {
    $result = $apiInstance->getResendEmailCampaign($campaign_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->getResendEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for the primary email campaign activity. | |

### Return type

[**\ConstantContactApi\Client\Model\GetResendEmailCampaign200ResponseInner[]**](../Model/GetResendEmailCampaign200ResponseInner.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchEmailCampaignName()`

```php
patchEmailCampaignName($campaign_id, $patch_email_campaign_name_request): \ConstantContactApi\Client\Model\CreateEmailCampaign200Response
```

PATCH (Update) an Email Campaign Name

Use this method to rename an email campaign. The name is not visible to contacts. The name must be unique and cannot exceed 80 characters. You cannot rename email campaigns that have a `Removed` status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique identifier for an email campaign.
$patch_email_campaign_name_request = new \ConstantContactApi\Client\Model\PatchEmailCampaignNameRequest(); // \ConstantContactApi\Client\Model\PatchEmailCampaignNameRequest | A JSON payload that contains the new email campaign name.

try {
    $result = $apiInstance->patchEmailCampaignName($campaign_id, $patch_email_campaign_name_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->patchEmailCampaignName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The unique identifier for an email campaign. | |
| **patch_email_campaign_name_request** | [**\ConstantContactApi\Client\Model\PatchEmailCampaignNameRequest**](../Model/PatchEmailCampaignNameRequest.md)| A JSON payload that contains the new email campaign name. | |

### Return type

[**\ConstantContactApi\Client\Model\CreateEmailCampaign200Response**](../Model/CreateEmailCampaign200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailCampaignActivity()`

```php
updateEmailCampaignActivity($campaign_activity_id, $get_email_campaign_activity200_response): \ConstantContactApi\Client\Model\GetEmailCampaignActivity200Response
```

PUT (Update) An Email Campaign Activity

Use this method to update an email campaign activity by including the complete email campaign activity with your changes in the request body. The request body requires the `from_name`, `from_email`, `reply_to_email`, and `subject` properties.  You can only update email campaign activities that have the `primary_email` role and that are in `DRAFT` or `Done` status. When you use a PUT method to update a resource, the V3 API overwrites any properties that are missing in the request body. However, the V3 API does not overwrite subresources that you omit in the request body or missing properties in subresources. This method considers `physical_address_in_footer`, `document_properties`, `html_content`, and `permalink_url` subresources of the email campaign activity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for the email campaign activity you are updating.
$get_email_campaign_activity200_response = new \ConstantContactApi\Client\Model\GetEmailCampaignActivity200Response(); // \ConstantContactApi\Client\Model\GetEmailCampaignActivity200Response | A request body payload that contains the complete email campaign activity with your changes.

try {
    $result = $apiInstance->updateEmailCampaignActivity($campaign_activity_id, $get_email_campaign_activity200_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->updateEmailCampaignActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for the email campaign activity you are updating. | |
| **get_email_campaign_activity200_response** | [**\ConstantContactApi\Client\Model\GetEmailCampaignActivity200Response**](../Model/GetEmailCampaignActivity200Response.md)| A request body payload that contains the complete email campaign activity with your changes. | |

### Return type

[**\ConstantContactApi\Client\Model\GetEmailCampaignActivity200Response**](../Model/GetEmailCampaignActivity200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
