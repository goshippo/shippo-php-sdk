# CarrierAccounts
(*carrierAccounts*)

## Overview

Carriers are the companies who deliver your package. Shippo uses Carrier account objects as credentials to retrieve shipping rates and purchase labels from shipping Carriers.

<SchemaDefinition schemaRef="#/components/schemas/CarrierAccount"/>

### Available Operations

* [create](#create) - Create a new carrier account
* [get](#get) - Retrieve a carrier account
* [getRegistrationStatus](#getregistrationstatus) - Get Carrier Registration status
* [initiateOauth2Signin](#initiateoauth2signin) - Connect an existing carrier account using OAuth 2.0
* [list](#list) - List all carrier accounts
* [register](#register) - Add a Shippo carrier account
* [update](#update) - Update a carrier account

## create

Creates a new carrier account or connects an existing carrier account to the Shippo account.

### Example Usage

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

$connectExistingOwnAccountRequest = new Components\ConnectExistingOwnAccountRequest(
    accountId: '321123',
    carrier: 'fedex',
    parameters: new Components\FedExConnectExistingOwnAccountParameters(
        firstName: 'Loyal',
        lastName: 'Collier',
        phoneNumber: '(890) 307-8579',
        fromAddressSt: '<value>',
        fromAddressCity: '<value>',
        fromAddressState: '<value>',
        fromAddressZip: '<value>',
        fromAddressCountryIso2: '<value>',
    ),
    metadata: 'FEDEX Account',
    test: false,
);

$response = $sdk->carrierAccounts->create(
    connectExistingOwnAccountRequest: $connectExistingOwnAccountRequest,
    shippoApiVersion: '2018-02-08'

);

if ($response->carrierAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `connectExistingOwnAccountRequest`                                                                                                                                 | [Components\ConnectExistingOwnAccountRequest](../../Models/Components/ConnectExistingOwnAccountRequest.md)                                                         | :heavy_check_mark:                                                                                                                                                 | Examples.                                                                                                                                                          |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\CarrierAccount](../../Models/Components/CarrierAccount.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## get

Returns an existing carrier account using an object ID.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();



$response = $sdk->carrierAccounts->get(
    carrierAccountId: '<id>',
    shippoApiVersion: '2018-02-08'

);

if ($response->carrierAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `carrierAccountId`                                                                                                                                                 | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the carrier account                                                                                                                                   |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\CarrierAccount](../../Models/Components/CarrierAccount.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## getRegistrationStatus

Returns the registration status for the given account for the given carrier

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Operations;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();



$response = $sdk->carrierAccounts->getRegistrationStatus(
    carrier: Operations\Carrier::Usps,
    shippoApiVersion: '2018-02-08'

);

if ($response->carrierAccountRegistrationStatus !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `carrier`                                                                                                                                                          | [Operations\Carrier](../../Models/Operations/Carrier.md)                                                                                                           | :heavy_check_mark:                                                                                                                                                 | filter by specific carrier                                                                                                                                         |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\CarrierAccountRegistrationStatus](../../Models/Components/CarrierAccountRegistrationStatus.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## initiateOauth2Signin

Used by client applications to setup or reconnect an existing carrier account with carriers that support OAuth 2.0

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Operations;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();

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
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\InitiateOauth2SigninRequest](../../Models/Operations/InitiateOauth2SigninRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\InitiateOauth2SigninResponse](../../Models/Operations/InitiateOauth2SigninResponse.md)**

### Errors

| Error Type                                                     | Status Code                                                    | Content Type                                                   |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| Errors\InitiateOauth2SigninResponseBody                        | 400                                                            | application/json                                               |
| Errors\InitiateOauth2SigninCarrierAccountsResponseBody         | 401                                                            | application/json                                               |
| Errors\InitiateOauth2SigninCarrierAccountsResponseResponseBody | 404                                                            | application/json                                               |
| Errors\SDKError                                                | 4XX, 5XX                                                       | \*/\*                                                          |

## list

Returns a list of all carrier accounts connected to your Shippo account. These carrier accounts include both Shippo carrier accounts and your own carrier accounts that you have connected to your Shippo account.

Additionally, you can get information about the service levels associated with each carrier account by passing in the `?service_levels=true` query parameter. <br>
Using it appends the property `service_levels` to each carrier account. <br>
By default, if the query parameter is omitted, the `service_levels` property will not be included in the response.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Operations;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();

$request = new Operations\ListCarrierAccountsRequest();

$response = $sdk->carrierAccounts->list(
    request: $request
);

if ($response->carrierAccountPaginatedList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListCarrierAccountsRequest](../../Models/Operations/ListCarrierAccountsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Components\CarrierAccountPaginatedList](../../Models/Components/CarrierAccountPaginatedList.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## register

Adds a Shippo carrier account

### Example Usage

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



$response = $sdk->carrierAccounts->register(
    requestBody: new Components\CarrierAccountCorreosCreateRequest(
        parameters: new Components\CarrierAccountCorreosCreateRequestParameters(),
    ),
    shippoApiVersion: '2018-02-08'

);

if ($response->carrierAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Example                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `requestBody`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | [Components\CarrierAccountCanadaPostCreateRequest\|Components\CarrierAccountChronopostCreateRequest\|Components\CarrierAccountColissimoCreateRequest\|Components\CarrierAccountCorreosCreateRequest\|Components\CarrierAccountDeutschePostCreateRequest\|Components\CarrierAccountDHLExpressCreateRequest\|Components\CarrierAccountDpdDeCreateRequest\|Components\CarrierAccountDPDUKCreateRequest\|Components\CarrierAccountFedExCreateRequest\|Components\CarrierAccountHermesUKCreateRequest\|Components\CarrierAccountMondialRelayCreateRequest\|Components\CarrierAccountPosteItalianeCreateRequest\|Components\CarrierAccountUPSCreateRequest\|Components\CarrierAccountUSPSCreateRequest\|Components\CarrierAccountSendleCreateRequest](../../Models/Operations/RegisterCarrierAccountRequestBody.md) | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | The body of the request.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| `shippoApiVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | 2018-02-08                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |

### Response

**[?Components\CarrierAccount](../../Models/Components/CarrierAccount.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## update

Updates an existing carrier account object. The account_id and carrier can't be updated. This is because they form the unique identifier together.

### Example Usage

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

$carrierAccountBase = new Components\CarrierAccountBase(
    accountId: '****',
    carrier: 'usps',
    parameters: new Components\UPSConnectExistingOwnAccountParameters(
        accountNumber: '94567e',
        billingAddressCity: 'San Francisco',
        billingAddressCountryIso2: 'US',
        billingAddressState: 'CA',
        billingAddressStreet1: '731 Market St',
        billingAddressZip: '94103',
        collecCountryIso2: 'US',
        collecZip: '94103',
        company: 'Shippo',
        email: 'hippo@shippo.com',
        fullName: 'Shippo Meister',
        hasInvoice: false,
        phone: '1112223333',
        title: 'Manager',
        upsAgreements: false,
        aiaCountryIso2: 'US',
        billingAddressStreet2: 'STE 200',
        currencyCode: 'USD',
        invoiceControlid: '1234',
        invoiceDate: '20210529',
        invoiceNumber: '1112234',
        invoiceValue: '11.23',
    ),
);

$response = $sdk->carrierAccounts->update(
    carrierAccountId: '<id>',
    shippoApiVersion: '2018-02-08',
    carrierAccountBase: $carrierAccountBase

);

if ($response->carrierAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `carrierAccountId`                                                                                                                                                 | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the carrier account                                                                                                                                   |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |
| `carrierAccountBase`                                                                                                                                               | [?Components\CarrierAccountBase](../../Models/Components/CarrierAccountBase.md)                                                                                    | :heavy_minus_sign:                                                                                                                                                 | Examples.                                                                                                                                                          |                                                                                                                                                                    |

### Response

**[?Components\CarrierAccount](../../Models/Components/CarrierAccount.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |