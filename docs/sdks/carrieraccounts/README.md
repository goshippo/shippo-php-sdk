# CarrierAccounts


## Overview

Carriers are the companies who deliver your package. Shippo uses Carrier account objects as credentials to retrieve shipping rates and purchase labels from shipping Carriers.

<SchemaDefinition schemaRef="#/components/schemas/CarrierAccount"/>

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

Additionally, you can get information about the service levels associated with each carrier account by passing in the `?service_levels=true` query parameter. <br>
Using it appends the property `service_levels` to each carrier account. <br>
By default, if the query parameter is omitted, the `service_levels` property will not be included in the response.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Shippo\API;
use \Shippo\API\Models\Components;
use \Shippo\API\Models\Operations;

$security = new Components\Security();
$security->apiKeyHeader = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();

try {
        $request = new Operations\ListCarrierAccountsRequest();
    $request->serviceLevels = false;
    $request->carrier = Components\CarriersEnum::Posti;
    $request->accountId = '<value>';
    $request->page = 99895;
    $request->results = 547272;;

    $response = $sdk->carrierAccounts->list($request);

    if ($response->carrierAccountPaginatedList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Shippo\API\Models\Operations\ListCarrierAccountsRequest](../../Models/Operations/ListCarrierAccountsRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Shippo\API\Models\Operations\ListCarrierAccountsResponse](../../Models/Operations/ListCarrierAccountsResponse.md)**


## create

Creates a new carrier account or connects an existing carrier account to the Shippo account.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Shippo\API;
use \Shippo\API\Models\Components;
use \Shippo\API\Models\Operations;

$security = new Components\Security();
$security->apiKeyHeader = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();

try {
        $connectExistingOwnAccountRequest = new Components\ConnectExistingOwnAccountRequest();
    $connectExistingOwnAccountRequest->accountId = '321123';
    $connectExistingOwnAccountRequest->active = false;
    $connectExistingOwnAccountRequest->carrier = 'fedex';
    $connectExistingOwnAccountRequest->metadata = 'FEDEX Account';
    $connectExistingOwnAccountRequest->parameters = '<value>';
    $connectExistingOwnAccountRequest->test = false;

    $response = $sdk->carrierAccounts->create($connectExistingOwnAccountRequest, '2018-02-08');

    if ($response->carrierAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   | Example                                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `connectExistingOwnAccountRequest`                                                                                            | [\Shippo\API\Models\Components\ConnectExistingOwnAccountRequest](../../Models/Components/ConnectExistingOwnAccountRequest.md) | :heavy_check_mark:                                                                                                            | Examples.                                                                                                                     |                                                                                                                               |
| `shippoApiVersion`                                                                                                            | *string*                                                                                                                      | :heavy_minus_sign:                                                                                                            | String used to pick a non-default API version to use                                                                          | 2018-02-08                                                                                                                    |


### Response

**[?\Shippo\API\Models\Operations\CreateCarrierAccountResponse](../../Models/Operations/CreateCarrierAccountResponse.md)**


## get

Returns an existing carrier account using an object ID.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Shippo\API;
use \Shippo\API\Models\Components;
use \Shippo\API\Models\Operations;

$security = new Components\Security();
$security->apiKeyHeader = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();

try {
    

    $response = $sdk->carrierAccounts->get('<value>', '2018-02-08');

    if ($response->carrierAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `carrierAccountId`                                   | *string*                                             | :heavy_check_mark:                                   | Object ID of the carrier account                     |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\GetCarrierAccountResponse](../../Models/Operations/GetCarrierAccountResponse.md)**


## update

Updates an existing carrier account object. The account_id and carrier can't be updated. This is because they form the unique identifier together.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Shippo\API;
use \Shippo\API\Models\Components;
use \Shippo\API\Models\Operations;

$security = new Components\Security();
$security->apiKeyHeader = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();

try {
        $carrierAccountBase = new Components\CarrierAccountBase();
    $carrierAccountBase->accountId = '****';
    $carrierAccountBase->active = false;
    $carrierAccountBase->carrier = 'usps';
    $carrierAccountBase->parameters = '<value>';

    $response = $sdk->carrierAccounts->update('<value>', '2018-02-08', $carrierAccountBase);

    if ($response->carrierAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       | Example                                                                                           |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `carrierAccountId`                                                                                | *string*                                                                                          | :heavy_check_mark:                                                                                | Object ID of the carrier account                                                                  |                                                                                                   |
| `shippoApiVersion`                                                                                | *string*                                                                                          | :heavy_minus_sign:                                                                                | String used to pick a non-default API version to use                                              | 2018-02-08                                                                                        |
| `carrierAccountBase`                                                                              | [\Shippo\API\Models\Components\CarrierAccountBase](../../Models/Components/CarrierAccountBase.md) | :heavy_minus_sign:                                                                                | Examples.                                                                                         |                                                                                                   |


### Response

**[?\Shippo\API\Models\Operations\UpdateCarrierAccountResponse](../../Models/Operations/UpdateCarrierAccountResponse.md)**


## initiateOauth2Signin

Used by client applications to setup or reconnect an existing carrier account with carriers that support OAuth 2.0

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Shippo\API;
use \Shippo\API\Models\Components;
use \Shippo\API\Models\Operations;

$security = new Components\Security();
$security->apiKeyHeader = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();

try {
    

    $response = $sdk->carrierAccounts->initiateOauth2Signin('<value>', 'http://fine-cummerbund.biz', '<value>', '2018-02-08');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                      | Type                                                                                                                                                                                                           | Required                                                                                                                                                                                                       | Description                                                                                                                                                                                                    | Example                                                                                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `carrierAccountObjectId`                                                                                                                                                                                       | *string*                                                                                                                                                                                                       | :heavy_check_mark:                                                                                                                                                                                             | The carrier account ID (UUID) to start a signin process.                                                                                                                                                       |                                                                                                                                                                                                                |
| `redirectUri`                                                                                                                                                                                                  | *string*                                                                                                                                                                                                       | :heavy_check_mark:                                                                                                                                                                                             | Callback URL. The URL that tells the authorization server where to send the user back to after they approve the request.                                                                                       |                                                                                                                                                                                                                |
| `state`                                                                                                                                                                                                        | *string*                                                                                                                                                                                                       | :heavy_minus_sign:                                                                                                                                                                                             | A random string generated by the consuming application and included in the request to prevent CSRF attacks. The consuming application checks that the same value is returned after the user authorizes Shippo. |                                                                                                                                                                                                                |
| `shippoApiVersion`                                                                                                                                                                                             | *string*                                                                                                                                                                                                       | :heavy_minus_sign:                                                                                                                                                                                             | String used to pick a non-default API version to use                                                                                                                                                           | 2018-02-08                                                                                                                                                                                                     |


### Response

**[?\Shippo\API\Models\Operations\InitiateOauth2SigninResponse](../../Models/Operations/InitiateOauth2SigninResponse.md)**


## register

Adds a Shippo carrier account

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Shippo\API;
use \Shippo\API\Models\Components;
use \Shippo\API\Models\Operations;

$security = new Components\Security();
$security->apiKeyHeader = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();

try {
    

    $response = $sdk->carrierAccounts->register('<value>', '2018-02-08');

    if ($response->carrierAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `requestBody`                                        | *mixed*                                              | :heavy_check_mark:                                   | Examples.                                            |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\RegisterCarrierAccountResponse](../../Models/Operations/RegisterCarrierAccountResponse.md)**


## getRegistrationStatus

Returns the registration status for the given account for the given carrier

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Shippo\API;
use \Shippo\API\Models\Components;
use \Shippo\API\Models\Operations;

$security = new Components\Security();
$security->apiKeyHeader = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();

try {
    

    $response = $sdk->carrierAccounts->getRegistrationStatus(Operations\Carrier::Usps, '2018-02-08');

    if ($response->carrierAccountRegistrationStatus !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                   | Type                                                                        | Required                                                                    | Description                                                                 | Example                                                                     |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `carrier`                                                                   | [\Shippo\API\Models\Operations\Carrier](../../Models/Operations/Carrier.md) | :heavy_check_mark:                                                          | filter by specific carrier                                                  |                                                                             |
| `shippoApiVersion`                                                          | *string*                                                                    | :heavy_minus_sign:                                                          | String used to pick a non-default API version to use                        | 2018-02-08                                                                  |


### Response

**[?\Shippo\API\Models\Operations\GetCarrierRegistrationStatusResponse](../../Models/Operations/GetCarrierRegistrationStatusResponse.md)**

