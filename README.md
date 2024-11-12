# shippo/api

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg" style="width: 100px; height: 28px;" />
    </a>
</div>


## 🏗 **Welcome to your new SDK!** 🏗

It has been generated successfully based on your OpenAPI spec. However, it is not yet ready for production use. Here are some next steps:
- [ ] 🛠 Make your SDK feel handcrafted by [customizing it](https://www.speakeasyapi.dev/docs/customize-sdks)
- [ ] ♻️ Refine your SDK quickly by iterating locally with the [Speakeasy CLI](https://github.com/speakeasy-api/speakeasy)
- [ ] 🎁 Publish your SDK to package managers by [configuring automatic publishing](https://www.speakeasyapi.dev/docs/advanced-setup/publish-sdks)
- [ ] ✨ When ready to productionize, delete this section from the README

<!-- Start Summary [summary] -->
## Summary

Shippo external API.: Use this API to integrate with the Shippo service
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents

* [SDK Installation](#sdk-installation)
* [SDK Example Usage](#sdk-example-usage)
* [Available Resources and Operations](#available-resources-and-operations)
* [Error Handling](#error-handling)
* [Server Selection](#server-selection)
<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/goshippo/shippo-php-sdk.git"
        }
    ],
    "require": {
        "shippo/api": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();



$response = $sdk->addresses->list(
    page: 1,
    results: 5,
    shippoApiVersion: '2018-02-08'

);

if ($response->addressPaginatedList !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

### [addresses](docs/sdks/addresses/README.md)

* [list](docs/sdks/addresses/README.md#list) - List all addresses
* [create](docs/sdks/addresses/README.md#create) - Create a new address
* [get](docs/sdks/addresses/README.md#get) - Retrieve an address
* [validate](docs/sdks/addresses/README.md#validate) - Validate an address

### [batches](docs/sdks/batches/README.md)

* [create](docs/sdks/batches/README.md#create) - Create a batch
* [get](docs/sdks/batches/README.md#get) - Retrieve a batch
* [addShipments](docs/sdks/batches/README.md#addshipments) - Add shipments to a batch
* [purchase](docs/sdks/batches/README.md#purchase) - Purchase a batch
* [removeShipments](docs/sdks/batches/README.md#removeshipments) - Remove shipments from a batch

### [carrierAccounts](docs/sdks/carrieraccounts/README.md)

* [list](docs/sdks/carrieraccounts/README.md#list) - List all carrier accounts
* [create](docs/sdks/carrieraccounts/README.md#create) - Create a new carrier account
* [get](docs/sdks/carrieraccounts/README.md#get) - Retrieve a carrier account
* [update](docs/sdks/carrieraccounts/README.md#update) - Update a carrier account
* [initiateOauth2Signin](docs/sdks/carrieraccounts/README.md#initiateoauth2signin) - Connect an existing carrier account using OAuth 2.0
* [register](docs/sdks/carrieraccounts/README.md#register) - Add a Shippo carrier account
* [getRegistrationStatus](docs/sdks/carrieraccounts/README.md#getregistrationstatus) - Get Carrier Registration status

### [carrierParcelTemplates](docs/sdks/carrierparceltemplates/README.md)

* [list](docs/sdks/carrierparceltemplates/README.md#list) - List all carrier parcel templates
* [get](docs/sdks/carrierparceltemplates/README.md#get) - Retrieve a carrier parcel templates

### [customsDeclarations](docs/sdks/customsdeclarations/README.md)

* [list](docs/sdks/customsdeclarations/README.md#list) - List all customs declarations
* [create](docs/sdks/customsdeclarations/README.md#create) - Create a new customs declaration
* [get](docs/sdks/customsdeclarations/README.md#get) - Retrieve a customs declaration

### [customsItems](docs/sdks/customsitems/README.md)

* [list](docs/sdks/customsitems/README.md#list) - List all customs items
* [create](docs/sdks/customsitems/README.md#create) - Create a new customs item
* [get](docs/sdks/customsitems/README.md#get) - Retrieve a customs item

### [manifests](docs/sdks/manifests/README.md)

* [list](docs/sdks/manifests/README.md#list) - List all manifests
* [create](docs/sdks/manifests/README.md#create) - Create a new manifest
* [get](docs/sdks/manifests/README.md#get) - Retrieve a manifest

### [orders](docs/sdks/orders/README.md)

* [list](docs/sdks/orders/README.md#list) - List all orders
* [create](docs/sdks/orders/README.md#create) - Create a new order
* [get](docs/sdks/orders/README.md#get) - Retrieve an order

### [parcels](docs/sdks/parcels/README.md)

* [list](docs/sdks/parcels/README.md#list) - List all parcels
* [create](docs/sdks/parcels/README.md#create) - Create a new parcel
* [get](docs/sdks/parcels/README.md#get) - Retrieve an existing parcel

### [pickups](docs/sdks/pickups/README.md)

* [create](docs/sdks/pickups/README.md#create) - Create a pickup

### [rates](docs/sdks/rates/README.md)

* [get](docs/sdks/rates/README.md#get) - Retrieve a rate
* [listShipmentRates](docs/sdks/rates/README.md#listshipmentrates) - Retrieve shipment rates
* [listShipmentRatesByCurrencyCode](docs/sdks/rates/README.md#listshipmentratesbycurrencycode) - Retrieve shipment rates in currency

### [ratesAtCheckout](docs/sdks/ratesatcheckout/README.md)

* [create](docs/sdks/ratesatcheckout/README.md#create) - Generate a live rates request
* [getDefaultParcelTemplate](docs/sdks/ratesatcheckout/README.md#getdefaultparceltemplate) - Show current default parcel template
* [updateDefaultParcelTemplate](docs/sdks/ratesatcheckout/README.md#updatedefaultparceltemplate) - Update default parcel template
* [deleteDefaultParcelTemplate](docs/sdks/ratesatcheckout/README.md#deletedefaultparceltemplate) - Clear current default parcel template

### [refunds](docs/sdks/refunds/README.md)

* [create](docs/sdks/refunds/README.md#create) - Create a refund
* [list](docs/sdks/refunds/README.md#list) - List all refunds
* [get](docs/sdks/refunds/README.md#get) - Retrieve a refund

### [serviceGroups](docs/sdks/servicegroups/README.md)

* [list](docs/sdks/servicegroups/README.md#list) - List all service groups
* [create](docs/sdks/servicegroups/README.md#create) - Create a new service group
* [update](docs/sdks/servicegroups/README.md#update) - Update an existing service group
* [delete](docs/sdks/servicegroups/README.md#delete) - Delete a service group

### [shipments](docs/sdks/shipments/README.md)

* [list](docs/sdks/shipments/README.md#list) - List all shipments
* [create](docs/sdks/shipments/README.md#create) - Create a new shipment
* [get](docs/sdks/shipments/README.md#get) - Retrieve a shipment

### [shippoAccounts](docs/sdks/shippoaccounts/README.md)

* [list](docs/sdks/shippoaccounts/README.md#list) - List all Shippo Accounts
* [create](docs/sdks/shippoaccounts/README.md#create) - Create a Shippo Account
* [get](docs/sdks/shippoaccounts/README.md#get) - Retrieve a Shippo Account
* [update](docs/sdks/shippoaccounts/README.md#update) - Update a Shippo Account


### [trackingStatus](docs/sdks/trackingstatus/README.md)

* [create](docs/sdks/trackingstatus/README.md#create) - Register a tracking webhook
* [get](docs/sdks/trackingstatus/README.md#get) - Get a tracking status

### [transactions](docs/sdks/transactions/README.md)

* [list](docs/sdks/transactions/README.md#list) - List all shipping labels
* [create](docs/sdks/transactions/README.md#create) - Create a shipping label
* [get](docs/sdks/transactions/README.md#get) - Retrieve a shipping label

### [userParcelTemplates](docs/sdks/userparceltemplates/README.md)

* [list](docs/sdks/userparceltemplates/README.md#list) - List all user parcel templates
* [create](docs/sdks/userparceltemplates/README.md#create) - Create a new user parcel template
* [delete](docs/sdks/userparceltemplates/README.md#delete) - Delete a user parcel template
* [get](docs/sdks/userparceltemplates/README.md#get) - Retrieves a user parcel template
* [update](docs/sdks/userparceltemplates/README.md#update) - Update an existing user parcel template

### [webhooks](docs/sdks/webhooks/README.md)

* [createWebhook](docs/sdks/webhooks/README.md#createwebhook) - Create a new webhook
* [listWebhooks](docs/sdks/webhooks/README.md#listwebhooks) - List all webhooks
* [getWebhook](docs/sdks/webhooks/README.md#getwebhook) - Retrieve a specific webhook
* [updateWebhook](docs/sdks/webhooks/README.md#updatewebhook) - Update an existing webhook
* [deleteWebhook](docs/sdks/webhooks/README.md#deletewebhook) - Delete a specific webhook

</details>
<!-- End Available Resources and Operations [operations] -->

<!-- Start Error Handling [errors] -->
## Error Handling

Handling errors in this SDK should largely match your expectations. All operations return a response object or throw an exception.

By default an API error will raise a `Errors\SDKException` exception, which has the following properties:

| Property       | Type                                    | Description           |
|----------------|-----------------------------------------|-----------------------|
| `$message`     | *string*                                | The error message     |
| `$statusCode`  | *int*                                   | The HTTP status code  |
| `$rawResponse` | *?\Psr\Http\Message\ResponseInterface*  | The raw HTTP response |
| `$body`        | *string*                                | The response content  |

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `initiateOauth2Signin` method throws the following exceptions:

| Error Type                                                     | Status Code | Content Type     |
| -------------------------------------------------------------- | ----------- | ---------------- |
| Errors\InitiateOauth2SigninResponseBody                        | 400         | application/json |
| Errors\InitiateOauth2SigninCarrierAccountsResponseBody         | 401         | application/json |
| Errors\InitiateOauth2SigninCarrierAccountsResponseResponseBody | 404         | application/json |
| Errors\SDKException                                            | 4XX, 5XX    | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();

try {
    $response = $sdk->carrierAccounts->initiateOauth2Signin(
        carrierAccountObjectId: '<id>',
        redirectUri: 'https://enlightened-mortise.com/',
        state: 'Louisiana',
        shippoApiVersion: '2018-02-08'

    );

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Errors\InitiateOauth2SigninResponseBodyThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\InitiateOauth2SigninCarrierAccountsResponseBodyThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\InitiateOauth2SigninCarrierAccountsResponseResponseBodyThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\SDKException $e) {
    // handle default exception
    throw $e;
}
```
<!-- End Error Handling [errors] -->

<!-- Start Server Selection [server] -->
## Server Selection

### Override Server URL Per-Client

The default server can also be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setServerURL("https://api.goshippo.com")
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();



$response = $sdk->addresses->list(
    page: 1,
    results: 5,
    shippoApiVersion: '2018-02-08'

);

if ($response->addressPaginatedList !== null) {
    // handle response
}
```
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
