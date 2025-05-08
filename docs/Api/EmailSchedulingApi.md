# ConstantContactApi\Client\EmailSchedulingApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEmailCampaignActivityPreview()**](EmailSchedulingApi.md#getEmailCampaignActivityPreview) | **GET** /emails/activities/{campaign_activity_id}/previews | GET the HTML Preview of an Email Campaign Activity |
| [**getEmailCampaignActivitySchedule()**](EmailSchedulingApi.md#getEmailCampaignActivitySchedule) | **GET** /emails/activities/{campaign_activity_id}/schedules | GET an Email Campaign Activity Schedule |
| [**getEmailCampaignActivitySendHistory()**](EmailSchedulingApi.md#getEmailCampaignActivitySendHistory) | **GET** /emails/activities/{campaign_activity_id}/send_history | GET the Send History of an Email Campaign Activity |
| [**scheduleEmailCampaignActivity()**](EmailSchedulingApi.md#scheduleEmailCampaignActivity) | **POST** /emails/activities/{campaign_activity_id}/schedules | POST (Create) an Email Campaign Activity Schedule |
| [**testSendEmailCampaignActivity()**](EmailSchedulingApi.md#testSendEmailCampaignActivity) | **POST** /emails/activities/{campaign_activity_id}/tests | POST Test Send an Email Campaign Activity |
| [**unscheduleEmailCampaignActivity()**](EmailSchedulingApi.md#unscheduleEmailCampaignActivity) | **DELETE** /emails/activities/{campaign_activity_id}/schedules | DELETE an Email Campaign Activity Schedule |


## `getEmailCampaignActivityPreview()`

```php
getEmailCampaignActivityPreview($campaign_activity_id): \ConstantContactApi\Client\Model\GetEmailCampaignActivityPreview200Response
```

GET the HTML Preview of an Email Campaign Activity

Use this method to get the HTML preview of an email campaign activity. The HTML preview allows you to verify how the email campaign activity will look before you send it to contacts.  Custom code emails (`format_type` 5) use the Constant Contact account owner's contact information to process contact, custom field, and account variables in the preview.  This method returns the HTML preview encoded as a JSON string. You will need to decode the string before you can use it as valid HTML.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailSchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for an email campaign activity.

try {
    $result = $apiInstance->getEmailCampaignActivityPreview($campaign_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSchedulingApi->getEmailCampaignActivityPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. | |

### Return type

[**\ConstantContactApi\Client\Model\GetEmailCampaignActivityPreview200Response**](../Model/GetEmailCampaignActivityPreview200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaignActivitySchedule()`

```php
getEmailCampaignActivitySchedule($campaign_activity_id): \ConstantContactApi\Client\Model\GetEmailCampaignActivitySchedule200ResponseInner[]
```

GET an Email Campaign Activity Schedule

Use this method to return the current schedule for an email campaign activity. This schedule contains the date that Constant Contact will send the email campaign activity to contacts. If the email campaign activity is not in `SCHEDULED` status, this method returns an empty array and a 200 response code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailSchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for an email campaign activity.

try {
    $result = $apiInstance->getEmailCampaignActivitySchedule($campaign_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSchedulingApi->getEmailCampaignActivitySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. | |

### Return type

[**\ConstantContactApi\Client\Model\GetEmailCampaignActivitySchedule200ResponseInner[]**](../Model/GetEmailCampaignActivitySchedule200ResponseInner.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaignActivitySendHistory()`

```php
getEmailCampaignActivitySendHistory($campaign_activity_id): \ConstantContactApi\Client\Model\GetEmailCampaignActivitySendHistory200ResponseInner[]
```

GET the Send History of an Email Campaign Activity

Use this method to return the send history of an email campaign activity. This method returns the send history as an array containing an object for each time you sent a specific email campaign activity to contacts.   Each send history object contains the email campaign activity send date, the number of contacts it was sent to, and the contact lists or segments used to send it. Each send history object also includes if the send attempt completed or encountered an error, and the reason why each error occurred. This method returns results in ascending order starting with the first send attempt.   If the email campaign activity has not been sent to contacts, this method returns a 200 response and an empty array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailSchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for an email campaign activity. You can return the send history for `primary_email` and `resend` role email campaign activities.

try {
    $result = $apiInstance->getEmailCampaignActivitySendHistory($campaign_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSchedulingApi->getEmailCampaignActivitySendHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. You can return the send history for &#x60;primary_email&#x60; and &#x60;resend&#x60; role email campaign activities. | |

### Return type

[**\ConstantContactApi\Client\Model\GetEmailCampaignActivitySendHistory200ResponseInner[]**](../Model/GetEmailCampaignActivitySendHistory200ResponseInner.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleEmailCampaignActivity()`

```php
scheduleEmailCampaignActivity($campaign_activity_id, $schedule_email_campaign_activity_request): \ConstantContactApi\Client\Model\GetEmailCampaignActivitySchedule200ResponseInner[]
```

POST (Create) an Email Campaign Activity Schedule

Use this method to schedule when Constant Contact will send an email campaign activity to contacts. Use the `scheduled_date` request body property to enter the ISO-8601 format date that you want Constant Contact to send the email campaign activity on.   Before you schedule an email campaign activity, you must update the email campaign activity and specify which contacts you want Constant Contact to send the email to. When you make a PUT call to update an email campaign activity, use the `contact_list_ids` or `segment_ids` array to add contacts.  You can only schedule email campaign activities that have the `primary_email` role and are in `DRAFT`, `DONE`, or `ERROR` status. When you schedule an email campaign activity in `DONE` status, Constant Contact does not send the email campaign activity to contacts that already received it. Constant Contact only sends the email campaign activity to any new contacts in the contact lists or segment you use.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailSchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for an email campaign activity. You can only schedule email campaign activities that have the `primary_email` role.
$schedule_email_campaign_activity_request = new \ConstantContactApi\Client\Model\ScheduleEmailCampaignActivityRequest(); // \ConstantContactApi\Client\Model\ScheduleEmailCampaignActivityRequest | A request body payload that contains the date that you want Constant Contact to send your email campaign activity on. Use `\"0\"` as the date to have Constant Contact immediately send the email campaign activity.

try {
    $result = $apiInstance->scheduleEmailCampaignActivity($campaign_activity_id, $schedule_email_campaign_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSchedulingApi->scheduleEmailCampaignActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. You can only schedule email campaign activities that have the &#x60;primary_email&#x60; role. | |
| **schedule_email_campaign_activity_request** | [**\ConstantContactApi\Client\Model\ScheduleEmailCampaignActivityRequest**](../Model/ScheduleEmailCampaignActivityRequest.md)| A request body payload that contains the date that you want Constant Contact to send your email campaign activity on. Use &#x60;\&quot;0\&quot;&#x60; as the date to have Constant Contact immediately send the email campaign activity. | |

### Return type

[**\ConstantContactApi\Client\Model\GetEmailCampaignActivitySchedule200ResponseInner[]**](../Model/GetEmailCampaignActivitySchedule200ResponseInner.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testSendEmailCampaignActivity()`

```php
testSendEmailCampaignActivity($campaign_activity_id, $test_send_email_campaign_activity_request)
```

POST Test Send an Email Campaign Activity

Use this method to send a test email to specific email addresses. Test emails allow you to verify how the email campaign activity will look before you send it to contacts. This method uses the `email_addresses` array in the request body to determine the recipients of the test email. The test email does not process any dynamic content in the email campaign activity. Dynamic content includes contact and custom field variables.  You can send up to 50 test emails each day. Each recipient you add to the `email_addresses` array in the request body counts towards this limit. Successfully sending a test email returns a 204 response code without a response body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailSchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for an email campaign activity. You can only test send email campaign activities that have the `primary_email` role.
$test_send_email_campaign_activity_request = new \ConstantContactApi\Client\Model\TestSendEmailCampaignActivityRequest(); // \ConstantContactApi\Client\Model\TestSendEmailCampaignActivityRequest | A JSON request body that contains the recipients of the test email and an optional personal message.

try {
    $apiInstance->testSendEmailCampaignActivity($campaign_activity_id, $test_send_email_campaign_activity_request);
} catch (Exception $e) {
    echo 'Exception when calling EmailSchedulingApi->testSendEmailCampaignActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. You can only test send email campaign activities that have the &#x60;primary_email&#x60; role. | |
| **test_send_email_campaign_activity_request** | [**\ConstantContactApi\Client\Model\TestSendEmailCampaignActivityRequest**](../Model/TestSendEmailCampaignActivityRequest.md)| A JSON request body that contains the recipients of the test email and an optional personal message. | |

### Return type

void (empty response body)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unscheduleEmailCampaignActivity()`

```php
unscheduleEmailCampaignActivity($campaign_activity_id)
```

DELETE an Email Campaign Activity Schedule

Use this method to unschedule an email campaign activity by deleting the schedule. You can only unschedule email campaign activities that are in `SCHEDULED` status. Unscheduling reverts the email campaign activity to the status prior to `SCHEDULED`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EmailSchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 91569d46-00e4-4a4d-9a4c-d17d98740d04; // string | The unique ID for an email campaign activity.

try {
    $apiInstance->unscheduleEmailCampaignActivity($campaign_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailSchedulingApi->unscheduleEmailCampaignActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The unique ID for an email campaign activity. | |

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
