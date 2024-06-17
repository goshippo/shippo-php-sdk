# ShippoAccounts


## Overview

Shippo Accounts are used by Shippo Platform Accounts to create and manage Managed Shippo Accounts. 
Managed Shippo Accounts are headless accounts that represent your customers. They are opaque to your end customers, meaning customers do not need to create their own Shippo login or have a billing relationship with Shippo. 
They can be used by marketplaces, e-commerce platforms, and third-party logistics providers who want to offer, seamless, built-in shipping functionality to their customers. 
<SchemaDefinition schemaRef="#/components/schemas/ShippoAccount"/>

### Available Operations

* [list](#list) - List all Shippo Accounts
* [create](#create) - Create a Shippo Account
* [get](#get) - Retrieve a Shippo Account
* [update](#update) - Update a Shippo Account

## list

Returns a list of Shippo Accounts objects

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
    

    $response = $sdk->shippoAccounts->list(768578, 99895, '2018-02-08');

    if ($response->shippoAccountPaginatedList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `page`                                               | *int*                                                | :heavy_minus_sign:                                   | The page number you want to select                   |                                                      |
| `results`                                            | *int*                                                | :heavy_minus_sign:                                   | The number of results to return per page (max 100)   |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\ListShippoAccountsResponse](../../Models/Operations/ListShippoAccountsResponse.md)**


## create

Creates a Shippo Account object

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
        $shippoAccountUpdateRequest = new Components\ShippoAccountUpdateRequest();
    $shippoAccountUpdateRequest->email = 'hippo@shippo.com';
    $shippoAccountUpdateRequest->firstName = 'Shippo';
    $shippoAccountUpdateRequest->lastName = 'Meister';
    $shippoAccountUpdateRequest->companyName = 'Acme';

    $response = $sdk->shippoAccounts->create($shippoAccountUpdateRequest, '2018-02-08');

    if ($response->shippoAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       | Example                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `shippoAccountUpdateRequest`                                                                                      | [\Shippo\API\Models\Components\ShippoAccountUpdateRequest](../../Models/Components/ShippoAccountUpdateRequest.md) | :heavy_check_mark:                                                                                                | N/A                                                                                                               |                                                                                                                   |
| `shippoApiVersion`                                                                                                | *string*                                                                                                          | :heavy_minus_sign:                                                                                                | String used to pick a non-default API version to use                                                              | 2018-02-08                                                                                                        |


### Response

**[?\Shippo\API\Models\Operations\CreateShippoAccountResponse](../../Models/Operations/CreateShippoAccountResponse.md)**


## get

Returns a Shippo Account using an object ID

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
    

    $response = $sdk->shippoAccounts->get('<value>', '2018-02-08');

    if ($response->shippoAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `shippoAccountId`                                    | *string*                                             | :heavy_check_mark:                                   | Object ID of the ShippoAccount                       |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\GetShippoAccountResponse](../../Models/Operations/GetShippoAccountResponse.md)**


## update

Updates a Shippo Account object

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
        $shippoAccountUpdateRequest = new Components\ShippoAccountUpdateRequest();
    $shippoAccountUpdateRequest->email = 'hippo@shippo.com';
    $shippoAccountUpdateRequest->firstName = 'Shippo';
    $shippoAccountUpdateRequest->lastName = 'Meister';
    $shippoAccountUpdateRequest->companyName = 'Acme';

    $response = $sdk->shippoAccounts->update('<value>', '2018-02-08', $shippoAccountUpdateRequest);

    if ($response->shippoAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       | Example                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `shippoAccountId`                                                                                                 | *string*                                                                                                          | :heavy_check_mark:                                                                                                | Object ID of the ShippoAccount                                                                                    |                                                                                                                   |
| `shippoApiVersion`                                                                                                | *string*                                                                                                          | :heavy_minus_sign:                                                                                                | String used to pick a non-default API version to use                                                              | 2018-02-08                                                                                                        |
| `shippoAccountUpdateRequest`                                                                                      | [\Shippo\API\Models\Components\ShippoAccountUpdateRequest](../../Models/Components/ShippoAccountUpdateRequest.md) | :heavy_minus_sign:                                                                                                | N/A                                                                                                               |                                                                                                                   |


### Response

**[?\Shippo\API\Models\Operations\UpdateShippoAccountResponse](../../Models/Operations/UpdateShippoAccountResponse.md)**

