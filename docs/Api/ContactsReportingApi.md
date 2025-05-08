# ConstantContactApi\Client\ContactsReportingApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getContactOpenClickRateReport()**](ContactsReportingApi.md#getContactOpenClickRateReport) | **GET** /reports/contact_reports/{contact_id}/open_and_click_rates | GET Average Open and Click Rates |
| [**getContactTrackingCountReport()**](ContactsReportingApi.md#getContactTrackingCountReport) | **GET** /reports/contact_reports/{contact_id}/activity_summary | GET Contact Action Summary |
| [**getContactTrackingReport()**](ContactsReportingApi.md#getContactTrackingReport) | **GET** /reports/contact_reports/{contact_id}/activity_details | GET Contact Activity Details |


## `getContactOpenClickRateReport()`

```php
getContactOpenClickRateReport($contact_id, $start, $end): \ConstantContactApi\Client\Model\GetContactOpenClickRateReport200Response
```

GET Average Open and Click Rates

<p>Gets the average open and click rate for a given account and contact.<p>Looks at all tracking activities for bulk emails from a given contact over the given date range. Range cannot exceed 5 years.</p><p>Returns the rates and the number of campaign activities that were included in the calculation.</p><p>If no activities fall into the given date range, all rates will return 0 and the number of included activities will be 0.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = aa9ff7b0-478d-11e6-8059-00163e3c8e19; // string | The contact id which is requesting tracking activity data (e.g. aa9ff7b0-478d-11e6-8059-00163e3c8e19)
$start = 'start_example'; // string | The starting date, in ISO 8601 format, to use to get campaigns. For example: 2019-01-01T00:00:00-0500.
$end = 'end_example'; // string | The ending date, in ISO 8601 format, to use to get campaigns. For example: 2019-12-01T00:00:00-0500.

try {
    $result = $apiInstance->getContactOpenClickRateReport($contact_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsReportingApi->getContactOpenClickRateReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| The contact id which is requesting tracking activity data (e.g. aa9ff7b0-478d-11e6-8059-00163e3c8e19) | |
| **start** | **string**| The starting date, in ISO 8601 format, to use to get campaigns. For example: 2019-01-01T00:00:00-0500. | |
| **end** | **string**| The ending date, in ISO 8601 format, to use to get campaigns. For example: 2019-12-01T00:00:00-0500. | |

### Return type

[**\ConstantContactApi\Client\Model\GetContactOpenClickRateReport200Response**](../Model/GetContactOpenClickRateReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactTrackingCountReport()`

```php
getContactTrackingCountReport($contact_id, $start, $end): \ConstantContactApi\Client\Model\GetContactTrackingCountReport200Response
```

GET Contact Action Summary

Get a list of the recent emails (aka, campaign activities) sent to a specific contact and a summary of the actions the contact took on that email for the most recent 200 campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = aa9ff7b0-478d-11e6-8059-00163e3c8e19; // string | The contact id which is requesting tracking activity data (e.g. aa9ff7b0-478d-11e6-8059-00163e3c8e19)
$start = 'start_example'; // string | The starting date, in ISO 8601 format, to use to get campaigns. For example: 2019-01-01T00:00:00-0500.
$end = 'end_example'; // string | The ending date, in ISO 8601 format, to use to get campaigns. For example: 2019-12-01T00:00:00-0500.

try {
    $result = $apiInstance->getContactTrackingCountReport($contact_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsReportingApi->getContactTrackingCountReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| The contact id which is requesting tracking activity data (e.g. aa9ff7b0-478d-11e6-8059-00163e3c8e19) | |
| **start** | **string**| The starting date, in ISO 8601 format, to use to get campaigns. For example: 2019-01-01T00:00:00-0500. | |
| **end** | **string**| The ending date, in ISO 8601 format, to use to get campaigns. For example: 2019-12-01T00:00:00-0500. | |

### Return type

[**\ConstantContactApi\Client\Model\GetContactTrackingCountReport200Response**](../Model/GetContactTrackingCountReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactTrackingReport()`

```php
getContactTrackingReport($contact_id, $tracking_activities_list, $tracking_activity_type, $include_campaign_activity_names, $limit): \ConstantContactApi\Client\Model\GetContactTrackingReport200Response
```

GET Contact Activity Details

<p>Gets the tracking activity data for a single contact, sorted in descending activity date order.</p> <p>You must chose either the `tracking_activities_list` query parameter and or the `tracking_activity_type` query parameter to specify one or more tracking activity types In the request. The `tracking_activities_list`  and `tracking_activities_type` query parameters are mutually exclusive.</p>       <table><tr><td colspan='2'>Valid tracking activity types</td></tr>         <tr><td><b>em_sends</b></td><td>Send activities</td></tr>         <tr><td><b>em_opens</b></td><td>Email open tracking activities</td></tr>         <tr><td><b>em_clicks</b></td><td>Link click-through tracking activities</td></tr>         <tr><td><b>em_bounces</b></td><td>Bounce tracking activities</td></tr>         <tr><td><b>em_optouts</b></td><td>Opt-out tracking activities</td></tr><tr>         <td><b>em_forwards</b></td><td>Forward to a friend tracking activities</td></tr>         <tr><td><b>p_contact_open</b></td><td>Landing page opens</td></tr>         <tr><td><b>p_contact_click</b></td><td>Landing page clicks</td></tr>         <tr><td><b>p_contact_add</b></td><td>Landing page adds</td></tr>         <tr><td><b>p_contact_update </b></td><td> Landing page updates</td></tr>       </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\ContactsReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = aa9ff7b0-478d-11e6-8059-00163e3c8e19; // string | The contact's ID for which tracking activity data is requested.
$tracking_activities_list = em_clicks,em_opens; // string[] | Specify one or more tracking activity types to include as a comma-delimited string. The `tracking_activities_list`  and `tracking_activities_type` query parameters are mutually exclusive.
$tracking_activity_type = `tracking_activity_type=em_sends&tracking_activity_type=em_opens`; // string[] | Specify one or more tracking activity types to include as an array. The `tracking_activities_list`  and `tracking_activities_type` query parameters are mutually exclusive.
$include_campaign_activity_names = true; // bool | Default (`true`) returns campaign activity names in the results. Not including campaign activity names in the results (`false`), is more efficient.
$limit = 20; // string | The number of tracking activities to return in a single page. Valid values are 1 to 100. Default is 100.

try {
    $result = $apiInstance->getContactTrackingReport($contact_id, $tracking_activities_list, $tracking_activity_type, $include_campaign_activity_names, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsReportingApi->getContactTrackingReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| The contact&#39;s ID for which tracking activity data is requested. | |
| **tracking_activities_list** | [**string[]**](../Model/string.md)| Specify one or more tracking activity types to include as a comma-delimited string. The &#x60;tracking_activities_list&#x60;  and &#x60;tracking_activities_type&#x60; query parameters are mutually exclusive. | [optional] |
| **tracking_activity_type** | [**string[]**](../Model/string.md)| Specify one or more tracking activity types to include as an array. The &#x60;tracking_activities_list&#x60;  and &#x60;tracking_activities_type&#x60; query parameters are mutually exclusive. | [optional] |
| **include_campaign_activity_names** | **bool**| Default (&#x60;true&#x60;) returns campaign activity names in the results. Not including campaign activity names in the results (&#x60;false&#x60;), is more efficient. | [optional] [default to true] |
| **limit** | **string**| The number of tracking activities to return in a single page. Valid values are 1 to 100. Default is 100. | [optional] [default to &#39;100&#39;] |

### Return type

[**\ConstantContactApi\Client\Model\GetContactTrackingReport200Response**](../Model/GetContactTrackingReport200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
