# ConstantContactApi\Client\LandingPagesReportingApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getContactAdds()**](LandingPagesReportingApi.md#getContactAdds) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_adds | GET a Unique Contacts Adds Landing Page Report |
| [**getContactOpens()**](LandingPagesReportingApi.md#getContactOpens) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_contact_opens | GET a Contacts Opens Landing Page Report |
| [**getUniqueContactClicks()**](LandingPagesReportingApi.md#getUniqueContactClicks) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_clicks | GET a Unique Contacts Clicks Landing Page Report |
| [**getUniqueContactOpens()**](LandingPagesReportingApi.md#getUniqueContactOpens) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_opens | GET a Unique Contacts Opens Landing Page Report |
| [**getUniqueContactSMSOptIns()**](LandingPagesReportingApi.md#getUniqueContactSMSOptIns) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_sms_optins | GET a Unique Contacts SMS Opt-In Landing Page Report |
| [**getUniqueContactUpdates()**](LandingPagesReportingApi.md#getUniqueContactUpdates) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_updates | GET a Unique Contacts Updates Landing Page Report |


## `getContactAdds()`

```php
getContactAdds($campaign_activity_id, $limit, $contacts_filter): \ConstantContactApi\Client\Model\GetContactAdds200Response
```

GET a Unique Contacts Adds Landing Page Report

Use this method to get details about each contact added to the account from a specified landing page. Contacts are identified by `contact_id`. The resulting contact data is listed with most recent activity first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\LandingPagesReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 82ee2c37-c8f8-4974-9560-ef93ad51d58z; // string | The landing page `campaign_activity_id` (UUID's) to use to get unique contact results.
$limit = 100; // string | Use to limit the number of contact tracking activities to return on a single page. The default is `50` and the maximum is `500` per page.
$contacts_filter = Jo; // string | Use to filter the results to only include contacts that contain a certain value. This parameter does full and partial matches and applies to the contact first name, last name, and email fields. For example: Josie or Jo.

try {
    $result = $apiInstance->getContactAdds($campaign_activity_id, $limit, $contacts_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesReportingApi->getContactAdds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The landing page &#x60;campaign_activity_id&#x60; (UUID&#39;s) to use to get unique contact results. | |
| **limit** | **string**| Use to limit the number of contact tracking activities to return on a single page. The default is &#x60;50&#x60; and the maximum is &#x60;500&#x60; per page. | [optional] [default to &#39;50&#39;] |
| **contacts_filter** | **string**| Use to filter the results to only include contacts that contain a certain value. This parameter does full and partial matches and applies to the contact first name, last name, and email fields. For example: Josie or Jo. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetContactAdds200Response**](../Model/GetContactAdds200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactOpens()`

```php
getContactOpens($campaign_activity_id, $limit, $contacts_filter): \ConstantContactApi\Client\Model\GetUniqueContactOpens200Response
```

GET a Contacts Opens Landing Page Report

Use this method get contact details for each time a contact opens a link on a landing page.  The resulting contact data is listed with most recent activity first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\LandingPagesReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 82ee2c37-c8f8-4974-9560-ef93ad51d58z; // string | The landing page `campaign_activity_id` (UUID's) to use to get unique contact open results.
$limit = 100; // string | Use to limit the number of contact tracking activities to return on a single page. The default is `50` and the maximum is `500` per page.
$contacts_filter = Jo; // string | Use to filter the results to only include contacts that contain a certain value. This parameter does full and partial matches and applies to the contact first name, last name, and email fields. For example: Josie or Jo.

try {
    $result = $apiInstance->getContactOpens($campaign_activity_id, $limit, $contacts_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesReportingApi->getContactOpens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The landing page &#x60;campaign_activity_id&#x60; (UUID&#39;s) to use to get unique contact open results. | |
| **limit** | **string**| Use to limit the number of contact tracking activities to return on a single page. The default is &#x60;50&#x60; and the maximum is &#x60;500&#x60; per page. | [optional] [default to &#39;50&#39;] |
| **contacts_filter** | **string**| Use to filter the results to only include contacts that contain a certain value. This parameter does full and partial matches and applies to the contact first name, last name, and email fields. For example: Josie or Jo. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetUniqueContactOpens200Response**](../Model/GetUniqueContactOpens200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUniqueContactClicks()`

```php
getUniqueContactClicks($campaign_activity_id, $limit, $contacts_filter): \ConstantContactApi\Client\Model\GetUniqueContactClicks200Response
```

GET a Unique Contacts Clicks Landing Page Report

Use this method get details about each contact that clicked a link on a landing page campaign activity. Unique contact clicks are identified by both the `contact_id` and `url_id`. The same contact may appear more than once in the results, if they clicked more than one link on the landing page. The resulting contact data is listed with most recent activity first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\LandingPagesReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 82ee2c37-c8f8-4974-9560-ef93ad51d58z; // string | The landing page `campaign_activity_id` (UUID's) to use to get unique contact click results.
$limit = 100; // string | Use to limit the number of contact tracking activities to return on a single page. The default is `50` and the maximum is `500` per page.
$contacts_filter = Jo; // string | Use to filter the results to return only contacts that match a contacts full or partial first or last name, or email. For example: Josie or Jo.

try {
    $result = $apiInstance->getUniqueContactClicks($campaign_activity_id, $limit, $contacts_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesReportingApi->getUniqueContactClicks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The landing page &#x60;campaign_activity_id&#x60; (UUID&#39;s) to use to get unique contact click results. | |
| **limit** | **string**| Use to limit the number of contact tracking activities to return on a single page. The default is &#x60;50&#x60; and the maximum is &#x60;500&#x60; per page. | [optional] [default to &#39;50&#39;] |
| **contacts_filter** | **string**| Use to filter the results to return only contacts that match a contacts full or partial first or last name, or email. For example: Josie or Jo. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetUniqueContactClicks200Response**](../Model/GetUniqueContactClicks200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUniqueContactOpens()`

```php
getUniqueContactOpens($campaign_activity_id, $limit, $contacts_filter): \ConstantContactApi\Client\Model\GetUniqueContactOpens200Response
```

GET a Unique Contacts Opens Landing Page Report

Use this method get details about each contact that opens a link on a landing page. Contacts are uniquely identified by `contact_id`.  The resulting contact data is listed with most recent activity first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\LandingPagesReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 82ee2c37-c8f8-4974-9560-ef93ad51d58z; // string | The landing page `campaign_activity_id` (UUID's) to use to get unique contact open results.
$limit = 100; // string | Use to limit the number of contact tracking activities to return on a single page. The default is `50` and the maximum is `500` per page.
$contacts_filter = Jo; // string | Use to filter the results to only include contacts that contain a certain value. This parameter does full and partial matches and applies to the contact first name, last name, and email fields. For example: Josie or Jo.

try {
    $result = $apiInstance->getUniqueContactOpens($campaign_activity_id, $limit, $contacts_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesReportingApi->getUniqueContactOpens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The landing page &#x60;campaign_activity_id&#x60; (UUID&#39;s) to use to get unique contact open results. | |
| **limit** | **string**| Use to limit the number of contact tracking activities to return on a single page. The default is &#x60;50&#x60; and the maximum is &#x60;500&#x60; per page. | [optional] [default to &#39;50&#39;] |
| **contacts_filter** | **string**| Use to filter the results to only include contacts that contain a certain value. This parameter does full and partial matches and applies to the contact first name, last name, and email fields. For example: Josie or Jo. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetUniqueContactOpens200Response**](../Model/GetUniqueContactOpens200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUniqueContactSMSOptIns()`

```php
getUniqueContactSMSOptIns($campaign_activity_id, $limit, $contacts_filter): \ConstantContactApi\Client\Model\GetUniqueContactSMSOptIns200Response
```

GET a Unique Contacts SMS Opt-In Landing Page Report

Use this method get details about unique contacts that click a link on a landing page to opt in to receiving SMS text messages. Contacts are uniquely identified by `contact_id``.  The resulting contact data is listed with most recent activity first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\LandingPagesReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 82ee2c37-c8f8-4974-9560-ef93ad51d58z; // string | The landing page `campaign_activity_id` (UUID's) to use to get unique contact click results.
$limit = 100; // string | Use to limit the number of contact tracking activities to return on a single page. The default is `50` and the maximum is `500` per page.
$contacts_filter = Jo; // string | Use to filter the results to return only contacts that match a contacts full or partial first or last name, or email. For example: Josie or Jo.

try {
    $result = $apiInstance->getUniqueContactSMSOptIns($campaign_activity_id, $limit, $contacts_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesReportingApi->getUniqueContactSMSOptIns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The landing page &#x60;campaign_activity_id&#x60; (UUID&#39;s) to use to get unique contact click results. | |
| **limit** | **string**| Use to limit the number of contact tracking activities to return on a single page. The default is &#x60;50&#x60; and the maximum is &#x60;500&#x60; per page. | [optional] [default to &#39;50&#39;] |
| **contacts_filter** | **string**| Use to filter the results to return only contacts that match a contacts full or partial first or last name, or email. For example: Josie or Jo. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetUniqueContactSMSOptIns200Response**](../Model/GetUniqueContactSMSOptIns200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUniqueContactUpdates()`

```php
getUniqueContactUpdates($campaign_activity_id, $limit, $contacts_filter): \ConstantContactApi\Client\Model\GetUniqueContactUpdates200Response
```

GET a Unique Contacts Updates Landing Page Report

Use this method to get contact details for each contact that updated their contact data from a landing page. Contacts are uniquely identified by `contact_id`.  The resulting contact data is listed with most recent activity first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\LandingPagesReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_activity_id = 82ee2c37-c8f8-4974-9560-ef93ad51d58z; // string | The landing page `campaign_activity_id` (UUID's) to use to get unique contact open results.
$limit = 100; // string | Use to limit the number of contact tracking activities to return on a single page. The default is `50` and the maximum is `500` per page.
$contacts_filter = Jo; // string | Use to filter the results to only include contacts that contain a certain value. This parameter does full and partial matches and applies to the contact first name, last name, and email fields. For example: Josie or Jo.

try {
    $result = $apiInstance->getUniqueContactUpdates($campaign_activity_id, $limit, $contacts_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesReportingApi->getUniqueContactUpdates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_activity_id** | **string**| The landing page &#x60;campaign_activity_id&#x60; (UUID&#39;s) to use to get unique contact open results. | |
| **limit** | **string**| Use to limit the number of contact tracking activities to return on a single page. The default is &#x60;50&#x60; and the maximum is &#x60;500&#x60; per page. | [optional] [default to &#39;50&#39;] |
| **contacts_filter** | **string**| Use to filter the results to only include contacts that contain a certain value. This parameter does full and partial matches and applies to the contact first name, last name, and email fields. For example: Josie or Jo. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetUniqueContactUpdates200Response**](../Model/GetUniqueContactUpdates200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
