# ConstantContactApi\Client\EventsApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkInTickets()**](EventsApi.md#checkInTickets) | **POST** /events/{event_id}/check_in/tickets | Check in event tickets. |
| [**copyEvent()**](EventsApi.md#copyEvent) | **POST** /events/{event_id}/copy | POST (copy) an existing event. |
| [**createEvent()**](EventsApi.md#createEvent) | **POST** /events/default | POST (create) a new event. |
| [**findEvents()**](EventsApi.md#findEvents) | **GET** /events | GET a collection of events. |
| [**findRegistrationsUsingGET()**](EventsApi.md#findRegistrationsUsingGET) | **GET** /events/{event_id}/tracks/{track_id}/registrations | Get a list of registrations for an event. |
| [**getEvent2()**](EventsApi.md#getEvent2) | **GET** /events/{event_id} | GET details for a single event. |
| [**getRegistrationInfo()**](EventsApi.md#getRegistrationInfo) | **GET** /events/{event_id}/tracks/{track_id}/registrations/{registration_id} | Get registration details for an event. |
| [**undoCheckInTickets()**](EventsApi.md#undoCheckInTickets) | **POST** /events/{event_id}/undo_check_in/tickets | Undo event ticket check-in. |
| [**updateEvent()**](EventsApi.md#updateEvent) | **PATCH** /events/{event_id} | PATCH (update) an event. |
| [**updateRegistrationPaymentStatusUsingPUT()**](EventsApi.md#updateRegistrationPaymentStatusUsingPUT) | **PUT** /events/{event_id}/tracks/{track_id}/registrations/payment_status | Update payment status for event registrations. |
| [**updateRegistrationStatusUsingPUT()**](EventsApi.md#updateRegistrationStatusUsingPUT) | **PUT** /events/{event_id}/tracks/{track_id}/registrations | Update status for event registrations. |


## `checkInTickets()`

```php
checkInTickets($event_id, $check_in_tickets_request)
```

Check in event tickets.

Use this endpoint to mark one or more tickets as checked in. The event must be in `ACTIVE` or `COMPLETE` status. Tickets with `CANCELLED` status cannot be checked in (returns HTTP 400).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 07216444-4e3b-41ea-a3b8-5a418fce41f4; // string | The ID that uniquely identifies the event.
$check_in_tickets_request = new \ConstantContactApi\Client\Model\CheckInTicketsRequest(); // \ConstantContactApi\Client\Model\CheckInTicketsRequest | Set of order ticket keys to mark as checked in.

try {
    $apiInstance->checkInTickets($event_id, $check_in_tickets_request);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->checkInTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| The ID that uniquely identifies the event. | |
| **check_in_tickets_request** | [**\ConstantContactApi\Client\Model\CheckInTicketsRequest**](../Model/CheckInTicketsRequest.md)| Set of order ticket keys to mark as checked in. | |

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

## `copyEvent()`

```php
copyEvent($event_id, $copy_event_request): \ConstantContactApi\Client\Model\CreateEvent201Response
```

POST (copy) an existing event.

Creates a deep copy of an existing event with all its settings, registration forms, and landing pages. The copied event is created in DRAFT status. Events in DRAFT, ACTIVE, COMPLETE, or CANCELED status can be copied. DELETED events cannot be copied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 1697732a-8664-4675-8415-c4aabaa17dae; // string | The ID of the event to copy.
$copy_event_request = new \ConstantContactApi\Client\Model\CopyEventRequest(); // \ConstantContactApi\Client\Model\CopyEventRequest | A JSON request body containing the copy options.

try {
    $result = $apiInstance->copyEvent($event_id, $copy_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->copyEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| The ID of the event to copy. | |
| **copy_event_request** | [**\ConstantContactApi\Client\Model\CopyEventRequest**](../Model/CopyEventRequest.md)| A JSON request body containing the copy options. | |

### Return type

[**\ConstantContactApi\Client\Model\CreateEvent201Response**](../Model/CreateEvent201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEvent()`

```php
createEvent($name, $start_time, $end_time, $placeholder_campaign_id): \ConstantContactApi\Client\Model\CreateEvent201Response
```

POST (create) a new event.

Creates a new event with default settings, registration form, and landing page. The event will be created in DRAFT status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = My Event; // string | Name for the new event. If not provided, a default name will be generated.
$start_time = 2024-01-15T10:00:00Z; // string | Event start time in ISO 8601 format. If not provided, defaults to a future date.
$end_time = 2024-01-15T18:00:00Z; // string | Event end time in ISO 8601 format. If not provided, defaults to one hour after start time.
$placeholder_campaign_id = campaign-123; // string | Placeholder campaign ID for the event.

try {
    $result = $apiInstance->createEvent($name, $start_time, $end_time, $placeholder_campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->createEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name for the new event. If not provided, a default name will be generated. | [optional] |
| **start_time** | **string**| Event start time in ISO 8601 format. If not provided, defaults to a future date. | [optional] |
| **end_time** | **string**| Event end time in ISO 8601 format. If not provided, defaults to one hour after start time. | [optional] |
| **placeholder_campaign_id** | **string**| Placeholder campaign ID for the event. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\CreateEvent201Response**](../Model/CreateEvent201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findEvents()`

```php
findEvents($event_status, $search_text, $sort_by, $sort_order, $limit, $prev, $next): \ConstantContactApi\Client\Model\FindEvents200Response
```

GET a collection of events.

Retrieve a collection of events with event details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_status = DRAFT; // string | Use to return only events that meet the specified status. Acceptable values include `ACTIVE`,`DRAFT`, `COMPLETE`, `DELETED`,`CANCELLED`, and `ERROR`.
$search_text = reunion; // string | Use to return only events that include the specified text.
$sort_by = created_time; // string | Use to sort resulting events by one of the following properties: `name`, `start_time`, `end_time`, `created_time`, or `updated_time`.
$sort_order = DESC; // string | Sort order for the `sort_by parameter`. Accepted values include `ASC` (ascending) or `DESC` (descending). Defaults to `ASC` if `sort_by` is provided.
$limit = 5; // string | Limit the number of results to return per page. Default and maximum is `100`.
$prev = 7zDEe3DhD5gUiwRFsvWKKZlZO1j6-YihH2hyVWD8GaW7JnzXbHFP8Tou212KoU20mOjvM6pdWwycDWC3X-Hb_xY-RK1eBwYp_pc4X2CvLxo.; // string | Cursor for retrieving the previous page of results. This value is obtained from the `prev_cursor` field in a previous response.
$next = 7zDEe3DhD5gUiwRFsvWKKZlZO1j6-YihH2hyVWD8GaW7JnzXbHFP8Tou212KoU20mOjvM6pdWwycDWC3X-Hb_xY-RK1eBwYp_pc4X2CvLxo; // string | Cursor for retrieving the next page of results. This value is obtained from the `next_cursor` field in a previous response.

try {
    $result = $apiInstance->findEvents($event_status, $search_text, $sort_by, $sort_order, $limit, $prev, $next);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->findEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_status** | **string**| Use to return only events that meet the specified status. Acceptable values include &#x60;ACTIVE&#x60;,&#x60;DRAFT&#x60;, &#x60;COMPLETE&#x60;, &#x60;DELETED&#x60;,&#x60;CANCELLED&#x60;, and &#x60;ERROR&#x60;. | [optional] |
| **search_text** | **string**| Use to return only events that include the specified text. | [optional] |
| **sort_by** | **string**| Use to sort resulting events by one of the following properties: &#x60;name&#x60;, &#x60;start_time&#x60;, &#x60;end_time&#x60;, &#x60;created_time&#x60;, or &#x60;updated_time&#x60;. | [optional] |
| **sort_order** | **string**| Sort order for the &#x60;sort_by parameter&#x60;. Accepted values include &#x60;ASC&#x60; (ascending) or &#x60;DESC&#x60; (descending). Defaults to &#x60;ASC&#x60; if &#x60;sort_by&#x60; is provided. | [optional] |
| **limit** | **string**| Limit the number of results to return per page. Default and maximum is &#x60;100&#x60;. | [optional] |
| **prev** | **string**| Cursor for retrieving the previous page of results. This value is obtained from the &#x60;prev_cursor&#x60; field in a previous response. | [optional] |
| **next** | **string**| Cursor for retrieving the next page of results. This value is obtained from the &#x60;next_cursor&#x60; field in a previous response. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\FindEvents200Response**](../Model/FindEvents200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findRegistrationsUsingGET()`

```php
findRegistrationsUsingGET($event_id, $track_id, $registration_status, $payment_status, $search_text, $sort_by, $sort_order, $page_size, $limit, $prev, $next): \ConstantContactApi\Client\Model\FindRegistrationsUsingGET200Response
```

Get a list of registrations for an event.

Use the `event_id` and `track_id` path parameters to get a list of registrations for an event. Use optional query parameters to limit the number of results returned per page, the sort order, or to filter results by specific criteria; such as registration `status`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 1697732a-8664-4675-8415-c4aabaa17dae; // string | The ID that uniquely identifies the event.
$track_id = s8zabc; // string | The track ID that uniquely identifies the event track.
$registration_status = REGISTERED; // string | Filter registration results by status.
$payment_status = PAID; // string | Filter registration results by payment status.
$search_text = john.doe@example.com; // string | Filter registration results by first name, last name, or email address.
$sort_by = email_address; // string | Specify the field to use to sort the results.
$sort_order = ASC; // string | Use to specify how you want the results sorted.
$page_size = 50; // string | Alternative to the <code>limit</code> parameter to limit the number of results returned per page. If specifying both the <code>limit</code> and <code>page_size</code> query parameters, they must be the same value.
$limit = 50; // string | Limit the number of results returned per page. If specifying both the <code>limit</code> and <code>page_size</code> query parameters, they must be the same value.
$prev = bSzsyWkkq95R44vIFEpY62gr8_xSeRXsEQkhnhltPgiT; // string | Cursor for pagination used to get the previous page of results (mutually exclusive with <code>next</code>).
$next = cTk9xLmmr06S55wJGfQ73hs9_yTfSYtFRlimimQhjUj; // string | Cursor for pagination used to get the next page of results (mutually exclusive with <code>prev</code>).

try {
    $result = $apiInstance->findRegistrationsUsingGET($event_id, $track_id, $registration_status, $payment_status, $search_text, $sort_by, $sort_order, $page_size, $limit, $prev, $next);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->findRegistrationsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| The ID that uniquely identifies the event. | |
| **track_id** | **string**| The track ID that uniquely identifies the event track. | |
| **registration_status** | **string**| Filter registration results by status. | [optional] |
| **payment_status** | **string**| Filter registration results by payment status. | [optional] |
| **search_text** | **string**| Filter registration results by first name, last name, or email address. | [optional] |
| **sort_by** | **string**| Specify the field to use to sort the results. | [optional] |
| **sort_order** | **string**| Use to specify how you want the results sorted. | [optional] |
| **page_size** | **string**| Alternative to the &lt;code&gt;limit&lt;/code&gt; parameter to limit the number of results returned per page. If specifying both the &lt;code&gt;limit&lt;/code&gt; and &lt;code&gt;page_size&lt;/code&gt; query parameters, they must be the same value. | [optional] |
| **limit** | **string**| Limit the number of results returned per page. If specifying both the &lt;code&gt;limit&lt;/code&gt; and &lt;code&gt;page_size&lt;/code&gt; query parameters, they must be the same value. | [optional] |
| **prev** | **string**| Cursor for pagination used to get the previous page of results (mutually exclusive with &lt;code&gt;next&lt;/code&gt;). | [optional] |
| **next** | **string**| Cursor for pagination used to get the next page of results (mutually exclusive with &lt;code&gt;prev&lt;/code&gt;). | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\FindRegistrationsUsingGET200Response**](../Model/FindRegistrationsUsingGET200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvent2()`

```php
getEvent2($event_id, $include): \ConstantContactApi\Client\Model\CreateEvent201Response
```

GET details for a single event.

Specify the `event_id` path parameter to retrieve the event's details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 1697732a-8664-4675-8415-c4aabaa17dae; // string | The ID that uniquely identifies the event.
$include = true; // bool | Use to include (`true`) or exclude (`false`) event setting properties in the results.

try {
    $result = $apiInstance->getEvent2($event_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvent2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| The ID that uniquely identifies the event. | |
| **include** | **bool**| Use to include (&#x60;true&#x60;) or exclude (&#x60;false&#x60;) event setting properties in the results. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\CreateEvent201Response**](../Model/CreateEvent201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRegistrationInfo()`

```php
getRegistrationInfo($event_id, $track_id, $registration_id): \ConstantContactApi\Client\Model\GetRegistrationInfo200Response
```

Get registration details for an event.

Use the `event_id`, `registration_id`, and `track_id` path parameters to get registration details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 1697732a-8664-4675-8415-c4aabaa17dae; // string | The ID that uniquely identifies the event.
$track_id = s8zabc; // string | The track key that uniquely identifies the event track.
$registration_id = a1b2c3d4-e5f6-7890-abcd-ef1234567890; // string | The ID that uniquely identifies the registration.

try {
    $result = $apiInstance->getRegistrationInfo($event_id, $track_id, $registration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getRegistrationInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| The ID that uniquely identifies the event. | |
| **track_id** | **string**| The track key that uniquely identifies the event track. | |
| **registration_id** | **string**| The ID that uniquely identifies the registration. | |

### Return type

[**\ConstantContactApi\Client\Model\GetRegistrationInfo200Response**](../Model/GetRegistrationInfo200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `undoCheckInTickets()`

```php
undoCheckInTickets($event_id, $check_in_tickets_request)
```

Undo event ticket check-in.

Use this endpoint to undo check-in for one or more tickets, marking them as not checked in. The event must be in `ACTIVE` or `COMPLETE` status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 07216444-4e3b-41ea-a3b8-5a418fce41f4; // string | The ID that uniquely identifies the event.
$check_in_tickets_request = new \ConstantContactApi\Client\Model\CheckInTicketsRequest(); // \ConstantContactApi\Client\Model\CheckInTicketsRequest | Set of order ticket keys to mark as not checked in.

try {
    $apiInstance->undoCheckInTickets($event_id, $check_in_tickets_request);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->undoCheckInTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| The ID that uniquely identifies the event. | |
| **check_in_tickets_request** | [**\ConstantContactApi\Client\Model\CheckInTicketsRequest**](../Model/CheckInTicketsRequest.md)| Set of order ticket keys to mark as not checked in. | |

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

## `updateEvent()`

```php
updateEvent($event_id, $create_event201_response)
```

PATCH (update) an event.

Partially updates an event with the provided fields. Only the specified fields will be updated. This endpoint only works for events in DRAFT or ACTIVE status. Events in COMPLETE, CANCELED, or DELETED status cannot be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 1697732a-8664-4675-8415-c4aabaa17dae; // string | The ID that uniquely identifies the event to update.
$create_event201_response = new \ConstantContactApi\Client\Model\CreateEvent201Response(); // \ConstantContactApi\Client\Model\CreateEvent201Response | A JSON request body containing the event fields to update.

try {
    $apiInstance->updateEvent($event_id, $create_event201_response);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->updateEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| The ID that uniquely identifies the event to update. | |
| **create_event201_response** | [**\ConstantContactApi\Client\Model\CreateEvent201Response**](../Model/CreateEvent201Response.md)| A JSON request body containing the event fields to update. | |

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

## `updateRegistrationPaymentStatusUsingPUT()`

```php
updateRegistrationPaymentStatusUsingPUT($event_id, $track_id, $update_registration_payment_status_using_put_request)
```

Update payment status for event registrations.

Use this endpoint to update the payment status for one or more registrations. This endpoint only processes registrations with a payment method (PAYPAL, WEPAY, STRIPE, DOOR, or CHECK). Free registrations without a payment method are silently excluded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = c5da3665-88f9-4b15-82bc-cd6593c32537; // string | The ID that uniquely identifies the event.
$track_id = 2unzqq; // string | The track key that uniquely identifies the event track.
$update_registration_payment_status_using_put_request = new \ConstantContactApi\Client\Model\UpdateRegistrationPaymentStatusUsingPUTRequest(); // \ConstantContactApi\Client\Model\UpdateRegistrationPaymentStatusUsingPUTRequest | Payment status update request data.

try {
    $apiInstance->updateRegistrationPaymentStatusUsingPUT($event_id, $track_id, $update_registration_payment_status_using_put_request);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->updateRegistrationPaymentStatusUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| The ID that uniquely identifies the event. | |
| **track_id** | **string**| The track key that uniquely identifies the event track. | |
| **update_registration_payment_status_using_put_request** | [**\ConstantContactApi\Client\Model\UpdateRegistrationPaymentStatusUsingPUTRequest**](../Model/UpdateRegistrationPaymentStatusUsingPUTRequest.md)| Payment status update request data. | |

### Return type

void (empty response body)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRegistrationStatusUsingPUT()`

```php
updateRegistrationStatusUsingPUT($event_id, $track_id, $update_registration_status_using_put_request, $increase_count, $increase_item_count, $return_items_to_inventory)
```

Update status for event registrations.

Use this endpoint to update the registration status for one or more registrations within an event track.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 07216444-4e3b-41ea-a3b8-5a418fce41f4; // string | The ID that uniquely identifies the event.
$track_id = gqz1gb; // string | The track key that uniquely identifies the event track.
$update_registration_status_using_put_request = new \ConstantContactApi\Client\Model\UpdateRegistrationStatusUsingPUTRequest(); // \ConstantContactApi\Client\Model\UpdateRegistrationStatusUsingPUTRequest | Registration status update request data.
$increase_count = True; // bool | Override count flag.
$increase_item_count = True; // bool | Override item count flag.
$return_items_to_inventory = True; // bool | Return items to inventory flag. Defaults to `true`.

try {
    $apiInstance->updateRegistrationStatusUsingPUT($event_id, $track_id, $update_registration_status_using_put_request, $increase_count, $increase_item_count, $return_items_to_inventory);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->updateRegistrationStatusUsingPUT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| The ID that uniquely identifies the event. | |
| **track_id** | **string**| The track key that uniquely identifies the event track. | |
| **update_registration_status_using_put_request** | [**\ConstantContactApi\Client\Model\UpdateRegistrationStatusUsingPUTRequest**](../Model/UpdateRegistrationStatusUsingPUTRequest.md)| Registration status update request data. | |
| **increase_count** | **bool**| Override count flag. | [optional] |
| **increase_item_count** | **bool**| Override item count flag. | [optional] |
| **return_items_to_inventory** | **bool**| Return items to inventory flag. Defaults to &#x60;true&#x60;. | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
