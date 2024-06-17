# ServiceGroups


## Overview

A service group is a set of service levels grouped together. 
Rates at checkout uses services groups to present available shipping options to customers in their shopping basket.
<SchemaDefinition schemaRef="#/components/schemas/ServiceGroup"/>

### Available Operations

* [list](#list) - List all service groups
* [create](#create) - Create a new service group
* [update](#update) - Update an existing service group
* [delete](#delete) - Delete a service group

## list

Returns a list of service group objects.

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
    

    $response = $sdk->serviceGroups->list('2018-02-08');

    if ($response->serviceGroupListResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\ListServiceGroupsResponse](../../Models/Operations/ListServiceGroupsResponse.md)**


## create

Creates a new service group.

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
        $serviceGroupCreateRequest = new Components\ServiceGroupCreateRequest();
    $serviceGroupCreateRequest->description = 'USPS shipping options';
    $serviceGroupCreateRequest->flatRate = '5';
    $serviceGroupCreateRequest->flatRateCurrency = 'USD';
    $serviceGroupCreateRequest->freeShippingThresholdCurrency = 'USD';
    $serviceGroupCreateRequest->freeShippingThresholdMin = '5';
    $serviceGroupCreateRequest->name = 'USPS Shipping';
    $serviceGroupCreateRequest->rateAdjustment = 15;
    $serviceGroupCreateRequest->type = Components\ServiceGroupTypeEnum::FlatRate;
    $serviceGroupCreateRequest->serviceLevels = [
        new Components\ServiceGroupAccountAndServiceLevel(),
    ];

    $response = $sdk->serviceGroups->create($serviceGroupCreateRequest, '2018-02-08');

    if ($response->serviceGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     | Example                                                                                                         |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `serviceGroupCreateRequest`                                                                                     | [\Shippo\API\Models\Components\ServiceGroupCreateRequest](../../Models/Components/ServiceGroupCreateRequest.md) | :heavy_check_mark:                                                                                              | N/A                                                                                                             |                                                                                                                 |
| `shippoApiVersion`                                                                                              | *string*                                                                                                        | :heavy_minus_sign:                                                                                              | String used to pick a non-default API version to use                                                            | 2018-02-08                                                                                                      |


### Response

**[?\Shippo\API\Models\Operations\CreateServiceGroupResponse](../../Models/Operations/CreateServiceGroupResponse.md)**


## update

Updates an existing service group object. <br>The object_id cannot be updated as it is the unique identifier for the object.

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
        $serviceGroupUpdateRequest = new Components\ServiceGroupUpdateRequest();
    $serviceGroupUpdateRequest->description = 'USPS shipping options';
    $serviceGroupUpdateRequest->flatRate = '5';
    $serviceGroupUpdateRequest->flatRateCurrency = 'USD';
    $serviceGroupUpdateRequest->freeShippingThresholdCurrency = 'USD';
    $serviceGroupUpdateRequest->freeShippingThresholdMin = '5';
    $serviceGroupUpdateRequest->name = 'USPS Shipping';
    $serviceGroupUpdateRequest->rateAdjustment = 15;
    $serviceGroupUpdateRequest->type = Components\ServiceGroupTypeEnum::FlatRate;
    $serviceGroupUpdateRequest->objectId = '80feb1633d4a43c898f005850';
    $serviceGroupUpdateRequest->isActive = true;
    $serviceGroupUpdateRequest->serviceLevels = [
        new Components\ServiceGroupAccountAndServiceLevel(),
    ];

    $response = $sdk->serviceGroups->update('2018-02-08', $serviceGroupUpdateRequest);

    if ($response->serviceGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     | Example                                                                                                         |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `shippoApiVersion`                                                                                              | *string*                                                                                                        | :heavy_minus_sign:                                                                                              | String used to pick a non-default API version to use                                                            | 2018-02-08                                                                                                      |
| `serviceGroupUpdateRequest`                                                                                     | [\Shippo\API\Models\Components\ServiceGroupUpdateRequest](../../Models/Components/ServiceGroupUpdateRequest.md) | :heavy_minus_sign:                                                                                              | N/A                                                                                                             |                                                                                                                 |


### Response

**[?\Shippo\API\Models\Operations\UpdateServiceGroupResponse](../../Models/Operations/UpdateServiceGroupResponse.md)**


## delete

Deletes an existing service group using an object ID.

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
    

    $response = $sdk->serviceGroups->delete('<value>', '2018-02-08');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `serviceGroupId`                                     | *string*                                             | :heavy_check_mark:                                   | Object ID of the service group                       |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\DeleteServiceGroupResponse](../../Models/Operations/DeleteServiceGroupResponse.md)**

