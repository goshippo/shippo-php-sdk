# ShippoAccounts
(*shippoAccounts*)

## Overview

Shippo Accounts are used by Shippo Platform Accounts to create and manage Managed Shippo Accounts. 
Managed Shippo Accounts are headless accounts that represent your customers. They are opaque to your end customers, meaning customers do not need to create their own Shippo login or have a billing relationship with Shippo. 
They can be used by marketplaces, e-commerce platforms, and third-party logistics providers who want to offer, seamless, built-in shipping functionality to their customers. See our <a href="https://docs.goshippo.com/docs/platformaccounts/platform_accounts/">guide</a> for more details.
<SchemaDefinition schemaRef="#/components/schemas/ShippoAccount"/>

### Available Operations

* [list](#list) - List all Shippo Accounts
* [create](#create) - Create a Shippo Account
* [get](#get) - Retrieve a Shippo Account
* [update](#update) - Update a Shippo Account

## list

Returns a list of Shippo Managed Accounts objects.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();



$response = $sdk->shippoAccounts->list(
    page: 1,
    results: 25,
    shippoApiVersion: '2018-02-08'

);

if ($response->shippoAccountPaginatedList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `page`                                                                                                                                                             | *?int*                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                 | The page number you want to select                                                                                                                                 |                                                                                                                                                                    |
| `results`                                                                                                                                                          | *?int*                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                 | The number of results to return per page (max 100)                                                                                                                 |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Operations\ListShippoAccountsResponse](../../Models/Operations/ListShippoAccountsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## create

Creates a new <a href="https://docs.goshippo.com/docs/platformaccounts/platform_using_accounts/">Shippo Managed Account</a>.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();

$shippoAccountUpdateRequest = new Components\ShippoAccountUpdateRequest(
    email: 'hippo@shippo.com',
    firstName: 'Shippo',
    lastName: 'Meister',
    companyName: 'Acme',
);

$response = $sdk->shippoAccounts->create(
    shippoAccountUpdateRequest: $shippoAccountUpdateRequest,
    shippoApiVersion: '2018-02-08'

);

if ($response->shippoAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `shippoAccountUpdateRequest`                                                                                                                                       | [Components\ShippoAccountUpdateRequest](../../Models/Components/ShippoAccountUpdateRequest.md)                                                                     | :heavy_check_mark:                                                                                                                                                 | N/A                                                                                                                                                                |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Operations\CreateShippoAccountResponse](../../Models/Operations/CreateShippoAccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## get

Returns a Shippo Managed Account using an object ID.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();



$response = $sdk->shippoAccounts->get(
    shippoAccountId: '<id>',
    shippoApiVersion: '2018-02-08'

);

if ($response->shippoAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `shippoAccountId`                                                                                                                                                  | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the ShippoAccount                                                                                                                                     |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Operations\GetShippoAccountResponse](../../Models/Operations/GetShippoAccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## update

Updates a Shippo Managed Account using an object ID.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();

$shippoAccountUpdateRequest = new Components\ShippoAccountUpdateRequest(
    email: 'hippo@shippo.com',
    firstName: 'Shippo',
    lastName: 'Meister',
    companyName: 'Acme',
);

$response = $sdk->shippoAccounts->update(
    shippoAccountId: '<id>',
    shippoApiVersion: '2018-02-08',
    shippoAccountUpdateRequest: $shippoAccountUpdateRequest

);

if ($response->shippoAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `shippoAccountId`                                                                                                                                                  | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the ShippoAccount                                                                                                                                     |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |
| `shippoAccountUpdateRequest`                                                                                                                                       | [?Components\ShippoAccountUpdateRequest](../../Models/Components/ShippoAccountUpdateRequest.md)                                                                    | :heavy_minus_sign:                                                                                                                                                 | N/A                                                                                                                                                                |                                                                                                                                                                    |

### Response

**[?Operations\UpdateShippoAccountResponse](../../Models/Operations/UpdateShippoAccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |