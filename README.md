# constant-contact-api

    Swagger build version 3.0.53


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
"repositories": [
{
"type": "vcs",
"url": "https://github.com/constantcontact/constant-contact-v3api-client-php.git"
}
],
"require": {
"constantcontact/constant-contact-v3api-client-php": "*@dev"
}
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
        <?php
require_once('/path/to/constant-contact-api/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.cc.email/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountServicesApi* | [**addAccountEmailAddress**](docs/Api/AccountServicesApi.md#addaccountemailaddress) | **POST** /account/emails | POST Add an Account Email Address
*AccountServicesApi* | [**addPhysicalAddress**](docs/Api/AccountServicesApi.md#addphysicaladdress) | **POST** /account/summary/physical_address | POST the Physical Address for the Account
*AccountServicesApi* | [**getAccountDetails**](docs/Api/AccountServicesApi.md#getaccountdetails) | **GET** /account/summary | GET a Summary of Account Details
*AccountServicesApi* | [**getAccountPhysicalAddress**](docs/Api/AccountServicesApi.md#getaccountphysicaladdress) | **GET** /account/summary/physical_address | GET the Physical Address for the Account
*AccountServicesApi* | [**getAllAccountEmailAddresses**](docs/Api/AccountServicesApi.md#getallaccountemailaddresses) | **GET** /account/emails | GET a Collection of Account Email Addresses
*AccountServicesApi* | [**getUserPrivileges**](docs/Api/AccountServicesApi.md#getuserprivileges) | **GET** /account/user/privileges | GET User Privileges
*AccountServicesApi* | [**updateAccount**](docs/Api/AccountServicesApi.md#updateaccount) | **PUT** /account/summary | PUT (update) Account Details
*AccountServicesApi* | [**updateAccountPhysicalAddress**](docs/Api/AccountServicesApi.md#updateaccountphysicaladdress) | **PUT** /account/summary/physical_address | PUT (update) the Physical Address for an Account
*BulkActivitiesApi* | [**createCSVImportActivity**](docs/Api/BulkActivitiesApi.md#createcsvimportactivity) | **POST** /activities/contacts_file_import | Import Contacts using a CSV File
*BulkActivitiesApi* | [**createDeleteActivity**](docs/Api/BulkActivitiesApi.md#createdeleteactivity) | **POST** /activities/contact_delete | Delete Contacts in Bulk
*BulkActivitiesApi* | [**createExportActivity**](docs/Api/BulkActivitiesApi.md#createexportactivity) | **POST** /activities/contact_exports | Export Contacts to a File
*BulkActivitiesApi* | [**createImportJSONActivity**](docs/Api/BulkActivitiesApi.md#createimportjsonactivity) | **POST** /activities/contacts_json_import | Import Contacts using a JSON Payload
*BulkActivitiesApi* | [**createListAddActivity**](docs/Api/BulkActivitiesApi.md#createlistaddactivity) | **POST** /activities/add_list_memberships | Add Contacts to Lists
*BulkActivitiesApi* | [**createListDeleteActivity**](docs/Api/BulkActivitiesApi.md#createlistdeleteactivity) | **POST** /activities/list_delete | Delete Contact Lists
*BulkActivitiesApi* | [**createListRemoveActivity**](docs/Api/BulkActivitiesApi.md#createlistremoveactivity) | **POST** /activities/remove_list_memberships | Remove Contacts from Lists
*BulkActivitiesApi* | [**createTagAddContactActivity**](docs/Api/BulkActivitiesApi.md#createtagaddcontactactivity) | **POST** /activities/contacts_taggings_add | Add Tags to Contacts
*BulkActivitiesApi* | [**createTagDeleteActivity**](docs/Api/BulkActivitiesApi.md#createtagdeleteactivity) | **POST** /activities/contacts_tags_delete | Delete Tags
*BulkActivitiesApi* | [**createTagRemoveActivity**](docs/Api/BulkActivitiesApi.md#createtagremoveactivity) | **POST** /activities/contacts_taggings_remove | Remove Tags from Contacts
*BulkActivitiesApi* | [**getActivityById**](docs/Api/BulkActivitiesApi.md#getactivitybyid) | **GET** /activities/{activity_id} | GET an Activity Status
*BulkActivitiesApi* | [**getAllActivities**](docs/Api/BulkActivitiesApi.md#getallactivities) | **GET** /activities | GET Activity Status Collection
*BulkActivitiesApi* | [**getCSVExportFile**](docs/Api/BulkActivitiesApi.md#getcsvexportfile) | **GET** /contact_exports/{file_export_id} | Retrieve Exported Contacts File
*BulkActivitiesApi* | [**postCustomFieldDelete**](docs/Api/BulkActivitiesApi.md#postcustomfielddelete) | **POST** /activities/custom_fields_delete | Delete Custom Fields
*ContactListsApi* | [**createList**](docs/Api/ContactListsApi.md#createlist) | **POST** /contact_lists | POST (create) a List
*ContactListsApi* | [**deleteList**](docs/Api/ContactListsApi.md#deletelist) | **DELETE** /contact_lists/{list_id} | DELETE a List
*ContactListsApi* | [**getAllLists**](docs/Api/ContactListsApi.md#getalllists) | **GET** /contact_lists | GET Lists Collection
*ContactListsApi* | [**getList**](docs/Api/ContactListsApi.md#getlist) | **GET** /contact_lists/{list_id} | GET a List
*ContactListsApi* | [**getListIdXrefs**](docs/Api/ContactListsApi.md#getlistidxrefs) | **GET** /contact_lists/list_id_xrefs | GET a collection of V2 and V3 API List IDs
*ContactListsApi* | [**updateList**](docs/Api/ContactListsApi.md#updatelist) | **PUT** /contact_lists/{list_id} | PUT (update) a List
*ContactTagsApi* | [**deleteTag**](docs/Api/ContactTagsApi.md#deletetag) | **DELETE** /contact_tags/{tag_id} | DELETE a Tag
*ContactTagsApi* | [**getAllTags**](docs/Api/ContactTagsApi.md#getalltags) | **GET** /contact_tags | GET Details for All Tags
*ContactTagsApi* | [**getTag**](docs/Api/ContactTagsApi.md#gettag) | **GET** /contact_tags/{tag_id} | GET Tag Details
*ContactTagsApi* | [**postTag**](docs/Api/ContactTagsApi.md#posttag) | **POST** /contact_tags | POST (Create) a Tag
*ContactTagsApi* | [**putTag**](docs/Api/ContactTagsApi.md#puttag) | **PUT** /contact_tags/{tag_id} | PUT (Update) a Tag
*ContactsApi* | [**createContact**](docs/Api/ContactsApi.md#createcontact) | **POST** /contacts | POST (create) a Contact
*ContactsApi* | [**createOrUpdateContact**](docs/Api/ContactsApi.md#createorupdatecontact) | **POST** /contacts/sign_up_form | Create or Update a Contact
*ContactsApi* | [**deleteContact**](docs/Api/ContactsApi.md#deletecontact) | **DELETE** /contacts/{contact_id} | DELETE a Contact
*ContactsApi* | [**getAllContacts**](docs/Api/ContactsApi.md#getallcontacts) | **GET** /contacts | GET Contacts Collection
*ContactsApi* | [**getContactById**](docs/Api/ContactsApi.md#getcontactbyid) | **GET** /contacts/{contact_id} | GET a Contact
*ContactsApi* | [**getContactCounts**](docs/Api/ContactsApi.md#getcontactcounts) | **GET** /contacts/counts | GET Contact Consent Counts
*ContactsApi* | [**getContactIdXrefs**](docs/Api/ContactsApi.md#getcontactidxrefs) | **GET** /contacts/contact_id_xrefs | GET a collection of V2 and V3 API contact IDs
*ContactsApi* | [**getSmsEngagementHistory**](docs/Api/ContactsApi.md#getsmsengagementhistory) | **GET** /contacts/sms_engagement_history/{contact_id} | GET SMS Engagement History for a Contact
*ContactsApi* | [**resubscribeContact**](docs/Api/ContactsApi.md#resubscribecontact) | **PUT** /contacts/resubscribe/{contact_id} | PUT Resubscribe a Contact
*ContactsApi* | [**updateContact**](docs/Api/ContactsApi.md#updatecontact) | **PUT** /contacts/{contact_id} | PUT (update) a Contact
*ContactsCustomFieldsApi* | [**createCustomFields**](docs/Api/ContactsCustomFieldsApi.md#createcustomfields) | **POST** /contact_custom_fields | POST (create) a custom_field
*ContactsCustomFieldsApi* | [**deleteCustomField**](docs/Api/ContactsCustomFieldsApi.md#deletecustomfield) | **DELETE** /contact_custom_fields/{custom_field_id} | DELETE a custom_field
*ContactsCustomFieldsApi* | [**getAllCustomFields**](docs/Api/ContactsCustomFieldsApi.md#getallcustomfields) | **GET** /contact_custom_fields | GET custom_fields Collection
*ContactsCustomFieldsApi* | [**getCustomField**](docs/Api/ContactsCustomFieldsApi.md#getcustomfield) | **GET** /contact_custom_fields/{custom_field_id} | GET a custom_field
*ContactsCustomFieldsApi* | [**updateCustomField**](docs/Api/ContactsCustomFieldsApi.md#updatecustomfield) | **PUT** /contact_custom_fields/{custom_field_id} | PUT (update) a custom_field
*ContactsReportingApi* | [**getContactOpenClickRateReport**](docs/Api/ContactsReportingApi.md#getcontactopenclickratereport) | **GET** /reports/contact_reports/{contact_id}/open_and_click_rates | GET Average Open and Click Rates
*ContactsReportingApi* | [**getContactTrackingCountReport**](docs/Api/ContactsReportingApi.md#getcontacttrackingcountreport) | **GET** /reports/contact_reports/{contact_id}/activity_summary | GET Contact Action Summary
*ContactsReportingApi* | [**getContactTrackingReport**](docs/Api/ContactsReportingApi.md#getcontacttrackingreport) | **GET** /reports/contact_reports/{contact_id}/activity_details | GET Contact Activity Details
*EmailCampaignsApi* | [**createEmailCampaign**](docs/Api/EmailCampaignsApi.md#createemailcampaign) | **POST** /emails | POST (Create) a New Email Campaign
*EmailCampaignsApi* | [**createResendEmailCampaign**](docs/Api/EmailCampaignsApi.md#createresendemailcampaign) | **POST** /emails/activities/{campaign_activity_id}/non_opener_resends | POST a Resend to Non-openers Campaign Activity
*EmailCampaignsApi* | [**deleteEmailCampaign**](docs/Api/EmailCampaignsApi.md#deleteemailcampaign) | **DELETE** /emails/{campaign_id} | DELETE an Email Campaign
*EmailCampaignsApi* | [**deleteResendEmailCampaign**](docs/Api/EmailCampaignsApi.md#deleteresendemailcampaign) | **DELETE** /emails/activities/{campaign_activity_id}/non_opener_resends/{resend_request_id} | DELETE a Resend to Non Openers Activity
*EmailCampaignsApi* | [**getAllEmailCampaigns**](docs/Api/EmailCampaignsApi.md#getallemailcampaigns) | **GET** /emails | GET a Collection of Email Campaigns
*EmailCampaignsApi* | [**getEmailCampaignActivity**](docs/Api/EmailCampaignsApi.md#getemailcampaignactivity) | **GET** /emails/activities/{campaign_activity_id} | GET a Single Email Campaign Activity
*EmailCampaignsApi* | [**getEmailCampaignById**](docs/Api/EmailCampaignsApi.md#getemailcampaignbyid) | **GET** /emails/{campaign_id} | GET Details About a Single Email Campaign
*EmailCampaignsApi* | [**getEmailCampaignXrefs**](docs/Api/EmailCampaignsApi.md#getemailcampaignxrefs) | **GET** /emails/campaign_id_xrefs | GET a Collection of V2 and V3 API Email Campaign Identifiers
*EmailCampaignsApi* | [**getResendEmailCampaign**](docs/Api/EmailCampaignsApi.md#getresendemailcampaign) | **GET** /emails/activities/{campaign_activity_id}/non_opener_resends | GET Details for a Resend to Non-openers Campaign Activity
*EmailCampaignsApi* | [**patchEmailCampaignName**](docs/Api/EmailCampaignsApi.md#patchemailcampaignname) | **PATCH** /emails/{campaign_id} | PATCH (Update) an Email Campaign Name
*EmailCampaignsApi* | [**updateEmailCampaignActivity**](docs/Api/EmailCampaignsApi.md#updateemailcampaignactivity) | **PUT** /emails/activities/{campaign_activity_id} | PUT (Update) An Email Campaign Activity
*EmailCampaignsABTestsApi* | [**createABTestEmailCampaign**](docs/Api/EmailCampaignsABTestsApi.md#createabtestemailcampaign) | **POST** /emails/activities/{campaign_activity_id}/abtest | POST (Create) an A/B Test for an Email Campaign Activity
*EmailCampaignsABTestsApi* | [**deleteABTestEmailCampaign**](docs/Api/EmailCampaignsABTestsApi.md#deleteabtestemailcampaign) | **DELETE** /emails/activities/{campaign_activity_id}/abtest | DELETE an A/B Test for an Email Campaign Activity
*EmailCampaignsABTestsApi* | [**getABTestEmailCampaign**](docs/Api/EmailCampaignsABTestsApi.md#getabtestemailcampaign) | **GET** /emails/activities/{campaign_activity_id}/abtest | GET A/B Test Details for an Email Campaign Activity
*EmailReportingApi* | [**getBouncesReport**](docs/Api/EmailReportingApi.md#getbouncesreport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/bounces | GET an Email Bounces Report
*EmailReportingApi* | [**getCampaignActivityLinkReport**](docs/Api/EmailReportingApi.md#getcampaignactivitylinkreport) | **GET** /reports/email_reports/{campaign_activity_id}/links | GET an Email Links Report
*EmailReportingApi* | [**getClicksReport**](docs/Api/EmailReportingApi.md#getclicksreport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/clicks | GET an Email Clicks Report
*EmailReportingApi* | [**getDidNotOpensReport**](docs/Api/EmailReportingApi.md#getdidnotopensreport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/didnotopens | GET an Email Did Not Opens Report
*EmailReportingApi* | [**getEmailCampaignActivityReport**](docs/Api/EmailReportingApi.md#getemailcampaignactivityreport) | **GET** /reports/stats/email_campaign_activities/{campaign_activity_ids} | GET an Email Campaign Activity Stats Report
*EmailReportingApi* | [**getEmailCampaignReport**](docs/Api/EmailReportingApi.md#getemailcampaignreport) | **GET** /reports/summary_reports/email_campaign_summaries | GET an Email Campaigns Summary Report
*EmailReportingApi* | [**getEmailOpensReport**](docs/Api/EmailReportingApi.md#getemailopensreport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/opens | GET an Email Opens Report
*EmailReportingApi* | [**getEmailSendsReport**](docs/Api/EmailReportingApi.md#getemailsendsreport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/sends | GET an Email Sends Report
*EmailReportingApi* | [**getEmailStatsReport**](docs/Api/EmailReportingApi.md#getemailstatsreport) | **GET** /reports/stats/email_campaigns/{campaign_ids} | GET an Email Campaign Stats Report
*EmailReportingApi* | [**getForwardsReport**](docs/Api/EmailReportingApi.md#getforwardsreport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/forwards | GET an Email Forwards Report
*EmailReportingApi* | [**getOptoutsReport**](docs/Api/EmailReportingApi.md#getoptoutsreport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/optouts | GET an Email Opt-outs Report
*EmailReportingApi* | [**getUniqueOpensReport**](docs/Api/EmailReportingApi.md#getuniqueopensreport) | **GET** /reports/email_reports/{campaign_activity_id}/tracking/unique_opens | GET an Email Unique Opens Report
*EmailSchedulingApi* | [**getEmailCampaignActivityPreview**](docs/Api/EmailSchedulingApi.md#getemailcampaignactivitypreview) | **GET** /emails/activities/{campaign_activity_id}/previews | GET the HTML Preview of an Email Campaign Activity
*EmailSchedulingApi* | [**getEmailCampaignActivitySchedule**](docs/Api/EmailSchedulingApi.md#getemailcampaignactivityschedule) | **GET** /emails/activities/{campaign_activity_id}/schedules | GET an Email Campaign Activity Schedule
*EmailSchedulingApi* | [**getEmailCampaignActivitySendHistory**](docs/Api/EmailSchedulingApi.md#getemailcampaignactivitysendhistory) | **GET** /emails/activities/{campaign_activity_id}/send_history | GET the Send History of an Email Campaign Activity
*EmailSchedulingApi* | [**scheduleEmailCampaignActivity**](docs/Api/EmailSchedulingApi.md#scheduleemailcampaignactivity) | **POST** /emails/activities/{campaign_activity_id}/schedules | POST (Create) an Email Campaign Activity Schedule
*EmailSchedulingApi* | [**testSendEmailCampaignActivity**](docs/Api/EmailSchedulingApi.md#testsendemailcampaignactivity) | **POST** /emails/activities/{campaign_activity_id}/tests | POST Test Send an Email Campaign Activity
*EmailSchedulingApi* | [**unscheduleEmailCampaignActivity**](docs/Api/EmailSchedulingApi.md#unscheduleemailcampaignactivity) | **DELETE** /emails/activities/{campaign_activity_id}/schedules | DELETE an Email Campaign Activity Schedule
*LandingPagesReportingApi* | [**getContactAdds**](docs/Api/LandingPagesReportingApi.md#getcontactadds) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_adds | GET a Unique Contacts Adds Landing Page Report
*LandingPagesReportingApi* | [**getContactOpens**](docs/Api/LandingPagesReportingApi.md#getcontactopens) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_contact_opens | GET a Contacts Opens Landing Page Report
*LandingPagesReportingApi* | [**getUniqueContactClicks**](docs/Api/LandingPagesReportingApi.md#getuniquecontactclicks) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_clicks | GET a Unique Contacts Clicks Landing Page Report
*LandingPagesReportingApi* | [**getUniqueContactOpens**](docs/Api/LandingPagesReportingApi.md#getuniquecontactopens) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_opens | GET a Unique Contacts Opens Landing Page Report
*LandingPagesReportingApi* | [**getUniqueContactSMSOptIns**](docs/Api/LandingPagesReportingApi.md#getuniquecontactsmsoptins) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_sms_optins | GET a Unique Contacts SMS Opt-In Landing Page Report
*LandingPagesReportingApi* | [**getUniqueContactUpdates**](docs/Api/LandingPagesReportingApi.md#getuniquecontactupdates) | **GET** /reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_updates | GET a Unique Contacts Updates Landing Page Report
*SMSReportingApi* | [**getAllBulkSmsCampaignSummaries**](docs/Api/SMSReportingApi.md#getallbulksmscampaignsummaries) | **GET** /reports/summary_reports/sms_campaign_summaries | GET an SMS Campaigns Summary Report
*SegmentsApi* | [**createSegment**](docs/Api/SegmentsApi.md#createsegment) | **POST** /segments | POST (create) a Segment
*SegmentsApi* | [**deleteSegment**](docs/Api/SegmentsApi.md#deletesegment) | **DELETE** /segments/{segment_id} | DELETE a Segment
*SegmentsApi* | [**getAllSegments**](docs/Api/SegmentsApi.md#getallsegments) | **GET** /segments | GET all Segments
*SegmentsApi* | [**getSegmentById**](docs/Api/SegmentsApi.md#getsegmentbyid) | **GET** /segments/{segment_id} | GET a Segment&#39;s Details
*SegmentsApi* | [**updateSegment**](docs/Api/SegmentsApi.md#updatesegment) | **PUT** /segments/{segment_id} | PUT (update) a Segment
*SegmentsApi* | [**updateSegmentName**](docs/Api/SegmentsApi.md#updatesegmentname) | **PATCH** /segments/{segment_id}/name | PATCH (rename) a Segment

## Models

- [ABTestData](docs/Model/ABTestData.md)
- [APIErrorSchemaInner](docs/Model/APIErrorSchemaInner.md)
- [AccessTokenResponse](docs/Model/AccessTokenResponse.md)
- [AccountCancellation](docs/Model/AccountCancellation.md)
- [AccountEmailCreateResponse](docs/Model/AccountEmailCreateResponse.md)
- [AccountEmailInput](docs/Model/AccountEmailInput.md)
- [AccountPhysicalAddress](docs/Model/AccountPhysicalAddress.md)
- [AccountSuspension](docs/Model/AccountSuspension.md)
- [Activities](docs/Model/Activities.md)
- [Activity](docs/Model/Activity.md)
- [ActivityDeleteCustomFields](docs/Model/ActivityDeleteCustomFields.md)
- [ActivityDeleteListResponse](docs/Model/ActivityDeleteListResponse.md)
- [ActivityDeleteListsResponse](docs/Model/ActivityDeleteListsResponse.md)
- [ActivityDeleteStatus](docs/Model/ActivityDeleteStatus.md)
- [ActivityErrors](docs/Model/ActivityErrors.md)
- [ActivityExportStatus](docs/Model/ActivityExportStatus.md)
- [ActivityGeneric](docs/Model/ActivityGeneric.md)
- [ActivityGenericStatus](docs/Model/ActivityGenericStatus.md)
- [ActivityImport](docs/Model/ActivityImport.md)
- [ActivityLinks](docs/Model/ActivityLinks.md)
- [ActivityListsMembership](docs/Model/ActivityListsMembership.md)
- [ActivityReference](docs/Model/ActivityReference.md)
- [ActivityStatus](docs/Model/ActivityStatus.md)
- [ActivityStatusExportLink](docs/Model/ActivityStatusExportLink.md)
- [ActivityStatusLink](docs/Model/ActivityStatusLink.md)
- [ActivityTagging](docs/Model/ActivityTagging.md)
- [ActivityTaggingStatus](docs/Model/ActivityTaggingStatus.md)
- [AddAccountEmailAddress201Response](docs/Model/AddAccountEmailAddress201Response.md)
- [AddAccountEmailAddressRequest](docs/Model/AddAccountEmailAddressRequest.md)
- [AuthorizationErrorSchema](docs/Model/AuthorizationErrorSchema.md)
- [BouncesTrackingActivitiesPage](docs/Model/BouncesTrackingActivitiesPage.md)
- [BouncesTrackingActivity](docs/Model/BouncesTrackingActivity.md)
- [BulkCampaignSummary](docs/Model/BulkCampaignSummary.md)
- [BulkEmailCampaignSummariesPage](docs/Model/BulkEmailCampaignSummariesPage.md)
- [BulkEmailCampaignSummariesPercents](docs/Model/BulkEmailCampaignSummariesPercents.md)
- [BulkEmailCampaignSummary](docs/Model/BulkEmailCampaignSummary.md)
- [BulkSmsCampaignSummariesPercents](docs/Model/BulkSmsCampaignSummariesPercents.md)
- [CampaignActivityStatsQueryResultEmail](docs/Model/CampaignActivityStatsQueryResultEmail.md)
- [CampaignActivityStatsResultGenericStatsEmailActivity](docs/Model/CampaignActivityStatsResultGenericStatsEmailActivity.md)
- [CampaignActivitySummary](docs/Model/CampaignActivitySummary.md)
- [CampaignStatsQueryResultEmail](docs/Model/CampaignStatsQueryResultEmail.md)
- [CampaignStatsResultGenericStatsEmailPercentsEmail](docs/Model/CampaignStatsResultGenericStatsEmailPercentsEmail.md)
- [ClicksTrackingActivitiesPage](docs/Model/ClicksTrackingActivitiesPage.md)
- [ClicksTrackingActivity](docs/Model/ClicksTrackingActivity.md)
- [CompanyLogo](docs/Model/CompanyLogo.md)
- [ContactCampaignActivitiesSummary](docs/Model/ContactCampaignActivitiesSummary.md)
- [ContactCreateOrUpdateInput](docs/Model/ContactCreateOrUpdateInput.md)
- [ContactCreateOrUpdateResponse](docs/Model/ContactCreateOrUpdateResponse.md)
- [ContactCustomField](docs/Model/ContactCustomField.md)
- [ContactDelete](docs/Model/ContactDelete.md)
- [ContactList](docs/Model/ContactList.md)
- [ContactListArray](docs/Model/ContactListArray.md)
- [ContactListPutPost](docs/Model/ContactListPutPost.md)
- [ContactOpenAndClickRates](docs/Model/ContactOpenAndClickRates.md)
- [ContactPostRequest](docs/Model/ContactPostRequest.md)
- [ContactPutRequest](docs/Model/ContactPutRequest.md)
- [ContactResource](docs/Model/ContactResource.md)
- [ContactResubscribeRequest](docs/Model/ContactResubscribeRequest.md)
- [ContactSmsChannel](docs/Model/ContactSmsChannel.md)
- [ContactSmsChannelConsents](docs/Model/ContactSmsChannelConsents.md)
- [ContactTrackingActivitiesPage](docs/Model/ContactTrackingActivitiesPage.md)
- [ContactTrackingActivity](docs/Model/ContactTrackingActivity.md)
- [ContactXref](docs/Model/ContactXref.md)
- [ContactXrefs](docs/Model/ContactXrefs.md)
- [Contacts](docs/Model/Contacts.md)
- [ContactsCounts](docs/Model/ContactsCounts.md)
- [ContactsExport](docs/Model/ContactsExport.md)
- [ContactsJsonImport](docs/Model/ContactsJsonImport.md)
- [CreateCSVImportActivity201Response](docs/Model/CreateCSVImportActivity201Response.md)
- [CreateCSVImportActivity201ResponseLinks](docs/Model/CreateCSVImportActivity201ResponseLinks.md)
- [CreateCSVImportActivity201ResponseStatus](docs/Model/CreateCSVImportActivity201ResponseStatus.md)
- [CreateContactRequest](docs/Model/CreateContactRequest.md)
- [CreateContactRequestEmailAddress](docs/Model/CreateContactRequestEmailAddress.md)
- [CreateDeleteActivity201Response](docs/Model/CreateDeleteActivity201Response.md)
- [CreateDeleteActivity201ResponseLinks](docs/Model/CreateDeleteActivity201ResponseLinks.md)
- [CreateDeleteActivity201ResponseLinksSelf](docs/Model/CreateDeleteActivity201ResponseLinksSelf.md)
- [CreateDeleteActivity201ResponseStatus](docs/Model/CreateDeleteActivity201ResponseStatus.md)
- [CreateDeleteActivityRequest](docs/Model/CreateDeleteActivityRequest.md)
- [CreateEmailCampaign200Response](docs/Model/CreateEmailCampaign200Response.md)
- [CreateEmailCampaign200ResponseCampaignActivitiesInner](docs/Model/CreateEmailCampaign200ResponseCampaignActivitiesInner.md)
- [CreateEmailCampaignRequest](docs/Model/CreateEmailCampaignRequest.md)
- [CreateEmailCampaignRequestEmailCampaignActivitiesInner](docs/Model/CreateEmailCampaignRequestEmailCampaignActivitiesInner.md)
- [CreateEmailCampaignRequestEmailCampaignActivitiesInnerPhysicalAddressInFooter](docs/Model/CreateEmailCampaignRequestEmailCampaignActivitiesInnerPhysicalAddressInFooter.md)
- [CreateExportActivity201Response](docs/Model/CreateExportActivity201Response.md)
- [CreateExportActivity201ResponseStatus](docs/Model/CreateExportActivity201ResponseStatus.md)
- [CreateExportActivityRequest](docs/Model/CreateExportActivityRequest.md)
- [CreateExportActivityRequestExclude](docs/Model/CreateExportActivityRequestExclude.md)
- [CreateImportJSONActivityRequest](docs/Model/CreateImportJSONActivityRequest.md)
- [CreateImportJSONActivityRequestImportDataInner](docs/Model/CreateImportJSONActivityRequestImportDataInner.md)
- [CreateListAddActivityRequest](docs/Model/CreateListAddActivityRequest.md)
- [CreateListAddActivityRequestExclude](docs/Model/CreateListAddActivityRequestExclude.md)
- [CreateListAddActivityRequestSource](docs/Model/CreateListAddActivityRequestSource.md)
- [CreateListDeleteActivity201Response](docs/Model/CreateListDeleteActivity201Response.md)
- [CreateListDeleteActivity201ResponseLinks](docs/Model/CreateListDeleteActivity201ResponseLinks.md)
- [CreateListDeleteActivity201ResponseLinksSelf](docs/Model/CreateListDeleteActivity201ResponseLinksSelf.md)
- [CreateListDeleteActivity201ResponseStatus](docs/Model/CreateListDeleteActivity201ResponseStatus.md)
- [CreateListDeleteActivityRequest](docs/Model/CreateListDeleteActivityRequest.md)
- [CreateListRemoveActivity201Response](docs/Model/CreateListRemoveActivity201Response.md)
- [CreateListRemoveActivity201ResponseStatus](docs/Model/CreateListRemoveActivity201ResponseStatus.md)
- [CreateListRemoveActivityRequest](docs/Model/CreateListRemoveActivityRequest.md)
- [CreateListRemoveActivityRequestExclude](docs/Model/CreateListRemoveActivityRequestExclude.md)
- [CreateListRemoveActivityRequestSource](docs/Model/CreateListRemoveActivityRequestSource.md)
- [CreateOrUpdateContact200Response](docs/Model/CreateOrUpdateContact200Response.md)
- [CreateOrUpdateContactCustomField](docs/Model/CreateOrUpdateContactCustomField.md)
- [CreateOrUpdateContactRequest](docs/Model/CreateOrUpdateContactRequest.md)
- [CreateOrUpdateContactRequestCustomFieldsInner](docs/Model/CreateOrUpdateContactRequestCustomFieldsInner.md)
- [CreateOrUpdateContactRequestStreetAddress](docs/Model/CreateOrUpdateContactRequestStreetAddress.md)
- [CreateResendEmailCampaign201Response](docs/Model/CreateResendEmailCampaign201Response.md)
- [CreateResendEmailCampaignRequest](docs/Model/CreateResendEmailCampaignRequest.md)
- [CreateSegment201Response](docs/Model/CreateSegment201Response.md)
- [CreateSegmentRequest](docs/Model/CreateSegmentRequest.md)
- [CreateTagDeleteActivityRequest](docs/Model/CreateTagDeleteActivityRequest.md)
- [CreateTagRemoveActivity201Response](docs/Model/CreateTagRemoveActivity201Response.md)
- [CreateTagRemoveActivity201ResponseLinks](docs/Model/CreateTagRemoveActivity201ResponseLinks.md)
- [CreateTagRemoveActivity201ResponseLinksResults](docs/Model/CreateTagRemoveActivity201ResponseLinksResults.md)
- [CreateTagRemoveActivity201ResponseLinksSelf](docs/Model/CreateTagRemoveActivity201ResponseLinksSelf.md)
- [CreateTagRemoveActivity201ResponseStatus](docs/Model/CreateTagRemoveActivity201ResponseStatus.md)
- [CreateTagRemoveActivityRequest](docs/Model/CreateTagRemoveActivityRequest.md)
- [CreateTagRemoveActivityRequestExclude](docs/Model/CreateTagRemoveActivityRequestExclude.md)
- [CreateTagRemoveActivityRequestSource](docs/Model/CreateTagRemoveActivityRequestSource.md)
- [CrossReference](docs/Model/CrossReference.md)
- [CrossReferenceResponse](docs/Model/CrossReferenceResponse.md)
- [CustomFieldId100](docs/Model/CustomFieldId100.md)
- [CustomFieldInput](docs/Model/CustomFieldInput.md)
- [CustomFieldResource](docs/Model/CustomFieldResource.md)
- [CustomFields](docs/Model/CustomFields.md)
- [Customer](docs/Model/Customer.md)
- [CustomerPut](docs/Model/CustomerPut.md)
- [DeleteList202Response](docs/Model/DeleteList202Response.md)
- [DeleteTag202Response](docs/Model/DeleteTag202Response.md)
- [DeleteTag202ResponseActivityErrorsInner](docs/Model/DeleteTag202ResponseActivityErrorsInner.md)
- [DeleteTag202ResponseLinks](docs/Model/DeleteTag202ResponseLinks.md)
- [DeleteTag202ResponseLinksSelf](docs/Model/DeleteTag202ResponseLinksSelf.md)
- [DeleteTag202ResponseStatus](docs/Model/DeleteTag202ResponseStatus.md)
- [DeviceFlowResponse](docs/Model/DeviceFlowResponse.md)
- [DidNotOpensTrackingActivitiesPage](docs/Model/DidNotOpensTrackingActivitiesPage.md)
- [DidNotOpensTrackingActivity](docs/Model/DidNotOpensTrackingActivity.md)
- [EmailAddress](docs/Model/EmailAddress.md)
- [EmailAddressPost](docs/Model/EmailAddressPost.md)
- [EmailAddressPut](docs/Model/EmailAddressPut.md)
- [EmailCampaign](docs/Model/EmailCampaign.md)
- [EmailCampaignActivity](docs/Model/EmailCampaignActivity.md)
- [EmailCampaignActivityInput](docs/Model/EmailCampaignActivityInput.md)
- [EmailCampaignActivityPreview](docs/Model/EmailCampaignActivityPreview.md)
- [EmailCampaignComplete](docs/Model/EmailCampaignComplete.md)
- [EmailCampaignName](docs/Model/EmailCampaignName.md)
- [EmailCampaigns](docs/Model/EmailCampaigns.md)
- [EmailLinkClickCount](docs/Model/EmailLinkClickCount.md)
- [EmailLinks](docs/Model/EmailLinks.md)
- [EmailPhysicalAddress](docs/Model/EmailPhysicalAddress.md)
- [EmailScheduleInput](docs/Model/EmailScheduleInput.md)
- [EmailTestSendInput](docs/Model/EmailTestSendInput.md)
- [EmailsLink](docs/Model/EmailsLink.md)
- [EmailsPagingLinks](docs/Model/EmailsPagingLinks.md)
- [FileObject](docs/Model/FileObject.md)
- [FileStatusArrayInner](docs/Model/FileStatusArrayInner.md)
- [ForwardsTrackingActivitiesPage](docs/Model/ForwardsTrackingActivitiesPage.md)
- [ForwardsTrackingActivity](docs/Model/ForwardsTrackingActivity.md)
- [GetABTestEmailCampaign200Response](docs/Model/GetABTestEmailCampaign200Response.md)
- [GetAccountDetails200Response](docs/Model/GetAccountDetails200Response.md)
- [GetAccountDetails200ResponseCompanyLogo](docs/Model/GetAccountDetails200ResponseCompanyLogo.md)
- [GetAccountDetails200ResponsePhysicalAddress](docs/Model/GetAccountDetails200ResponsePhysicalAddress.md)
- [GetActivityById200Response](docs/Model/GetActivityById200Response.md)
- [GetAllAccountEmailAddresses200ResponseInner](docs/Model/GetAllAccountEmailAddresses200ResponseInner.md)
- [GetAllActivities200Response](docs/Model/GetAllActivities200Response.md)
- [GetAllActivities200ResponseActivitiesInner](docs/Model/GetAllActivities200ResponseActivitiesInner.md)
- [GetAllActivities200ResponseActivitiesInnerLinks](docs/Model/GetAllActivities200ResponseActivitiesInnerLinks.md)
- [GetAllActivities200ResponseActivitiesInnerLinksResults](docs/Model/GetAllActivities200ResponseActivitiesInnerLinksResults.md)
- [GetAllActivities200ResponseActivitiesInnerLinksSelf](docs/Model/GetAllActivities200ResponseActivitiesInnerLinksSelf.md)
- [GetAllActivities200ResponseActivitiesInnerStatus](docs/Model/GetAllActivities200ResponseActivitiesInnerStatus.md)
- [GetAllActivities200ResponseLinks](docs/Model/GetAllActivities200ResponseLinks.md)
- [GetAllActivities200ResponseLinksNext](docs/Model/GetAllActivities200ResponseLinksNext.md)
- [GetAllBulkSmsCampaignSummaries200Response](docs/Model/GetAllBulkSmsCampaignSummaries200Response.md)
- [GetAllBulkSmsCampaignSummaries200ResponseAggregatePercents](docs/Model/GetAllBulkSmsCampaignSummaries200ResponseAggregatePercents.md)
- [GetAllBulkSmsCampaignSummaries200ResponseBulkSmsCampaignSummariesInner](docs/Model/GetAllBulkSmsCampaignSummaries200ResponseBulkSmsCampaignSummariesInner.md)
- [GetAllBulkSmsCampaignSummaries200ResponseBulkSmsCampaignSummariesInnerUniqueCounts](docs/Model/GetAllBulkSmsCampaignSummaries200ResponseBulkSmsCampaignSummariesInnerUniqueCounts.md)
- [GetAllBulkSmsCampaignSummaries200ResponseLinks](docs/Model/GetAllBulkSmsCampaignSummaries200ResponseLinks.md)
- [GetAllBulkSmsCampaignSummaries200ResponseLinksNext](docs/Model/GetAllBulkSmsCampaignSummaries200ResponseLinksNext.md)
- [GetAllContacts200Response](docs/Model/GetAllContacts200Response.md)
- [GetAllCustomFields200Response](docs/Model/GetAllCustomFields200Response.md)
- [GetAllEmailCampaigns200Response](docs/Model/GetAllEmailCampaigns200Response.md)
- [GetAllEmailCampaigns200ResponseCampaignsInner](docs/Model/GetAllEmailCampaigns200ResponseCampaignsInner.md)
- [GetAllEmailCampaigns200ResponseLinks](docs/Model/GetAllEmailCampaigns200ResponseLinks.md)
- [GetAllLists200Response](docs/Model/GetAllLists200Response.md)
- [GetAllSegments200Response](docs/Model/GetAllSegments200Response.md)
- [GetAllSegments200ResponseLinks](docs/Model/GetAllSegments200ResponseLinks.md)
- [GetAllSegments200ResponseLinksNext](docs/Model/GetAllSegments200ResponseLinksNext.md)
- [GetAllSegments200ResponseSegmentsInner](docs/Model/GetAllSegments200ResponseSegmentsInner.md)
- [GetAllTags200Response](docs/Model/GetAllTags200Response.md)
- [GetAllTags200ResponseLinks](docs/Model/GetAllTags200ResponseLinks.md)
- [GetAllTags200ResponseLinksNext](docs/Model/GetAllTags200ResponseLinksNext.md)
- [GetAllTags200ResponseLinksNextNext](docs/Model/GetAllTags200ResponseLinksNextNext.md)
- [GetBouncesReport200Response](docs/Model/GetBouncesReport200Response.md)
- [GetBouncesReport200ResponseLinks](docs/Model/GetBouncesReport200ResponseLinks.md)
- [GetBouncesReport200ResponseTrackingActivitiesInner](docs/Model/GetBouncesReport200ResponseTrackingActivitiesInner.md)
- [GetCampaignActivityLinkReport200Response](docs/Model/GetCampaignActivityLinkReport200Response.md)
- [GetCampaignActivityLinkReport200ResponseLinkClickCountsInner](docs/Model/GetCampaignActivityLinkReport200ResponseLinkClickCountsInner.md)
- [GetClicksReport200Response](docs/Model/GetClicksReport200Response.md)
- [GetClicksReport200ResponseLinks](docs/Model/GetClicksReport200ResponseLinks.md)
- [GetClicksReport200ResponseTrackingActivitiesInner](docs/Model/GetClicksReport200ResponseTrackingActivitiesInner.md)
- [GetContactAdds200Response](docs/Model/GetContactAdds200Response.md)
- [GetContactAdds200ResponseTrackingActivitiesInner](docs/Model/GetContactAdds200ResponseTrackingActivitiesInner.md)
- [GetContactById200Response](docs/Model/GetContactById200Response.md)
- [GetContactById200ResponseCustomFieldsInner](docs/Model/GetContactById200ResponseCustomFieldsInner.md)
- [GetContactById200ResponseEmailAddress](docs/Model/GetContactById200ResponseEmailAddress.md)
- [GetContactById200ResponseNotesInner](docs/Model/GetContactById200ResponseNotesInner.md)
- [GetContactById200ResponsePhoneNumbersInner](docs/Model/GetContactById200ResponsePhoneNumbersInner.md)
- [GetContactById200ResponseSmsChannel](docs/Model/GetContactById200ResponseSmsChannel.md)
- [GetContactById200ResponseSmsChannelSmsChannelConsentsInner](docs/Model/GetContactById200ResponseSmsChannelSmsChannelConsentsInner.md)
- [GetContactById200ResponseStreetAddressesInner](docs/Model/GetContactById200ResponseStreetAddressesInner.md)
- [GetContactCounts200Response](docs/Model/GetContactCounts200Response.md)
- [GetContactIdXrefs200Response](docs/Model/GetContactIdXrefs200Response.md)
- [GetContactIdXrefs200ResponseXrefsInner](docs/Model/GetContactIdXrefs200ResponseXrefsInner.md)
- [GetContactOpenClickRateReport200Response](docs/Model/GetContactOpenClickRateReport200Response.md)
- [GetContactTrackingCountReport200Response](docs/Model/GetContactTrackingCountReport200Response.md)
- [GetContactTrackingCountReport200ResponseCampaignActivitiesInner](docs/Model/GetContactTrackingCountReport200ResponseCampaignActivitiesInner.md)
- [GetContactTrackingCountReport200ResponseLinks](docs/Model/GetContactTrackingCountReport200ResponseLinks.md)
- [GetContactTrackingReport200Response](docs/Model/GetContactTrackingReport200Response.md)
- [GetContactTrackingReport200ResponseLinks](docs/Model/GetContactTrackingReport200ResponseLinks.md)
- [GetContactTrackingReport200ResponseLinksNext](docs/Model/GetContactTrackingReport200ResponseLinksNext.md)
- [GetContactTrackingReport200ResponseTrackingActivitiesInner](docs/Model/GetContactTrackingReport200ResponseTrackingActivitiesInner.md)
- [GetCustomField200Response](docs/Model/GetCustomField200Response.md)
- [GetDidNotOpensReport200Response](docs/Model/GetDidNotOpensReport200Response.md)
- [GetDidNotOpensReport200ResponseTrackingActivitiesInner](docs/Model/GetDidNotOpensReport200ResponseTrackingActivitiesInner.md)
- [GetEmailCampaignActivity200Response](docs/Model/GetEmailCampaignActivity200Response.md)
- [GetEmailCampaignActivity200ResponseDocumentProperties](docs/Model/GetEmailCampaignActivity200ResponseDocumentProperties.md)
- [GetEmailCampaignActivity200ResponsePhysicalAddressInFooter](docs/Model/GetEmailCampaignActivity200ResponsePhysicalAddressInFooter.md)
- [GetEmailCampaignActivityPreview200Response](docs/Model/GetEmailCampaignActivityPreview200Response.md)
- [GetEmailCampaignActivityReport200Response](docs/Model/GetEmailCampaignActivityReport200Response.md)
- [GetEmailCampaignActivityReport200ResponseResultsInner](docs/Model/GetEmailCampaignActivityReport200ResponseResultsInner.md)
- [GetEmailCampaignActivityReport200ResponseResultsInnerStats](docs/Model/GetEmailCampaignActivityReport200ResponseResultsInnerStats.md)
- [GetEmailCampaignActivitySchedule200ResponseInner](docs/Model/GetEmailCampaignActivitySchedule200ResponseInner.md)
- [GetEmailCampaignActivitySendHistory200ResponseInner](docs/Model/GetEmailCampaignActivitySendHistory200ResponseInner.md)
- [GetEmailCampaignReport200Response](docs/Model/GetEmailCampaignReport200Response.md)
- [GetEmailCampaignReport200ResponseAggregatePercents](docs/Model/GetEmailCampaignReport200ResponseAggregatePercents.md)
- [GetEmailCampaignReport200ResponseBulkEmailCampaignSummariesInner](docs/Model/GetEmailCampaignReport200ResponseBulkEmailCampaignSummariesInner.md)
- [GetEmailCampaignReport200ResponseBulkEmailCampaignSummariesInnerUniqueCounts](docs/Model/GetEmailCampaignReport200ResponseBulkEmailCampaignSummariesInnerUniqueCounts.md)
- [GetEmailCampaignXrefs200Response](docs/Model/GetEmailCampaignXrefs200Response.md)
- [GetEmailCampaignXrefs200ResponseXrefsInner](docs/Model/GetEmailCampaignXrefs200ResponseXrefsInner.md)
- [GetEmailOpensReport200Response](docs/Model/GetEmailOpensReport200Response.md)
- [GetEmailOpensReport200ResponseTrackingActivitiesInner](docs/Model/GetEmailOpensReport200ResponseTrackingActivitiesInner.md)
- [GetEmailSendsReport200Response](docs/Model/GetEmailSendsReport200Response.md)
- [GetEmailSendsReport200ResponseLinks](docs/Model/GetEmailSendsReport200ResponseLinks.md)
- [GetEmailSendsReport200ResponseTrackingActivitiesInner](docs/Model/GetEmailSendsReport200ResponseTrackingActivitiesInner.md)
- [GetEmailStatsReport200Response](docs/Model/GetEmailStatsReport200Response.md)
- [GetEmailStatsReport200ResponseErrorsInner](docs/Model/GetEmailStatsReport200ResponseErrorsInner.md)
- [GetEmailStatsReport200ResponseResultsInner](docs/Model/GetEmailStatsReport200ResponseResultsInner.md)
- [GetEmailStatsReport200ResponseResultsInnerPercents](docs/Model/GetEmailStatsReport200ResponseResultsInnerPercents.md)
- [GetEmailStatsReport200ResponseResultsInnerStats](docs/Model/GetEmailStatsReport200ResponseResultsInnerStats.md)
- [GetForwardsReport200Response](docs/Model/GetForwardsReport200Response.md)
- [GetForwardsReport200ResponseTrackingActivitiesInner](docs/Model/GetForwardsReport200ResponseTrackingActivitiesInner.md)
- [GetList200Response](docs/Model/GetList200Response.md)
- [GetListIdXrefs200Response](docs/Model/GetListIdXrefs200Response.md)
- [GetListIdXrefs200ResponseXrefsInner](docs/Model/GetListIdXrefs200ResponseXrefsInner.md)
- [GetOptoutsReport200Response](docs/Model/GetOptoutsReport200Response.md)
- [GetOptoutsReport200ResponseTrackingActivitiesInner](docs/Model/GetOptoutsReport200ResponseTrackingActivitiesInner.md)
- [GetResendEmailCampaign200ResponseInner](docs/Model/GetResendEmailCampaign200ResponseInner.md)
- [GetSmsEngagementHistory200ResponseInner](docs/Model/GetSmsEngagementHistory200ResponseInner.md)
- [GetSmsEngagementHistory200ResponseInnerHistoryDetails](docs/Model/GetSmsEngagementHistory200ResponseInnerHistoryDetails.md)
- [GetTag200Response](docs/Model/GetTag200Response.md)
- [GetUniqueContactClicks200Response](docs/Model/GetUniqueContactClicks200Response.md)
- [GetUniqueContactClicks200ResponseLinks](docs/Model/GetUniqueContactClicks200ResponseLinks.md)
- [GetUniqueContactClicks200ResponseLinksNext](docs/Model/GetUniqueContactClicks200ResponseLinksNext.md)
- [GetUniqueContactClicks200ResponseTrackingActivitiesInner](docs/Model/GetUniqueContactClicks200ResponseTrackingActivitiesInner.md)
- [GetUniqueContactClicks200ResponseTrackingActivitiesInnerSmsChannel](docs/Model/GetUniqueContactClicks200ResponseTrackingActivitiesInnerSmsChannel.md)
- [GetUniqueContactOpens200Response](docs/Model/GetUniqueContactOpens200Response.md)
- [GetUniqueContactOpens200ResponseTrackingActivitiesInner](docs/Model/GetUniqueContactOpens200ResponseTrackingActivitiesInner.md)
- [GetUniqueContactSMSOptIns200Response](docs/Model/GetUniqueContactSMSOptIns200Response.md)
- [GetUniqueContactSMSOptIns200ResponseTrackingActivitiesInner](docs/Model/GetUniqueContactSMSOptIns200ResponseTrackingActivitiesInner.md)
- [GetUniqueContactUpdates200Response](docs/Model/GetUniqueContactUpdates200Response.md)
- [GetUniqueContactUpdates200ResponseTrackingActivitiesInner](docs/Model/GetUniqueContactUpdates200ResponseTrackingActivitiesInner.md)
- [GetUserPrivileges200ResponseInner](docs/Model/GetUserPrivileges200ResponseInner.md)
- [HeadersObject](docs/Model/HeadersObject.md)
- [HistoryDetails](docs/Model/HistoryDetails.md)
- [JmmlSmsChannel](docs/Model/JmmlSmsChannel.md)
- [JmmlSmsChannelConsents](docs/Model/JmmlSmsChannelConsents.md)
- [JmmlSmsChannelSmsChannelConsentsInner](docs/Model/JmmlSmsChannelSmsChannelConsentsInner.md)
- [JsonImportContact](docs/Model/JsonImportContact.md)
- [Link](docs/Model/Link.md)
- [Links](docs/Model/Links.md)
- [ListActivityAddContacts](docs/Model/ListActivityAddContacts.md)
- [ListActivityRemoveContacts](docs/Model/ListActivityRemoveContacts.md)
- [ListIdList100](docs/Model/ListIdList100.md)
- [ListInput](docs/Model/ListInput.md)
- [ListXref](docs/Model/ListXref.md)
- [ListXrefs](docs/Model/ListXrefs.md)
- [LpreportingLinks](docs/Model/LpreportingLinks.md)
- [LpreportingNext](docs/Model/LpreportingNext.md)
- [MyLibraryFileCollectionInner](docs/Model/MyLibraryFileCollectionInner.md)
- [MyLibraryFileCollectionInnerThumbnail](docs/Model/MyLibraryFileCollectionInnerThumbnail.md)
- [Next](docs/Model/Next.md)
- [Note](docs/Model/Note.md)
- [OAuthError](docs/Model/OAuthError.md)
- [OpensTrackingActivitiesPage](docs/Model/OpensTrackingActivitiesPage.md)
- [OpensTrackingActivity](docs/Model/OpensTrackingActivity.md)
- [OptoutsTrackingActivitiesPage](docs/Model/OptoutsTrackingActivitiesPage.md)
- [OptoutsTrackingActivity](docs/Model/OptoutsTrackingActivity.md)
- [PContactAddTrackingActivitiesPage](docs/Model/PContactAddTrackingActivitiesPage.md)
- [PContactAddTrackingActivity](docs/Model/PContactAddTrackingActivity.md)
- [PContactClickTrackingActivitiesPage](docs/Model/PContactClickTrackingActivitiesPage.md)
- [PContactClickTrackingActivity](docs/Model/PContactClickTrackingActivity.md)
- [PContactOpenTrackingActivity](docs/Model/PContactOpenTrackingActivity.md)
- [PContactOpensTrackingActivitiesPage](docs/Model/PContactOpensTrackingActivitiesPage.md)
- [PContactSMSOptInTrackingActivitiesPage](docs/Model/PContactSMSOptInTrackingActivitiesPage.md)
- [PContactSMSOptInTrackingActivity](docs/Model/PContactSMSOptInTrackingActivity.md)
- [PContactUpdateTrackingActivitiesPage](docs/Model/PContactUpdateTrackingActivitiesPage.md)
- [PContactUpdateTrackingActivity](docs/Model/PContactUpdateTrackingActivity.md)
- [PagedEmailCampaignResponse](docs/Model/PagedEmailCampaignResponse.md)
- [PaginationLinks](docs/Model/PaginationLinks.md)
- [PaginationLinksNext](docs/Model/PaginationLinksNext.md)
- [PagingLinks](docs/Model/PagingLinks.md)
- [PartnerAccount](docs/Model/PartnerAccount.md)
- [PartnerAccountLinks](docs/Model/PartnerAccountLinks.md)
- [PartnerAccountOperationsRequest](docs/Model/PartnerAccountOperationsRequest.md)
- [PartnerAccountOperationsRequestAccountOperationHeadersInner](docs/Model/PartnerAccountOperationsRequestAccountOperationHeadersInner.md)
- [PartnerAccountOperationsRequestAccountOperationPathParametersInner](docs/Model/PartnerAccountOperationsRequestAccountOperationPathParametersInner.md)
- [PartnerAccountOperationsRequestAccountOperationQueryParametersInner](docs/Model/PartnerAccountOperationsRequestAccountOperationQueryParametersInner.md)
- [PartnerAccountSiteOwnerListInner](docs/Model/PartnerAccountSiteOwnerListInner.md)
- [PartnersLink](docs/Model/PartnersLink.md)
- [PatchEmailCampaignNameRequest](docs/Model/PatchEmailCampaignNameRequest.md)
- [PathParamObject](docs/Model/PathParamObject.md)
- [PercentsEmail](docs/Model/PercentsEmail.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PhoneNumberPut](docs/Model/PhoneNumberPut.md)
- [PlanInfo](docs/Model/PlanInfo.md)
- [PlanTiersObject](docs/Model/PlanTiersObject.md)
- [PlanTiersObjectCurrentTiersInner](docs/Model/PlanTiersObjectCurrentTiersInner.md)
- [PostCustomFieldDelete201Response](docs/Model/PostCustomFieldDelete201Response.md)
- [PostCustomFieldDeleteRequest](docs/Model/PostCustomFieldDeleteRequest.md)
- [PostTagRequest](docs/Model/PostTagRequest.md)
- [Provision](docs/Model/Provision.md)
- [ProvisionResponse](docs/Model/ProvisionResponse.md)
- [PutTagRequest](docs/Model/PutTagRequest.md)
- [QueryParamObject](docs/Model/QueryParamObject.md)
- [ReportingLinks](docs/Model/ReportingLinks.md)
- [ReportingNext](docs/Model/ReportingNext.md)
- [ReportingsmsLinks](docs/Model/ReportingsmsLinks.md)
- [ReportingsmsNext](docs/Model/ReportingsmsNext.md)
- [ResendToNonOpenersInput](docs/Model/ResendToNonOpenersInput.md)
- [ResendToNonOpenersObject](docs/Model/ResendToNonOpenersObject.md)
- [ResubscribeContactRequest](docs/Model/ResubscribeContactRequest.md)
- [SSOUser](docs/Model/SSOUser.md)
- [ScheduleEmailCampaignActivityRequest](docs/Model/ScheduleEmailCampaignActivityRequest.md)
- [SegmentData](docs/Model/SegmentData.md)
- [SegmentDetail](docs/Model/SegmentDetail.md)
- [SegmentMaster](docs/Model/SegmentMaster.md)
- [SegmentName](docs/Model/SegmentName.md)
- [SegmentsDTO](docs/Model/SegmentsDTO.md)
- [SendsTrackingActivitiesPage](docs/Model/SendsTrackingActivitiesPage.md)
- [SendsTrackingActivity](docs/Model/SendsTrackingActivity.md)
- [SmsCampaignSummariesPage](docs/Model/SmsCampaignSummariesPage.md)
- [SmsChannelConsentDetails](docs/Model/SmsChannelConsentDetails.md)
- [StatsEmail](docs/Model/StatsEmail.md)
- [StatsEmailActivity](docs/Model/StatsEmailActivity.md)
- [StatsError](docs/Model/StatsError.md)
- [StreetAddress](docs/Model/StreetAddress.md)
- [StreetAddressPut](docs/Model/StreetAddressPut.md)
- [Tag](docs/Model/Tag.md)
- [TagAddRemoveContacts](docs/Model/TagAddRemoveContacts.md)
- [TagIdList500Limit](docs/Model/TagIdList500Limit.md)
- [TagPost](docs/Model/TagPost.md)
- [TagPut](docs/Model/TagPut.md)
- [Tags](docs/Model/Tags.md)
- [TagsActivityLinks](docs/Model/TagsActivityLinks.md)
- [TagsLinks](docs/Model/TagsLinks.md)
- [TagsPagingLinks](docs/Model/TagsPagingLinks.md)
- [TestSendEmailCampaignActivityRequest](docs/Model/TestSendEmailCampaignActivityRequest.md)
- [TierObject](docs/Model/TierObject.md)
- [TrackingActivitySmsChannelDTO](docs/Model/TrackingActivitySmsChannelDTO.md)
- [UniqueEmailCounts](docs/Model/UniqueEmailCounts.md)
- [UniqueSmsCounts](docs/Model/UniqueSmsCounts.md)
- [UpdateAccountRequest](docs/Model/UpdateAccountRequest.md)
- [UpdateContactRequest](docs/Model/UpdateContactRequest.md)
- [UpdateContactRequestEmailAddress](docs/Model/UpdateContactRequestEmailAddress.md)
- [UpdateContactRequestPhoneNumbersInner](docs/Model/UpdateContactRequestPhoneNumbersInner.md)
- [UpdateContactRequestSmsChannel](docs/Model/UpdateContactRequestSmsChannel.md)
- [UpdateContactRequestSmsChannelSmsChannelConsentsInner](docs/Model/UpdateContactRequestSmsChannelSmsChannelConsentsInner.md)
- [UpdateContactRequestStreetAddressesInner](docs/Model/UpdateContactRequestStreetAddressesInner.md)
- [UpdateCustomFieldRequest](docs/Model/UpdateCustomFieldRequest.md)
- [UpdateList200Response](docs/Model/UpdateList200Response.md)
- [UpdateListRequest](docs/Model/UpdateListRequest.md)
- [UpdateSegmentNameRequest](docs/Model/UpdateSegmentNameRequest.md)
- [WebhooksSubscriptionBody](docs/Model/WebhooksSubscriptionBody.md)
- [WebhooksSubscriptionCollectionInner](docs/Model/WebhooksSubscriptionCollectionInner.md)
- [WebhooksSubscriptionPutResp](docs/Model/WebhooksSubscriptionPutResp.md)
- [WebhooksSubscriptionResponse](docs/Model/WebhooksSubscriptionResponse.md)
- [WebhooksTestSend](docs/Model/WebhooksTestSend.md)

## Authorization

Authentication schemes defined for the API:
### oauth2_access_code

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://authz.constantcontact.com/oauth2/default/v1/authorize`
- **Scopes**:
- **contact_data**: Read or modify contact data.
- **campaign_data**: Read or modify email campaign data.
- **account_read**: Read account data.
- **account_update**: Modify account data.

## Author

webservices@constantcontact.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.169`
    - Package version: `1.3.0`
- Generator version: `7.2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`