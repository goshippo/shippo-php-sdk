# <img src="https://docs.goshippo.com/images/Logo.png" width="30" alt="Shippo logo"> Shippo PHP SDK

Shippo is a shipping API that connects you with [multiple shipping carriers](https://goshippo.com/carriers) (such as USPS, UPS, DHL, Canada Post, Australia Post, and many others) through one interface.

You must register for a [Shippo account](https://apps.goshippo.com/join) to use our API. It's free to sign up. Only pay to print a live label, test labels are free.

To use the API, you must generate an [API Token](https://docs.goshippo.com/docs/guides_general/authentication/). In the following examples, replace `<YOUR_API_KEY_HERE>` with your own token.

For example.

```
apiKeyHeader:"shippo_test_595d9cb0c0e14497bf07e75ecfec6c6d"
```


<!-- Start Summary [summary] -->
## Summary

Shippo external API.: Use this API to integrate with the Shippo service
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents
<!-- $toc-max-depth=2 -->
* [<img src="https://docs.goshippo.com/images/Logo.png" width="30" alt="Shippo logo"> Shippo PHP SDK](#img-srchttpsdocsgoshippocomimageslogopng-width30-altshippo-logo-shippo-php-sdk)
  * [SDK Installation](#sdk-installation)
  * [SDK Example Usage](#sdk-example-usage)
  * [Authentication](#authentication)
  * [Available Resources and Operations](#available-resources-and-operations)
  * [Error Handling](#error-handling)
  * [Server Selection](#server-selection)
* [Development](#development)
  * [Maturity](#maturity)
  * [Contributions](#contributions)
  * [About Shippo](#about-shippo)

<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK and add it as a dependency to an existing `composer.json` file:
```bash
composer require "shippo/shippo-php"
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->build();

$request = new Components\WebhookPayloadBatch();

$response = $sdk->batch(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->

<!-- Start Authentication [security] -->
## Authentication

### Per-Client Security Schemes

This SDK supports the following security scheme globally:

| Name           | Type   | Scheme  |
| -------------- | ------ | ------- |
| `apiKeyHeader` | apiKey | API key |

To authenticate with the API the `apiKeyHeader` parameter must be set when initializing the SDK. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();

$addressCreateRequest = new Components\AddressCreateRequest(
    country: 'US',
    name: 'Shwan Ippotle',
    company: 'Shippo',
    street1: '215 Clayton St.',
    street3: '',
    streetNo: '',
    city: 'San Francisco',
    state: 'CA',
    zip: '94117',
    phone: '+1 555 341 9393',
    email: 'shippotle@shippo.com',
    isResidential: true,
    metadata: 'Customer ID 123456',
    validate: true,
);

$response = $sdk->addresses->create(
    addressCreateRequest: $addressCreateRequest,
    shippoApiVersion: '2018-02-08'

);

if ($response->address !== null) {
    // handle response
}
```
<!-- End Authentication [security] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

### [addresses](docs/sdks/addresses/README.md)

* [create](docs/sdks/addresses/README.md#create) - Create a new address
* [get](docs/sdks/addresses/README.md#get) - Retrieve an address
* [list](docs/sdks/addresses/README.md#list) - List all addresses
* [validate](docs/sdks/addresses/README.md#validate) - Validate an address

### [batches](docs/sdks/batches/README.md)

* [addShipments](docs/sdks/batches/README.md#addshipments) - Add shipments to a batch
* [create](docs/sdks/batches/README.md#create) - Create a batch
* [get](docs/sdks/batches/README.md#get) - Retrieve a batch
* [purchase](docs/sdks/batches/README.md#purchase) - Purchase a batch
* [removeShipments](docs/sdks/batches/README.md#removeshipments) - Remove shipments from a batch

### [carrierAccounts](docs/sdks/carrieraccounts/README.md)

* [create](docs/sdks/carrieraccounts/README.md#create) - Create a new carrier account
* [get](docs/sdks/carrieraccounts/README.md#get) - Retrieve a carrier account
* [getRegistrationStatus](docs/sdks/carrieraccounts/README.md#getregistrationstatus) - Get Carrier Registration status
* [initiateOauth2Signin](docs/sdks/carrieraccounts/README.md#initiateoauth2signin) - Connect an existing carrier account using OAuth 2.0
* [list](docs/sdks/carrieraccounts/README.md#list) - List all carrier accounts
* [register](docs/sdks/carrieraccounts/README.md#register) - Add a Shippo carrier account
* [update](docs/sdks/carrieraccounts/README.md#update) - Update a carrier account

### [carrierParcelTemplates](docs/sdks/carrierparceltemplates/README.md)

* [get](docs/sdks/carrierparceltemplates/README.md#get) - Retrieve a carrier parcel templates
* [list](docs/sdks/carrierparceltemplates/README.md#list) - List all carrier parcel templates

### [customsDeclarations](docs/sdks/customsdeclarations/README.md)

* [create](docs/sdks/customsdeclarations/README.md#create) - Create a new customs declaration
* [get](docs/sdks/customsdeclarations/README.md#get) - Retrieve a customs declaration
* [list](docs/sdks/customsdeclarations/README.md#list) - List all customs declarations

### [customsItems](docs/sdks/customsitems/README.md)

* [create](docs/sdks/customsitems/README.md#create) - Create a new customs item
* [get](docs/sdks/customsitems/README.md#get) - Retrieve a customs item
* [list](docs/sdks/customsitems/README.md#list) - List all customs items

### [manifests](docs/sdks/manifests/README.md)

* [create](docs/sdks/manifests/README.md#create) - Create a new manifest
* [get](docs/sdks/manifests/README.md#get) - Retrieve a manifest
* [list](docs/sdks/manifests/README.md#list) - List all manifests

### [orders](docs/sdks/orders/README.md)

* [create](docs/sdks/orders/README.md#create) - Create a new order
* [get](docs/sdks/orders/README.md#get) - Retrieve an order
* [list](docs/sdks/orders/README.md#list) - List all orders

### [parcels](docs/sdks/parcels/README.md)

* [create](docs/sdks/parcels/README.md#create) - Create a new parcel
* [get](docs/sdks/parcels/README.md#get) - Retrieve an existing parcel
* [list](docs/sdks/parcels/README.md#list) - List all parcels

### [pickups](docs/sdks/pickups/README.md)

* [create](docs/sdks/pickups/README.md#create) - Create a pickup

### [rates](docs/sdks/rates/README.md)

* [get](docs/sdks/rates/README.md#get) - Retrieve a rate
* [listShipmentRates](docs/sdks/rates/README.md#listshipmentrates) - Retrieve shipment rates
* [listShipmentRatesByCurrencyCode](docs/sdks/rates/README.md#listshipmentratesbycurrencycode) - Retrieve shipment rates in currency

### [ratesAtCheckout](docs/sdks/ratesatcheckout/README.md)

* [create](docs/sdks/ratesatcheckout/README.md#create) - Generate a live rates request
* [deleteDefaultParcelTemplate](docs/sdks/ratesatcheckout/README.md#deletedefaultparceltemplate) - Clear current default parcel template
* [getDefaultParcelTemplate](docs/sdks/ratesatcheckout/README.md#getdefaultparceltemplate) - Show current default parcel template
* [updateDefaultParcelTemplate](docs/sdks/ratesatcheckout/README.md#updatedefaultparceltemplate) - Update default parcel template

### [refunds](docs/sdks/refunds/README.md)

* [create](docs/sdks/refunds/README.md#create) - Create a refund
* [get](docs/sdks/refunds/README.md#get) - Retrieve a refund
* [list](docs/sdks/refunds/README.md#list) - List all refunds

### [serviceGroups](docs/sdks/servicegroups/README.md)

* [create](docs/sdks/servicegroups/README.md#create) - Create a new service group
* [delete](docs/sdks/servicegroups/README.md#delete) - Delete a service group
* [list](docs/sdks/servicegroups/README.md#list) - List all service groups
* [update](docs/sdks/servicegroups/README.md#update) - Update an existing service group

### [shipments](docs/sdks/shipments/README.md)

* [create](docs/sdks/shipments/README.md#create) - Create a new shipment
* [get](docs/sdks/shipments/README.md#get) - Retrieve a shipment
* [list](docs/sdks/shipments/README.md#list) - List all shipments


### [shippoAccounts](docs/sdks/shippoaccounts/README.md)

* [create](docs/sdks/shippoaccounts/README.md#create) - Create a Shippo Account
* [get](docs/sdks/shippoaccounts/README.md#get) - Retrieve a Shippo Account
* [list](docs/sdks/shippoaccounts/README.md#list) - List all Shippo Accounts
* [update](docs/sdks/shippoaccounts/README.md#update) - Update a Shippo Account

### [trackingStatus](docs/sdks/trackingstatus/README.md)

* [create](docs/sdks/trackingstatus/README.md#create) - Register a tracking webhook
* [get](docs/sdks/trackingstatus/README.md#get) - Get a tracking status

### [transactions](docs/sdks/transactions/README.md)

* [create](docs/sdks/transactions/README.md#create) - Create a shipping label
* [get](docs/sdks/transactions/README.md#get) - Retrieve a shipping label
* [list](docs/sdks/transactions/README.md#list) - List all shipping labels

### [userParcelTemplates](docs/sdks/userparceltemplates/README.md)

* [create](docs/sdks/userparceltemplates/README.md#create) - Create a new user parcel template
* [delete](docs/sdks/userparceltemplates/README.md#delete) - Delete a user parcel template
* [get](docs/sdks/userparceltemplates/README.md#get) - Retrieves a user parcel template
* [list](docs/sdks/userparceltemplates/README.md#list) - List all user parcel templates
* [update](docs/sdks/userparceltemplates/README.md#update) - Update an existing user parcel template

### [webhooks](docs/sdks/webhooks/README.md)

* [createWebhook](docs/sdks/webhooks/README.md#createwebhook) - Create a new webhook
* [deleteWebhook](docs/sdks/webhooks/README.md#deletewebhook) - Delete a specific webhook
* [getWebhook](docs/sdks/webhooks/README.md#getwebhook) - Retrieve a specific webhook
* [listWebhooks](docs/sdks/webhooks/README.md#listwebhooks) - List all webhooks
* [updateWebhook](docs/sdks/webhooks/README.md#updatewebhook) - Update an existing webhook

</details>
<!-- End Available Resources and Operations [operations] -->

<!-- Start Error Handling [errors] -->
## Error Handling

Handling errors in this SDK should largely match your expectations. All operations return a response object or throw an exception.

By default an API error will raise a `Errors\SDKError` exception, which has the following properties:

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
| Errors\SDKError                                                | 4XX, 5XX    | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Errors;
use Shippo\API\Models\Operations;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();

try {
    $request = new Operations\InitiateOauth2SigninRequest(
        carrierAccountObjectId: '<id>',
        redirectUri: 'https://enlightened-mortise.com/',
    );

    $response = $sdk->carrierAccounts->initiateOauth2Signin(
        request: $request
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
} catch (Errors\SDKError $e) {
    // handle default exception
    throw $e;
}
```
<!-- End Error Handling [errors] -->

<!-- Start Server Selection [server] -->
## Server Selection

### Override Server URL Per-Client

The default server can be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;

$sdk = API\Shippo::builder()
    ->setServerURL('https://api.goshippo.com')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();

$addressCreateRequest = new Components\AddressCreateRequest(
    country: 'US',
    name: 'Shwan Ippotle',
    company: 'Shippo',
    street1: '215 Clayton St.',
    street3: '',
    streetNo: '',
    city: 'San Francisco',
    state: 'CA',
    zip: '94117',
    phone: '+1 555 341 9393',
    email: 'shippotle@shippo.com',
    isResidential: true,
    metadata: 'Customer ID 123456',
    validate: true,
);

$response = $sdk->addresses->create(
    addressCreateRequest: $addressCreateRequest,
    shippoApiVersion: '2018-02-08'

);

if ($response->address !== null) {
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

## About Shippo
Connect with multiple different carriers, get discounted shipping labels, track parcels, and much more with just one integration. You can use your own carrier accounts or take advantage of our discounted rates with the Shippo carrier accounts. Using Shippo makes it easy to deal with multiple carrier integrations, rate shopping, tracking and other parts of the shipping workflow. We provide the API and web app for all your shipping needs.
