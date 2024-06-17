# Batches


## Overview

A batch is a technique for creating multiple labels at once. Use the  batch object to create and purchase many shipments in two API calls. After creating the batch, retrieve the batch to verify that all shipments are valid. You can add and remove shipments after you have created the batch. When all shipments are valid you can purchase the batch and retrieve all the shipping labels.
<SchemaDefinition schemaRef="#/components/schemas/Batch"/>

# Batch Shipment
The batch shipment object is a wrapper around a shipment object, which include shipment-specific information 
for batch processing.

Note: batch shipments can only be created on the batch endpoint, either when creating a batch object or by through 
the `/batches/{BATCH_OBJECT_ID}/add_shipments` endpoint
<SchemaDefinition schemaRef="#/components/schemas/BatchShipment"/>

### Available Operations

* [create](#create) - Create a batch
* [get](#get) - Retrieve a batch
* [addShipments](#addshipments) - Add shipments to a batch
* [purchase](#purchase) - Purchase a batch
* [removeShipments](#removeshipments) - Remove shipments from a batch

## create

Creates a new batch object for purchasing shipping labels for many shipments at once. Batches are created asynchronously. This means that the API response won't include your batch shipments yet. You need to retrieve the batch later to verify that all batch shipments are valid.

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
        $batchCreateRequest = new Components\BatchCreateRequest();
    $batchCreateRequest->defaultCarrierAccount = '078870331023437cb917f5187429b093';
    $batchCreateRequest->defaultServicelevelToken = 'usps_priority';
    $batchCreateRequest->labelFiletype = Components\LabelFileTypeEnum::PDF4x6;
    $batchCreateRequest->metadata = 'BATCH #1';
    $batchCreateRequest->batchShipments = [
        new Components\BatchShipmentCreateRequest(),
    ];

    $response = $sdk->batches->create($batchCreateRequest, '2018-02-08');

    if ($response->batch !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       | Example                                                                                           |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `batchCreateRequest`                                                                              | [\Shippo\API\Models\Components\BatchCreateRequest](../../Models/Components/BatchCreateRequest.md) | :heavy_check_mark:                                                                                | Batch details.                                                                                    |                                                                                                   |
| `shippoApiVersion`                                                                                | *string*                                                                                          | :heavy_minus_sign:                                                                                | String used to pick a non-default API version to use                                              | 2018-02-08                                                                                        |


### Response

**[?\Shippo\API\Models\Operations\CreateBatchResponse](../../Models/Operations/CreateBatchResponse.md)**


## get

Returns a batch using an object ID. <br> Batch shipments are displayed 100 at a time.  You can iterate 
through each `page` using the `?page= query` parameter.  You can also filter based on batch shipment 
status, for example, by passing a query param like `?object_results=creation_failed`. <br> 
For more details on filtering results, see our guide on <a href="https://docs.goshippo.com/docs/api_concepts/filtering/" target="blank"> filtering</a>.

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
    

    $response = $sdk->batches->get('<value>', '2018-02-08');

    if ($response->batch !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `batchId`                                            | *string*                                             | :heavy_check_mark:                                   | Object ID of the batch                               |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\GetBatchResponse](../../Models/Operations/GetBatchResponse.md)**


## addShipments

Adds batch shipments to an existing batch.

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
    

    $response = $sdk->batches->addShipments('<value>', [
    new Components\BatchShipmentCreateRequest(),
], '2018-02-08');

    if ($response->batch !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              | Example                                                                                                                  |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `batchId`                                                                                                                | *string*                                                                                                                 | :heavy_check_mark:                                                                                                       | Object ID of the batch                                                                                                   |                                                                                                                          |
| `requestBody`                                                                                                            | array<[\Shippo\API\Models\Components\BatchShipmentCreateRequest](../../Models/Components/BatchShipmentCreateRequest.md)> | :heavy_check_mark:                                                                                                       | Array of shipments to add to the batch                                                                                   |                                                                                                                          |
| `shippoApiVersion`                                                                                                       | *string*                                                                                                                 | :heavy_minus_sign:                                                                                                       | String used to pick a non-default API version to use                                                                     | 2018-02-08                                                                                                               |


### Response

**[?\Shippo\API\Models\Operations\AddShipmentsToBatchResponse](../../Models/Operations/AddShipmentsToBatchResponse.md)**


## purchase

Purchases an existing batch with a status of `VALID`. 
Once you send a POST request to the purchase endpoint the batch status will change to `PURCHASING`. 
When all the shipments are purchased, the status will change to `PURCHASED` and you will receive a 
`batch_purchased` webhook indicating that the batch has been purchased

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
    

    $response = $sdk->batches->purchase('<value>', '2018-02-08');

    if ($response->batch !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `batchId`                                            | *string*                                             | :heavy_check_mark:                                   | Object ID of the batch                               |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\PurchaseBatchResponse](../../Models/Operations/PurchaseBatchResponse.md)**


## removeShipments

Removes shipments from an existing batch shipment.

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
    

    $response = $sdk->batches->removeShipments('<value>', [
    '<value>',
], '2018-02-08');

    if ($response->batch !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                              | Type                                                   | Required                                               | Description                                            | Example                                                |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `batchId`                                              | *string*                                               | :heavy_check_mark:                                     | Object ID of the batch                                 |                                                        |
| `requestBody`                                          | array<*string*>                                        | :heavy_check_mark:                                     | Array of shipments object ids to remove from the batch |                                                        |
| `shippoApiVersion`                                     | *string*                                               | :heavy_minus_sign:                                     | String used to pick a non-default API version to use   | 2018-02-08                                             |


### Response

**[?\Shippo\API\Models\Operations\RemoveShipmentsFromBatchResponse](../../Models/Operations/RemoveShipmentsFromBatchResponse.md)**

