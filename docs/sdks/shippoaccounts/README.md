# ShippoAccounts

## Overview

Shippo Accounts are used by Shippo Platform Accounts to create and manage Managed Shippo Accounts. 
Managed Shippo Accounts are headless accounts that represent your customers. They are opaque to your end customers, meaning customers do not need to create their own Shippo login or have a billing relationship with Shippo. 
They can be used by marketplaces, e-commerce platforms, and third-party logistics providers who want to offer, seamless, built-in shipping functionality to their customers. See our [guide](https://docs.goshippo.com/docs/platformaccounts/platform_accounts/) for more details.

### Available Operations

* [list](#list) - List all Shippo Accounts
* [create](#create) - Create a Shippo Account
* [get](#get) - Retrieve a Shippo Account
* [update](#update) - Update a Shippo Account

## list

Returns a list of Shippo Managed Accounts objects.

### Example Usage

<!-- UsageSnippet language="php" operationID="ListShippoAccounts" method="get" path="/shippo-accounts" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->shippoAccounts->list(
    page: 1,
    results: 25

);

if ($response->shippoAccountPaginatedList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `page`                                                                                                                                                  | *?int*                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                      | The page number you want to select                                                                                                                      |                                                                                                                                                         |
| `results`                                                                                                                                               | *?int*                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                      | The number of results to return per page (max 100)                                                                                                      |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |

### Response

**[?Components\ShippoAccountPaginatedList](../../Models/Components/ShippoAccountPaginatedList.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## create

Creates a new [Shippo Managed Account](https://docs.goshippo.com/docs/platformaccounts/platform_using_accounts/).

### Example Usage

<!-- UsageSnippet language="php" operationID="CreateShippoAccount" method="post" path="/shippo-accounts" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$shippoAccountUpdateRequest = new Components\ShippoAccountUpdateRequest(
    email: 'hippo@shippo.com',
    firstName: 'Shippo',
    lastName: 'Meister',
    companyName: 'Acme',
);

$response = $sdk->shippoAccounts->create(
    shippoAccountUpdateRequest: $shippoAccountUpdateRequest
);

if ($response->shippoAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `shippoAccountUpdateRequest`                                                                                                                            | [Components\ShippoAccountUpdateRequest](../../Models/Components/ShippoAccountUpdateRequest.md)                                                          | :heavy_check_mark:                                                                                                                                      | N/A                                                                                                                                                     |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |

### Response

**[?Components\ShippoAccount](../../Models/Components/ShippoAccount.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## get

Returns a Shippo Managed Account using an object ID.

### Example Usage

<!-- UsageSnippet language="php" operationID="GetShippoAccount" method="get" path="/shippo-accounts/{ShippoAccountId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->shippoAccounts->get(
    shippoAccountId: '<id>'
);

if ($response->shippoAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `shippoAccountId`                                                                                                                                       | *string*                                                                                                                                                | :heavy_check_mark:                                                                                                                                      | Object ID of the ShippoAccount                                                                                                                          |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |

### Response

**[?Components\ShippoAccount](../../Models/Components/ShippoAccount.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## update

Updates a Shippo Managed Account using an object ID.

### Example Usage

<!-- UsageSnippet language="php" operationID="UpdateShippoAccount" method="put" path="/shippo-accounts/{ShippoAccountId}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$shippoAccountUpdateRequest = new Components\ShippoAccountUpdateRequest(
    email: 'hippo@shippo.com',
    firstName: 'Shippo',
    lastName: 'Meister',
    companyName: 'Acme',
);

$response = $sdk->shippoAccounts->update(
    shippoAccountId: '<id>',
    shippoAccountUpdateRequest: $shippoAccountUpdateRequest

);

if ($response->shippoAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `shippoAccountId`                                                                                                                                       | *string*                                                                                                                                                | :heavy_check_mark:                                                                                                                                      | Object ID of the ShippoAccount                                                                                                                          |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |
| `shippoAccountUpdateRequest`                                                                                                                            | [?Components\ShippoAccountUpdateRequest](../../Models/Components/ShippoAccountUpdateRequest.md)                                                         | :heavy_minus_sign:                                                                                                                                      | N/A                                                                                                                                                     |                                                                                                                                                         |

### Response

**[?Components\ShippoAccount](../../Models/Components/ShippoAccount.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |