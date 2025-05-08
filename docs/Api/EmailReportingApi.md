# ConstantContactApi\Client\EmailReportingApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBouncesReport()**](EmailReportingApi.md#getBouncesReport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/bounces | GET an Email Bounces Report |
| [**getCampaignActivityLinkReport()**](EmailReportingApi.md#getCampaignActivityLinkReport) | **GET** /reports/email_reports/{campaign_activity_id}/links | GET an Email Links Report |
| [**getClicksReport()**](EmailReportingApi.md#getClicksReport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/clicks | GET an Email Clicks Report |
| [**getDidNotOpensReport()**](EmailReportingApi.md#getDidNotOpensReport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/didnotopens | GET an Email Did Not Opens Report |
| [**getEmailCampaignActivityReport()**](EmailReportingApi.md#getEmailCampaignActivityReport) | **GET** /reports/stats/email_campaign_activities/{campaign_activity_ids} | GET an Email Campaign Activity Stats Report |
| [**getEmailCampaignReport()**](EmailReportingApi.md#getEmailCampaignReport) | **GET** /reports/summary_reports/email_campaign_summaries | GET an Email Campaigns Summary Report |
| [**getEmailOpensReport()**](EmailReportingApi.md#getEmailOpensReport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/opens | GET an Email Opens Report |
| [**getEmailSendsReport()**](EmailReportingApi.md#getEmailSendsReport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/sends | GET an Email Sends Report |
| [**getEmailStatsReport()**](EmailReportingApi.md#getEmailStatsReport) | **GET** /reports/stats/email_campaigns/{campaign_ids} | GET an Email Campaign Stats Report |
| [**getForwardsReport()**](EmailReportingApi.md#getForwardsReport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/forwards | GET an Email Forwards Report |
| [**getOptoutsReport()**](EmailReportingApi.md#getOptoutsReport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/optouts | GET an Email Opt-outs Report |
| [**getUniqueOpensReport()**](EmailReportingApi.md#getUniqueOpensReport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/unique_opens | GET an Email Unique Opens Report |


## `getBouncesReport()`

```php
getBouncesReport($campaign_activity_id, $bounce_code, $limit): \ConstantContactApi\Client\Model\GetBouncesReport200Response
```

GET an Email Bounces Report

Use this method to get a report listing contact bounce data for the specified email campaign activity. This report lists the most recent bounce data first and includes contact information, such as the contact's email address, unique ID, and the email bounce date and time. Use the <code>bounce_code</code> query parameter to limit the type of bounce data to return.  For more use case information, see [Get a Bounces Report for an Email Campaign Activity](/api_guide/email_summary_bounces_report.html) in the API guide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 'campaign_activity_id_example'; // string | The ID that uniquely identifies the email campaign activity to use for this report.
$bounce_code = array('bounce_code_example'); // string[] | To return results for a specific bounce code, select the `bounce_code` from the drop-down list. To return results for multiple codes, repeat the bounce code parameter for each. For example, to return results for bounce codes `B` and `D` use `bounce_code=B&bounce_code=D`.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getBouncesReport($campaign_activity_id, $bounce_code, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getBouncesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The ID that uniquely identifies the email campaign activity to use for this report. | |
| **bounce_code** | [**string[]**](../Model/string.md)| To return results for a specific bounce code, select the &#x60;bounce_code&#x60; from the drop-down list. To return results for multiple codes, repeat the bounce code parameter for each. For example, to return results for bounce codes &#x60;B&#x60; and &#x60;D&#x60; use &#x60;bounce_code&#x3D;B&amp;bounce_code&#x3D;D&#x60;. | [optional] |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\ConstantContactApi\Client\Model\GetBouncesReport200Response**](../Model/GetBouncesReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignActivityLinkReport()`

```php
getCampaignActivityLinkReport($campaign_activity_id, $no_clicks): \ConstantContactApi\Client\Model\GetCampaignActivityLinkReport200Response
```

GET an Email Links Report

Use this method to return link details, including the number of unique contacts that clicked each link in an email campaign activity, and the type of action associated with clicking each link. To include link details for links that were not clicked, set the `no_clicks` query parameter to `true`.  You can return reporting data for `primary_email` and `resend` role email campaign activities. For more use case information, see [Get an Email Links Report](/api_guide/email_links_report.html) in the API guide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 8892baf9-970a-4de6-8400-fa4ec461987c; // string | The unique ID for an email campaign activity.
$no_clicks = true; // bool | Set this query parameter to `true` to  return details for links that were not clicked in the response results.

try {
    $result = $apiInstance->getCampaignActivityLinkReport($campaign_activity_id, $no_clicks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getCampaignActivityLinkReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. | |
| **no_clicks** | **bool**| Set this query parameter to &#x60;true&#x60; to  return details for links that were not clicked in the response results. | [optional] [default to false] |

### Return type

[**\ConstantContactApi\Client\Model\GetCampaignActivityLinkReport200Response**](../Model/GetCampaignActivityLinkReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClicksReport()`

```php
getClicksReport($campaign_activity_id, $url_id, $limit): \ConstantContactApi\Client\Model\GetClicksReport200Response
```

GET an Email Clicks Report

Use this method to get each time a contact clicked a link, the click date and time, and the device type they used. Use the `url_id` query parameter to get a clicks report for a specific link URL. Clicks report data is sorted with most recent activity listed first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = c8cdf384-15ca-4dcc-9b6f-4c91121fdc23; // string | The ID that uniquely identifies the email campaign activity to use for this report.
$url_id = 49920742166; // int | The ID that uniquely identifies a single link URL for which you want to get a clicks report.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getClicksReport($campaign_activity_id, $url_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getClicksReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The ID that uniquely identifies the email campaign activity to use for this report. | |
| **url_id** | **int**| The ID that uniquely identifies a single link URL for which you want to get a clicks report. | [optional] |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\ConstantContactApi\Client\Model\GetClicksReport200Response**](../Model/GetClicksReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDidNotOpensReport()`

```php
getDidNotOpensReport($campaign_activity_id, $limit): \ConstantContactApi\Client\Model\GetDidNotOpensReport200Response
```

GET an Email Did Not Opens Report

Use this method to get a report listing each contact that was sent, but did not open the specified email campaign activity. This report lists contact information such as the contact's email address and unique ID, and the date and time that the email campaign activity was sent. This report lists the most recent activity first. For more use case information, see [Get a Did Not Opens Report for an Email Campaign Activity](/api_guide/email_summary_non_opens_report.html) in the API guide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 8892baf9-970a-4de6-8400-fa4ec461987c; // string | The ID that uniquely identifies the email campaign activity to use for this report.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getDidNotOpensReport($campaign_activity_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getDidNotOpensReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The ID that uniquely identifies the email campaign activity to use for this report. | |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\ConstantContactApi\Client\Model\GetDidNotOpensReport200Response**](../Model/GetDidNotOpensReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaignActivityReport()`

```php
getEmailCampaignActivityReport($campaign_activity_ids): \ConstantContactApi\Client\Model\GetEmailCampaignActivityReport200Response
```

GET an Email Campaign Activity Stats Report

Use this method to get performance tracking statistics for up to ten email campaign activities. Statistics include the total number of times contacts interacted with your campaigns and how.  For each `campaign_activity_id`, this method returns the `campaign_id`, the total counts (`stats`) for each type of tracked email activity, and the date and time that Constant Contact last refreshed (`last_refresh_time`) the `stats`.  When requesting statistics for multiple email campaign activities, if one or more of the `campaign_activity_ids` do not exist, were deleted, or do not have any stats associated with it, the `campaign_activity_ids` and error details display under `errors`. If any single specified `campaign_activity_id` is invalid (malformed), a 404 error response is returned for all campaign activities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_ids = 82ee2c37-c8f8-4974-9560-ef93ad51d58z; // string | A comma-separated list of `campaign_activity_id`s (UUID's).

try {
    $result = $apiInstance->getEmailCampaignActivityReport($campaign_activity_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getEmailCampaignActivityReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_ids** | **string**| A comma-separated list of &#x60;campaign_activity_id&#x60;s (UUID&#39;s). | |

### Return type

[**\ConstantContactApi\Client\Model\GetEmailCampaignActivityReport200Response**](../Model/GetEmailCampaignActivityReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaignReport()`

```php
getEmailCampaignReport($limit): \ConstantContactApi\Client\Model\GetEmailCampaignReport200Response
```

GET an Email Campaigns Summary Report

Use this method to get aggregate email campaign statistics for up to five hundred email campaigns. The response results include the total number of times that each contact uniquely interacted with each tracked campaign activity.  Results are sorted in descending order by the date that the email was last sent (<code>last_sent_date</code>). Use the <code>limit</code> query parameter to limit the number of email campaign summary reports listed on each page.     For more use case information, see \"[Get an Email Campaign Summary Report](/api_guide/email_bulk_campaign_summary_report.html)\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // string | Use the `limit` query parameter to limit the number of email campaign summaries to return on a single page. The default is `50` and the maximum is `500` per page.

try {
    $result = $apiInstance->getEmailCampaignReport($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getEmailCampaignReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **string**| Use the &#x60;limit&#x60; query parameter to limit the number of email campaign summaries to return on a single page. The default is &#x60;50&#x60; and the maximum is &#x60;500&#x60; per page. | [optional] [default to &#39;50&#39;] |

### Return type

[**\ConstantContactApi\Client\Model\GetEmailCampaignReport200Response**](../Model/GetEmailCampaignReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailOpensReport()`

```php
getEmailOpensReport($campaign_activity_id, $limit): \ConstantContactApi\Client\Model\GetEmailOpensReport200Response
```

GET an Email Opens Report

Use this method to get each time a contact opened a specific email campaign activity. This report includes general contact information such as the contact's email address and unique ID, the date and time they opened the email campaign activity, and the type of device they used to open it. This report lists the most recent activity first. For more use case information, see [Get an Opens report for an Email Campaign Activity](/api_guide/email_summary_opens_report.html) in the API guide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 8892baf9-970a-4de6-8400-fa4ec461987c; // string | The unique ID for an email campaign activity to use for this report.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getEmailOpensReport($campaign_activity_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getEmailOpensReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity to use for this report. | |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\ConstantContactApi\Client\Model\GetEmailOpensReport200Response**](../Model/GetEmailOpensReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailSendsReport()`

```php
getEmailSendsReport($campaign_activity_id, $limit): \ConstantContactApi\Client\Model\GetEmailSendsReport200Response
```

GET an Email Sends Report

Use this method to get each contact that was sent a specific email campaign activity. This sends report includes general contact data such as the date and time that the email campaign activity was sent to a contact's email address, the contact's first and last name, and unique ID. This report lists the most recent activity first. For more use case information, see [Get an Sends report for an Email Campaign Activity](/api_guide/email_summary_sends_report.html) in the API guide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 8892baf9-970a-4de6-8400-fa4ec461987c; // string | The unique ID for an email campaign activity to use for this report.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getEmailSendsReport($campaign_activity_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getEmailSendsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity to use for this report. | |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\ConstantContactApi\Client\Model\GetEmailSendsReport200Response**](../Model/GetEmailSendsReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailStatsReport()`

```php
getEmailStatsReport($campaign_ids): \ConstantContactApi\Client\Model\GetEmailStatsReport200Response
```

GET an Email Campaign Stats Report

Use this method to get email campaign performance tracking statistics for one or more campaigns, including the total number of times contacts interacted with your campaigns and how.  For each `campaign_id`, this method returns lists that include total counts (`stats`) for each type of tracked email and relevant campaign-related percentages (`percents`). It also returns the date and time at which the campaign stats were last refreshed. If any specified `campaign_id` is invalid, a 404 error response is returned for all campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_ids = 82ee2c37-c8f8-4974-9560-ef93ad51d58z; // string | A comma-separated list of `campaign_id`s (UUID's).

try {
    $result = $apiInstance->getEmailStatsReport($campaign_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getEmailStatsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_ids** | **string**| A comma-separated list of &#x60;campaign_id&#x60;s (UUID&#39;s). | |

### Return type

[**\ConstantContactApi\Client\Model\GetEmailStatsReport200Response**](../Model/GetEmailStatsReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getForwardsReport()`

```php
getForwardsReport($campaign_activity_id, $limit): \ConstantContactApi\Client\Model\GetForwardsReport200Response
```

GET an Email Forwards Report

Use this method to get a report listing each time a contact forwarded the email campaign activity using the forwarding link in the email footer. The report includes general contact information, such as the contact's email address and unique ID, and the date and time that the email campaign activity was forwarded. Forwards report data is sorted with the most recent activity listed first. For more use case information, see [Get an Email Forwards Report](/api_guide/email_summary_forwards_report.html) in the API guide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 'campaign_activity_id_example'; // string | The ID that uniquely identifies the email campaign activity to use for this report.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getForwardsReport($campaign_activity_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getForwardsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The ID that uniquely identifies the email campaign activity to use for this report. | |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\ConstantContactApi\Client\Model\GetForwardsReport200Response**](../Model/GetForwardsReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOptoutsReport()`

```php
getOptoutsReport($campaign_activity_id, $limit): \ConstantContactApi\Client\Model\GetOptoutsReport200Response
```

GET an Email Opt-outs Report

Use this method to get a report listing each contact that clicked the unsubscribe link in the email campaign activity to opt-out from receiving emails sent from your Constant Contact account. This report includes contact information, such as the contact's email address, unique ID, and the opt-out date and time. Opt-out report data is sorted with the most recent activity listed first. For more use case information, see [Get an Email Opt-outs Report](/api_guide/email_summary_optouts_report.html) in the API guide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 'campaign_activity_id_example'; // string | The ID that uniquely identifies the email campaign activity to use for this report.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getOptoutsReport($campaign_activity_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getOptoutsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The ID that uniquely identifies the email campaign activity to use for this report. | |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\ConstantContactApi\Client\Model\GetOptoutsReport200Response**](../Model/GetOptoutsReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUniqueOpensReport()`

```php
getUniqueOpensReport($campaign_activity_id, $limit): \ConstantContactApi\Client\Model\GetEmailOpensReport200Response
```

GET an Email Unique Opens Report

Use this method to get a unique opens report that provides details about the last time that each contact opened the specified email campaign activity. This report includes general contact information such as the contact's email address and unique ID, the date and time they opened the email campaign activity, and the type of device they used to open it. This report lists the most recent activity first. For more use case information, see [Get an Unique Opens Report for an Email Campaign Activity](/api_guide/email_summary_unique_opens_report.html) in the API guide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 8892baf9-970a-4de6-8400-fa4ec461987c; // string | The ID that uniquely identifies the email campaign activity to use for this report.
$limit = '500'; // string | The number of tracking activities to return on a page.

try {
    $result = $apiInstance->getUniqueOpensReport($campaign_activity_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailReportingApi->getUniqueOpensReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The ID that uniquely identifies the email campaign activity to use for this report. | |
| **limit** | **string**| The number of tracking activities to return on a page. | [optional] [default to &#39;500&#39;] |

### Return type

[**\ConstantContactApi\Client\Model\GetEmailOpensReport200Response**](../Model/GetEmailOpensReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
