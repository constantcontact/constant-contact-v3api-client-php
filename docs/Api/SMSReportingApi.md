# ConstantContactApi\Client\SMSReportingApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllBulkSmsCampaignSummaries()**](SMSReportingApi.md#getAllBulkSmsCampaignSummaries) | **GET** /reports/summary_reports/sms_campaign_summaries | GET an SMS Campaigns Summary Report |


## `getAllBulkSmsCampaignSummaries()`

```php
getAllBulkSmsCampaignSummaries($start_at, $limit, $end_at): \ConstantContactApi\Client\Model\GetAllBulkSmsCampaignSummaries200Response
```

GET an SMS Campaigns Summary Report

Use this method to get SMS campaign summary details, including the total number of times that each contact uniquely interacted with each tracked campaign activity and aggregate tracking statistics. Results are sorted in descending order by the date the SMS was last sent (`last_sent_date`). The `start_at` date is required. Use both the `start_at` and `end_at` date query parameters to return only SMS campaign summary details that occurred within a specified date range. Use the `limit` query parameter to limit the number of results returned per page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\SMSReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_at = 2023-01-27T21:56:37.011Z; // string | Use to limit the results to include SMS campaign summary details for SMS campaigns sent on or after the required `start_at` date you specify. ISO 8601 format.
$limit = 15; // string | Use to limit the number of results to return on a single page (from 1 to 50). The default setting is 50.
$end_at = 2024-01-27T21:56:37.011Z; // string | Use to limit the results to include SMS campaign summary details for SMS campaigns sent on or before the `end_at` date you specify. ISO 8601 format.

try {
    $result = $apiInstance->getAllBulkSmsCampaignSummaries($start_at, $limit, $end_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSReportingApi->getAllBulkSmsCampaignSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_at** | **string**| Use to limit the results to include SMS campaign summary details for SMS campaigns sent on or after the required &#x60;start_at&#x60; date you specify. ISO 8601 format. | |
| **limit** | **string**| Use to limit the number of results to return on a single page (from 1 to 50). The default setting is 50. | [optional] [default to &#39;50&#39;] |
| **end_at** | **string**| Use to limit the results to include SMS campaign summary details for SMS campaigns sent on or before the &#x60;end_at&#x60; date you specify. ISO 8601 format. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetAllBulkSmsCampaignSummaries200Response**](../Model/GetAllBulkSmsCampaignSummaries200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
