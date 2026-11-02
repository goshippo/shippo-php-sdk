# CarrierAccounts

## Overview

Carriers are the companies who deliver your package. Shippo uses Carrier account objects as credentials to retrieve shipping rates and purchase labels from shipping Carriers.

### Available Operations

* [list](#list) - List all carrier accounts
* [create](#create) - Create a new carrier account
* [get](#get) - Retrieve a carrier account
* [update](#update) - Update a carrier account
* [initiateOauth2Signin](#initiateoauth2signin) - Connect an existing carrier account using OAuth 2.0
* [register](#register) - Add a Shippo carrier account
* [getRegistrationStatus](#getregistrationstatus) - Get Carrier Registration status

## list

Returns a list of all carrier accounts connected to your Shippo account. These carrier accounts include both Shippo carrier accounts and your own carrier accounts that you have connected to your Shippo account.

Additionally, you can get information about the service levels associated with each carrier account by passing in the `?service_levels=true` query parameter.
Using it appends the property `service_levels` to each carrier account.
By default, if the query parameter is omitted, the `service_levels` property will not be included in the response.

### Example Usage

<!-- UsageSnippet language="php" operationID="ListCarrierAccounts" method="get" path="/carrier_accounts" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Operations;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setShippoAccountId('<id>')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
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

## create

Creates a new carrier account or connects an existing carrier account to the Shippo account.

### Example Usage

<!-- UsageSnippet language="php" operationID="CreateCarrierAccount" method="post" path="/carrier_accounts" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setShippoAccountId('<id>')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$connectExistingOwnAccountRequest = new Components\ConnectExistingOwnAccountRequest(
    accountId: '321123',
    carrier: 'fedex',
    metadata: 'FEDEX Account',
    parameters: [
        'account_number' => '94567e',
        'aia_country_iso2' => 'US',
        'billing_address_city' => 'San Francisco',
        'billing_address_country_iso2' => 'US',
        'billing_address_state' => 'CA',
        'billing_address_street1' => '731 Market St',
        'billing_address_street2' => 'STE 200',
        'billing_address_zip' => '94103',
        'collec_country_iso2' => 'US',
        'collec_zip' => '94103',
        'company' => 'Shippo',
        'currency_code' => 'USD',
        'email' => 'hippo@shippo.com',
        'full_name' => 'Shippo Meister',
        'has_invoice' => true,
        'invoice_controlid' => '1234',
        'invoice_date' => '20210529',
        'invoice_number' => '1112234',
        'invoice_value' => '11.23',
        'phone' => '1112223333',
        'title' => 'Manager',
        'ups_agreements' => false,
    ],
    test: false,
);

$response = $sdk->carrierAccounts->create(
    connectExistingOwnAccountRequest: $connectExistingOwnAccountRequest
);

if ($response->carrierAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                               | Type                                                                                                                                                                                                                                                    | Required                                                                                                                                                                                                                                                | Description                                                                                                                                                                                                                                             | Example                                                                                                                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `connectExistingOwnAccountRequest`                                                                                                                                                                                                                      | [Components\ConnectExistingOwnAccountRequest](../../Models/Components/ConnectExistingOwnAccountRequest.md)                                                                                                                                              | :heavy_check_mark:                                                                                                                                                                                                                                      | Examples.                                                                                                                                                                                                                                               |                                                                                                                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                                                                                                                      | *?string*                                                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide.                                                                                                 | 2018-02-08                                                                                                                                                                                                                                              |
| `shippoAccountId`                                                                                                                                                                                                                                       | *?string*                                                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                      | Optional. The object ID of a Managed Shippo Account. Platform accounts set this to make the request on behalf of one of their managed accounts. See the [Platform accounts guide](https://docs.goshippo.com/platform-accounts/platform-using-accounts). |                                                                                                                                                                                                                                                         |

### Response

**[?Components\CarrierAccount](../../Models/Components/CarrierAccount.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## get

Returns an existing carrier account using an object ID.

### Example Usage

<!-- UsageSnippet language="php" operationID="GetCarrierAccount" method="get" path="/carrier_accounts/{CarrierAccountId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setShippoAccountId('<id>')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->carrierAccounts->get(
    carrierAccountId: '<id>'
);

if ($response->carrierAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                               | Type                                                                                                                                                                                                                                                    | Required                                                                                                                                                                                                                                                | Description                                                                                                                                                                                                                                             | Example                                                                                                                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `carrierAccountId`                                                                                                                                                                                                                                      | *string*                                                                                                                                                                                                                                                | :heavy_check_mark:                                                                                                                                                                                                                                      | Object ID of the carrier account                                                                                                                                                                                                                        |                                                                                                                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                                                                                                                      | *?string*                                                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide.                                                                                                 | 2018-02-08                                                                                                                                                                                                                                              |
| `shippoAccountId`                                                                                                                                                                                                                                       | *?string*                                                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                      | Optional. The object ID of a Managed Shippo Account. Platform accounts set this to make the request on behalf of one of their managed accounts. See the [Platform accounts guide](https://docs.goshippo.com/platform-accounts/platform-using-accounts). |                                                                                                                                                                                                                                                         |

### Response

**[?Components\CarrierAccount](../../Models/Components/CarrierAccount.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## update

Updates an existing carrier account object. The account_id and carrier can't be updated. This is because they form the unique identifier together.

### Example Usage

<!-- UsageSnippet language="php" operationID="UpdateCarrierAccount" method="put" path="/carrier_accounts/{CarrierAccountId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setShippoAccountId('<id>')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$carrierAccountBase = new Components\CarrierAccountBase(
    accountId: '****',
    carrier: 'usps',
    parameters: [
        'first_name' => 'Eldora',
        'last_name' => 'Weber',
        'phone_number' => '1-505-428-6798',
        'from_address_st' => '<value>',
        'from_address_city' => '<value>',
        'from_address_state' => '<value>',
        'from_address_zip' => '<value>',
        'from_address_country_iso2' => '<value>',
        'use_multi_factor_registration' => false,
        'verification_option' => 'EMAIL',
        'verification_invoice_amount' => '340',
        'verification_invoice_date' => '2024-03-09',
        'verification_invoice_currency' => 'USD',
    ],
);

$response = $sdk->carrierAccounts->update(
    carrierAccountId: '<id>',
    carrierAccountBase: $carrierAccountBase

);

if ($response->carrierAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                               | Type                                                                                                                                                                                                                                                    | Required                                                                                                                                                                                                                                                | Description                                                                                                                                                                                                                                             | Example                                                                                                                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `carrierAccountId`                                                                                                                                                                                                                                      | *string*                                                                                                                                                                                                                                                | :heavy_check_mark:                                                                                                                                                                                                                                      | Object ID of the carrier account                                                                                                                                                                                                                        |                                                                                                                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                                                                                                                      | *?string*                                                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide.                                                                                                 | 2018-02-08                                                                                                                                                                                                                                              |
| `shippoAccountId`                                                                                                                                                                                                                                       | *?string*                                                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                      | Optional. The object ID of a Managed Shippo Account. Platform accounts set this to make the request on behalf of one of their managed accounts. See the [Platform accounts guide](https://docs.goshippo.com/platform-accounts/platform-using-accounts). |                                                                                                                                                                                                                                                         |
| `carrierAccountBase`                                                                                                                                                                                                                                    | [?Components\CarrierAccountBase](../../Models/Components/CarrierAccountBase.md)                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                      | Examples.                                                                                                                                                                                                                                               |                                                                                                                                                                                                                                                         |

### Response

**[?Components\CarrierAccount](../../Models/Components/CarrierAccount.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## initiateOauth2Signin

Used by client applications to setup or reconnect an existing carrier account with carriers that support OAuth 2.0

### Example Usage

<!-- UsageSnippet language="php" operationID="InitiateOauth2Signin" method="get" path="/carrier_accounts/{CarrierAccountObjectId}/signin/initiate" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Operations;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setShippoAccountId('<id>')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\InitiateOauth2SigninRequest(
    carrierAccountObjectId: '<id>',
    redirectUri: 'https://ashamed-reporter.biz',
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
| Errors\InitiateOauth2SigninCarrierAccountsResponseResponseBody | 401                                                            | application/json                                               |
| Errors\InitiateOauth2SigninCarrierAccountsResponseBody         | 404                                                            | application/json                                               |
| Errors\SDKError                                                | 4XX, 5XX                                                       | \*/\*                                                          |

## register

Adds a Shippo carrier account

### Example Usage

<!-- UsageSnippet language="php" operationID="RegisterCarrierAccount" method="post" path="/carrier_accounts/register/new" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setShippoAccountId('<id>')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->carrierAccounts->register(
    requestBody: new Components\CarrierAccountDeutschePostCreateRequest(
        parameters: new Components\CarrierAccountDeutschePostCreateRequestParameters(),
    )
);

if ($response->carrierAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Example                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `requestBody`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | [Components\CarrierAccountCanadaPostCreateRequest\|Components\CarrierAccountChronopostCreateRequest\|Components\CarrierAccountColissimoCreateRequest\|Components\CarrierAccountCorreosCreateRequest\|Components\CarrierAccountDeutschePostCreateRequest\|Components\CarrierAccountDHLExpressCreateRequest\|Components\CarrierAccountDpdDeCreateRequest\|Components\CarrierAccountDPDUKCreateRequest\|Components\CarrierAccountFedExCreateRequest\|Components\CarrierAccountHermesUKCreateRequest\|Components\CarrierAccountMondialRelayCreateRequest\|Components\CarrierAccountPosteItalianeCreateRequest\|Components\CarrierAccountUPSCreateRequest\|Components\CarrierAccountUSPSCreateRequest\|Components\CarrierAccountRoyalMailCreateRequest\|Components\CarrierAccountRoyalMailSfCreateRequest](../../Models/Operations/RegisterCarrierAccountRequestBody.md) | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | The body of the request.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| `shippoApiVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | 2018-02-08                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| `shippoAccountId`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Optional. The object ID of a Managed Shippo Account. Platform accounts set this to make the request on behalf of one of their managed accounts. See the [Platform accounts guide](https://docs.goshippo.com/platform-accounts/platform-using-accounts).                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |

### Response

**[?Components\CarrierAccount](../../Models/Components/CarrierAccount.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## getRegistrationStatus

Returns the registration status for the given account for the given carrier

### Example Usage

<!-- UsageSnippet language="php" operationID="GetCarrierRegistrationStatus" method="get" path="/carrier_accounts/reg-status" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Operations;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setShippoAccountId('<id>')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->carrierAccounts->getRegistrationStatus(
    carrier: Operations\Carrier::Ups
);

if ($response->carrierAccountRegistrationStatus !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                               | Type                                                                                                                                                                                                                                                    | Required                                                                                                                                                                                                                                                | Description                                                                                                                                                                                                                                             | Example                                                                                                                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `carrier`                                                                                                                                                                                                                                               | [Operations\Carrier](../../Models/Operations/Carrier.md)                                                                                                                                                                                                | :heavy_check_mark:                                                                                                                                                                                                                                      | filter by specific carrier                                                                                                                                                                                                                              |                                                                                                                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                                                                                                                      | *?string*                                                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide.                                                                                                 | 2018-02-08                                                                                                                                                                                                                                              |
| `shippoAccountId`                                                                                                                                                                                                                                       | *?string*                                                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                      | Optional. The object ID of a Managed Shippo Account. Platform accounts set this to make the request on behalf of one of their managed accounts. See the [Platform accounts guide](https://docs.goshippo.com/platform-accounts/platform-using-accounts). |                                                                                                                                                                                                                                                         |

### Response

**[?Components\CarrierAccountRegistrationStatus](../../Models/Components/CarrierAccountRegistrationStatus.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |