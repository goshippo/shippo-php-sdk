# CustomsItems


## Overview

Customs declarations are relevant information, including one or multiple customs items, you need to provide for customs clearance for your international shipments.
<SchemaDefinition schemaRef="#/components/schemas/CustomsItem"/>

### Available Operations

* [list](#list) - List all customs items
* [create](#create) - Create a new customs item
* [get](#get) - Retrieve a customs item

## list

Returns a list all customs items objects.

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
    

    $response = $sdk->customsItems->list(768578, 99895, '2018-02-08');

    if ($response->customsItemPaginatedList !== null) {
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

**[?\Shippo\API\Models\Operations\ListCustomsItemsResponse](../../Models/Operations/ListCustomsItemsResponse.md)**


## create

Creates a new customs item object.

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
        $customsItemCreateRequest = new Components\CustomsItemCreateRequest();
    $customsItemCreateRequest->description = 'T-Shirt';
    $customsItemCreateRequest->eccnEar99 = '<value>';
    $customsItemCreateRequest->massUnit = Components\WeightUnitEnum::Lb;
    $customsItemCreateRequest->metadata = 'Order ID "123454"';
    $customsItemCreateRequest->netWeight = '5';
    $customsItemCreateRequest->originCountry = '<value>';
    $customsItemCreateRequest->quantity = 20;
    $customsItemCreateRequest->skuCode = 'HM-123';
    $customsItemCreateRequest->hsCode = '0901.21';
    $customsItemCreateRequest->tariffNumber = '<value>';
    $customsItemCreateRequest->valueAmount = '200';
    $customsItemCreateRequest->valueCurrency = 'USD';

    $response = $sdk->customsItems->create($customsItemCreateRequest, '2018-02-08');

    if ($response->customsItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   | Example                                                                                                       |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `customsItemCreateRequest`                                                                                    | [\Shippo\API\Models\Components\CustomsItemCreateRequest](../../Models/Components/CustomsItemCreateRequest.md) | :heavy_check_mark:                                                                                            | CustomsItem details.                                                                                          |                                                                                                               |
| `shippoApiVersion`                                                                                            | *string*                                                                                                      | :heavy_minus_sign:                                                                                            | String used to pick a non-default API version to use                                                          | 2018-02-08                                                                                                    |


### Response

**[?\Shippo\API\Models\Operations\CreateCustomsItemResponse](../../Models/Operations/CreateCustomsItemResponse.md)**


## get

Returns an existing customs item using an object ID

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
    

    $response = $sdk->customsItems->get('<value>', 700347, '2018-02-08');

    if ($response->customsItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `customsItemId`                                      | *string*                                             | :heavy_check_mark:                                   | Object ID of the customs item                        |                                                      |
| `page`                                               | *int*                                                | :heavy_minus_sign:                                   | The page number you want to select                   |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\GetCustomsItemResponse](../../Models/Operations/GetCustomsItemResponse.md)**

