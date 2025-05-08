# ConstantContactApi\Client\AccountServicesApi

All URIs are relative to https://api.cc.email/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAccountEmailAddress()**](AccountServicesApi.md#addAccountEmailAddress) | **POST** /account/emails | POST Add an Account Email Address |
| [**addPhysicalAddress()**](AccountServicesApi.md#addPhysicalAddress) | **POST** /account/summary/physical_address | POST the Physical Address for the Account |
| [**getAccountDetails()**](AccountServicesApi.md#getAccountDetails) | **GET** /account/summary | GET a Summary of Account Details |
| [**getAccountPhysicalAddress()**](AccountServicesApi.md#getAccountPhysicalAddress) | **GET** /account/summary/physical_address | GET the Physical Address for the Account |
| [**getAllAccountEmailAddresses()**](AccountServicesApi.md#getAllAccountEmailAddresses) | **GET** /account/emails | GET a Collection of Account Email Addresses |
| [**getUserPrivileges()**](AccountServicesApi.md#getUserPrivileges) | **GET** /account/user/privileges | GET User Privileges |
| [**updateAccount()**](AccountServicesApi.md#updateAccount) | **PUT** /account/summary | PUT (update) Account Details |
| [**updateAccountPhysicalAddress()**](AccountServicesApi.md#updateAccountPhysicalAddress) | **PUT** /account/summary/physical_address | PUT (update) the Physical Address for an Account |


## `addAccountEmailAddress()`

```php
addAccountEmailAddress($add_account_email_address_request): \ConstantContactApi\Client\Model\AddAccountEmailAddress201Response
```

POST Add an Account Email Address

Use this method to add a new email address to a Constant Contact account. If the email address you are adding already exists in the account the API will return a 409 conflict error.   When you add a new email address to an account, Constant Contact automatically sends an email to that address with a link to confirm it. After a user clicks that link, the account email status changes from `UNCONFIRMED` to `CONFIRMED`. You can use confirmed account email addresses in the email campaign `from_email` and `reply_to_email` headers. For more use case information, see [Add an Account Email Address](/api_guide/account_post_emails.html) in the API guide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\AccountServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_account_email_address_request = new \ConstantContactApi\Client\Model\AddAccountEmailAddressRequest(); // \ConstantContactApi\Client\Model\AddAccountEmailAddressRequest | A JSON request payload containing the new email address you want to add to the Constant Contact account.

try {
    $result = $apiInstance->addAccountEmailAddress($add_account_email_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServicesApi->addAccountEmailAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_account_email_address_request** | [**\ConstantContactApi\Client\Model\AddAccountEmailAddressRequest**](../Model/AddAccountEmailAddressRequest.md)| A JSON request payload containing the new email address you want to add to the Constant Contact account. | |

### Return type

[**\ConstantContactApi\Client\Model\AddAccountEmailAddress201Response**](../Model/AddAccountEmailAddress201Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addPhysicalAddress()`

```php
addPhysicalAddress($get_account_details200_response_physical_address): \ConstantContactApi\Client\Model\GetAccountDetails200ResponsePhysicalAddress
```

POST the Physical Address for the Account

Use this method to add the address where the account's organization physically resides. The physical address is required to send emails and displays on the footer of every email that is sent from the account. The country (<code>country_code</code>) where the account organization resides determines whether you use the <code>state_code</code> to specify United States (<code>US</code>) and Canada (<code>CA</code>) addresses, or use the <code>state_name</code> to specify all other countries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\AccountServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_account_details200_response_physical_address = new \ConstantContactApi\Client\Model\GetAccountDetails200ResponsePhysicalAddress(); // \ConstantContactApi\Client\Model\GetAccountDetails200ResponsePhysicalAddress | Include all `AccountPhysicalAddress` properties required for the specified `country_code`. If a required property is not included or incorrectly formatted, a 400 error message is returned. If the address already exists, a 409 error message is returned.

try {
    $result = $apiInstance->addPhysicalAddress($get_account_details200_response_physical_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServicesApi->addPhysicalAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_account_details200_response_physical_address** | [**\ConstantContactApi\Client\Model\GetAccountDetails200ResponsePhysicalAddress**](../Model/GetAccountDetails200ResponsePhysicalAddress.md)| Include all &#x60;AccountPhysicalAddress&#x60; properties required for the specified &#x60;country_code&#x60;. If a required property is not included or incorrectly formatted, a 400 error message is returned. If the address already exists, a 409 error message is returned. | |

### Return type

[**\ConstantContactApi\Client\Model\GetAccountDetails200ResponsePhysicalAddress**](../Model/GetAccountDetails200ResponsePhysicalAddress.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountDetails()`

```php
getAccountDetails($extra_fields): \ConstantContactApi\Client\Model\GetAccountDetails200Response
```

GET a Summary of Account Details

Get account related details for a Constant Contact user account. Use the `extra_fields` query parameter to include the `company_logo` and/or `physical_address` details in the response body. For more details, see [Get Account Summary Details](/api_guide/account_details_get.html).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\AccountServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extra_fields = company_logo; // string | Use the `extra_fields` query parameter to include the `physical_address` and/or `company_logo` details in the response body. Use a comma separated list to include both (physical_address, company logo).

try {
    $result = $apiInstance->getAccountDetails($extra_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServicesApi->getAccountDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **extra_fields** | **string**| Use the &#x60;extra_fields&#x60; query parameter to include the &#x60;physical_address&#x60; and/or &#x60;company_logo&#x60; details in the response body. Use a comma separated list to include both (physical_address, company logo). | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetAccountDetails200Response**](../Model/GetAccountDetails200Response.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountPhysicalAddress()`

```php
getAccountPhysicalAddress(): \ConstantContactApi\Client\Model\GetAccountDetails200ResponsePhysicalAddress
```

GET the Physical Address for the Account

Use this method to get the address where the account's organization physically resides. The physical address is required to send emails and displays on the footer of every email that is sent from the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\AccountServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccountPhysicalAddress();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServicesApi->getAccountPhysicalAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ConstantContactApi\Client\Model\GetAccountDetails200ResponsePhysicalAddress**](../Model/GetAccountDetails200ResponsePhysicalAddress.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountEmailAddresses()`

```php
getAllAccountEmailAddresses($confirm_status, $role_code, $email_address): \ConstantContactApi\Client\Model\GetAllAccountEmailAddresses200ResponseInner[]
```

GET a Collection of Account Email Addresses

Use this method to return a collection of email addresses for the account associated with your access token. When you <a href=\"https://v3.developer.constantcontact.com/api_reference/index.html#!/Email_Campaigns/createEmailCampaignUsingPOST\" target=\"_blank\">Create an Email Campaign<a/>, you must use an account email address with a `CONFIRMED` status in the email campaign `from_email` and `reply_to_email` headers.         Use the query parameters to filter results. You can filter using `confirm_status`, `role_code`, or `email_address`. For example, searching with `confirm_status=CONFIRMED` returns all confirmed email addresses in the account. This method only supports one query parameter at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\AccountServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$confirm_status = 'confirm_status_example'; // string | Use the `confirm_status` query parameter to search for account emails using the email status. Possible values are `CONFIRMED` or `UNCONFIRMED`. You can also abbreviate the values of this query parameter and use `C` or `U`.
$role_code = 'role_code_example'; // string | Use the `role_code` query parameter to search for account emails that have a specific role. Each each email address in an account can have multiple roles or no role. Possible values are `CONTACT`, `BILLING`, `REPLY_TO`, `JOURNALING`, or `OTHER`. You can also abbreviate the value of this query parameter and use `C`,`B`,`R`,`J`, or `O`.
$email_address = 'email_address_example'; // string | Use the `email_address` query parameter to search for a specific account email address.

try {
    $result = $apiInstance->getAllAccountEmailAddresses($confirm_status, $role_code, $email_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServicesApi->getAllAccountEmailAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **confirm_status** | **string**| Use the &#x60;confirm_status&#x60; query parameter to search for account emails using the email status. Possible values are &#x60;CONFIRMED&#x60; or &#x60;UNCONFIRMED&#x60;. You can also abbreviate the values of this query parameter and use &#x60;C&#x60; or &#x60;U&#x60;. | [optional] |
| **role_code** | **string**| Use the &#x60;role_code&#x60; query parameter to search for account emails that have a specific role. Each each email address in an account can have multiple roles or no role. Possible values are &#x60;CONTACT&#x60;, &#x60;BILLING&#x60;, &#x60;REPLY_TO&#x60;, &#x60;JOURNALING&#x60;, or &#x60;OTHER&#x60;. You can also abbreviate the value of this query parameter and use &#x60;C&#x60;,&#x60;B&#x60;,&#x60;R&#x60;,&#x60;J&#x60;, or &#x60;O&#x60;. | [optional] |
| **email_address** | **string**| Use the &#x60;email_address&#x60; query parameter to search for a specific account email address. | [optional] |

### Return type

[**\ConstantContactApi\Client\Model\GetAllAccountEmailAddresses200ResponseInner[]**](../Model/GetAllAccountEmailAddresses200ResponseInner.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserPrivileges()`

```php
getUserPrivileges(): \ConstantContactApi\Client\Model\GetUserPrivileges200ResponseInner[]
```

GET User Privileges

Use this method to return the user privileges associated with your access token as an array of objects. This method returns all user privileges, including privileges the V3 API does not currently use. Constant Contact requires specific user privileges to make requests using the V3 API. For more information, see the [User Privileges and Roles Overview](/api_guide/user_privileges.html).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\AccountServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserPrivileges();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServicesApi->getUserPrivileges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ConstantContactApi\Client\Model\GetUserPrivileges200ResponseInner[]**](../Model/GetUserPrivileges200ResponseInner.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccount()`

```php
updateAccount($update_account_request): \ConstantContactApi\Client\Model\UpdateAccountRequest
```

PUT (update) Account Details

Use this method to update account details for a Constant Contact account, such as the email address or phone number. This PUT method provides a partial update where only valid properties that you include in the request body are updated and excluded properties are not overwritten. For more details, see [Put (update) Account Summary Details](/api_guide/account_details_put.html).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\AccountServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_account_request = new \ConstantContactApi\Client\Model\UpdateAccountRequest(); // \ConstantContactApi\Client\Model\UpdateAccountRequest | In the request body, specify changes to account details by including and modifying all or select `CustomerPut` properties. Changes to read-only fields (`encoded_account_id`) are ignored.

try {
    $result = $apiInstance->updateAccount($update_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServicesApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_account_request** | [**\ConstantContactApi\Client\Model\UpdateAccountRequest**](../Model/UpdateAccountRequest.md)| In the request body, specify changes to account details by including and modifying all or select &#x60;CustomerPut&#x60; properties. Changes to read-only fields (&#x60;encoded_account_id&#x60;) are ignored. | |

### Return type

[**\ConstantContactApi\Client\Model\UpdateAccountRequest**](../Model/UpdateAccountRequest.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountPhysicalAddress()`

```php
updateAccountPhysicalAddress($get_account_details200_response_physical_address): \ConstantContactApi\Client\Model\GetAccountDetails200ResponsePhysicalAddress
```

PUT (update) the Physical Address for an Account

Use this method to update the organization's physical address for the Constant Contact user account. The physical address is required to send emails and displays on the footer of every email that is sent from the account. To get the current physical address, make a GET call to `/account/summary/physical_address`. The country (<code>country_code</code>) where the account organization resides determines whether you use the <code>state_code</code> to specify United States (<code>US</code>) and Canada (<code>CA</code>) addresses, or use the <code>state_name</code> to specify all other countries. For more details, see [Put (update) the Physical Address for the Account](/api_guide/account_address_put.html). You must have the role of Account Owner assigned to update account level details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2_access_code
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2_implicit
$config = ConstantContactApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ConstantContactApi\Client\Api\AccountServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_account_details200_response_physical_address = new \ConstantContactApi\Client\Model\GetAccountDetails200ResponsePhysicalAddress(); // \ConstantContactApi\Client\Model\GetAccountDetails200ResponsePhysicalAddress | Include all `AccountPhysicalAddress` properties required for the specified `country_code` and then update only those properties that you want to change. Excluding a non-read only field from the request body removes it from the physical address.

try {
    $result = $apiInstance->updateAccountPhysicalAddress($get_account_details200_response_physical_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServicesApi->updateAccountPhysicalAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_account_details200_response_physical_address** | [**\ConstantContactApi\Client\Model\GetAccountDetails200ResponsePhysicalAddress**](../Model/GetAccountDetails200ResponsePhysicalAddress.md)| Include all &#x60;AccountPhysicalAddress&#x60; properties required for the specified &#x60;country_code&#x60; and then update only those properties that you want to change. Excluding a non-read only field from the request body removes it from the physical address. | |

### Return type

[**\ConstantContactApi\Client\Model\GetAccountDetails200ResponsePhysicalAddress**](../Model/GetAccountDetails200ResponsePhysicalAddress.md)

### Authorization

[oauth2_access_code](../../README.md#oauth2_access_code), [oauth2_implicit](../../README.md#oauth2_implicit)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
