# Manifests


## Overview

A manifest is a single-page document with a barcode that carriers can scan to accept all packages into transit without the need to scan each item individually. 
They are close-outs of shipping labels of a certain day. Some carriers require manifests to  process the shipments.

<SchemaDefinition schemaRef="#/components/schemas/Manifest"/>

# Manifest Errors
The following codes and messages are the possible errors that may occur when creating Manifests.
<SchemaDefinition schemaRef="#/components/schemas/ManifestErrors"/>

### Available Operations

* [list](#list) - List all manifests
* [create](#create) - Create a new manifest
* [get](#get) - Retrieve a manifest

## list

Returns a list of all manifest objects.

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
    

    $response = $sdk->manifests->list(768578, 99895, '2018-02-08');

    if ($response->manifestPaginatedList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                     | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `page`                                                        | *int*                                                         | :heavy_minus_sign:                                            | The page number you want to select                            |                                                               |
| `results`                                                     | *int*                                                         | :heavy_minus_sign:                                            | The number of results to return per page (max 100, default 5) |                                                               |
| `shippoApiVersion`                                            | *string*                                                      | :heavy_minus_sign:                                            | String used to pick a non-default API version to use          | 2018-02-08                                                    |


### Response

**[?\Shippo\API\Models\Operations\ListManifestsResponse](../../Models/Operations/ListManifestsResponse.md)**


## create

Creates a new manifest object.

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
        $manifestCreateRequest = new Components\ManifestCreateRequest();
    $manifestCreateRequest->carrierAccount = 'adcfdddf8ec64b84ad22772bce3ea37a';
    $manifestCreateRequest->shipmentDate = '2014-05-16T23:59:59Z';
    $manifestCreateRequest->transactions = [
        '<value>',
    ];
    $manifestCreateRequest->addressFrom = '<value>';
    $manifestCreateRequest->async = false;

    $response = $sdk->manifests->create($manifestCreateRequest, '2018-02-08');

    if ($response->manifest !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             | Example                                                                                                 |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `manifestCreateRequest`                                                                                 | [\Shippo\API\Models\Components\ManifestCreateRequest](../../Models/Components/ManifestCreateRequest.md) | :heavy_check_mark:                                                                                      | Manifest details and contact info.                                                                      |                                                                                                         |
| `shippoApiVersion`                                                                                      | *string*                                                                                                | :heavy_minus_sign:                                                                                      | String used to pick a non-default API version to use                                                    | 2018-02-08                                                                                              |


### Response

**[?\Shippo\API\Models\Operations\CreateManifestResponse](../../Models/Operations/CreateManifestResponse.md)**


## get

Returns an existing manifest using an object ID.

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
    

    $response = $sdk->manifests->get('<value>', '2018-02-08');

    if ($response->manifest !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `manifestId`                                         | *string*                                             | :heavy_check_mark:                                   | Object ID of the manifest to update                  |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\GetManifestResponse](../../Models/Operations/GetManifestResponse.md)**

