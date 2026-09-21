# ServiceGroups

## Overview

A service group is a set of service levels grouped together. 
Rates at checkout uses services groups to present available shipping options to customers in their shopping basket.

### Available Operations

* [list](#list) - List all service groups
* [create](#create) - Create a new service group
* [update](#update) - Update an existing service group
* [delete](#delete) - Delete a service group

## list

Returns a list of service group objects.

### Example Usage

<!-- UsageSnippet language="php" operationID="ListServiceGroups" method="get" path="/service-groups" -->
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



$response = $sdk->serviceGroups->list(

);

if ($response->serviceGroupListResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |

### Response

**[?array](../../.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## create

Creates a new service group.

### Example Usage

<!-- UsageSnippet language="php" operationID="CreateServiceGroup" method="post" path="/service-groups" -->
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

$serviceGroupCreateRequest = new Components\ServiceGroupCreateRequest(
    description: 'USPS shipping options',
    flatRate: '5',
    flatRateCurrency: 'USD',
    freeShippingThresholdCurrency: 'USD',
    freeShippingThresholdMin: '5',
    name: 'USPS Shipping',
    rateAdjustment: 15,
    type: Components\ServiceGroupTypeEnum::FlatRate,
    serviceLevels: [],
);

$response = $sdk->serviceGroups->create(
    serviceGroupCreateRequest: $serviceGroupCreateRequest
);

if ($response->serviceGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `serviceGroupCreateRequest`                                                                                                                             | [Components\ServiceGroupCreateRequest](../../Models/Components/ServiceGroupCreateRequest.md)                                                            | :heavy_check_mark:                                                                                                                                      | N/A                                                                                                                                                     |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |

### Response

**[?Components\ServiceGroup](../../Models/Components/ServiceGroup.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## update

Updates an existing service group object. The object_id cannot be updated as it is the unique identifier for the object.

### Example Usage

<!-- UsageSnippet language="php" operationID="UpdateServiceGroup" method="put" path="/service-groups" -->
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

$serviceGroupUpdateRequest = new Components\ServiceGroupUpdateRequest(
    description: 'USPS shipping options',
    flatRate: '5',
    flatRateCurrency: 'USD',
    freeShippingThresholdCurrency: 'USD',
    freeShippingThresholdMin: '5',
    name: 'USPS Shipping',
    rateAdjustment: 15,
    type: Components\ServiceGroupTypeEnum::FlatRate,
    objectId: '80feb1633d4a43c898f005850',
    isActive: true,
    serviceLevels: [
        new Components\ServiceGroupAccountAndServiceLevel(
            accountObjectId: '80feb1633d4a43c898f0058506cfd82d',
            serviceLevelToken: 'ups_next_day_air_saver',
        ),
    ],
);

$response = $sdk->serviceGroups->update(
    serviceGroupUpdateRequest: $serviceGroupUpdateRequest
);

if ($response->serviceGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |
| `serviceGroupUpdateRequest`                                                                                                                             | [?Components\ServiceGroupUpdateRequest](../../Models/Components/ServiceGroupUpdateRequest.md)                                                           | :heavy_minus_sign:                                                                                                                                      | N/A                                                                                                                                                     |                                                                                                                                                         |

### Response

**[?Components\ServiceGroup](../../Models/Components/ServiceGroup.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## delete

Deletes an existing service group using an object ID.

### Example Usage

<!-- UsageSnippet language="php" operationID="DeleteServiceGroup" method="delete" path="/service-groups/{ServiceGroupId}" -->
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



$response = $sdk->serviceGroups->delete(
    serviceGroupId: '<id>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `serviceGroupId`                                                                                                                                        | *string*                                                                                                                                                | :heavy_check_mark:                                                                                                                                      | Object ID of the service group                                                                                                                          |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |