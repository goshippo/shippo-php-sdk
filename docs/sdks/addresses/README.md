# Addresses


## Overview

Addresses are the locations a parcel is being shipped **from** and **to**. They represent company and residential places. Among other things, you can use address objects to create shipments, calculate shipping rates, and purchase shipping labels.
<SchemaDefinition schemaRef="#/components/schemas/Address"/>

### Available Operations

* [list](#list) - List all addresses
* [create](#create) - Create a new address
* [get](#get) - Retrieve an address
* [validate](#validate) - Validate an address

## list

Returns a list of all address objects that have been created in this account.

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
    

    $response = $sdk->addresses->list(768578, 99895, '2018-02-08');

    if ($response->addressPaginatedList !== null) {
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

**[?\Shippo\API\Models\Operations\ListAddressesResponse](../../Models/Operations/ListAddressesResponse.md)**


## create

Creates a new address object. You can use address objects to create new shipments, calculate rates, and to create orders.

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
        $addressCreateRequest = new Components\AddressCreateRequest();
    $addressCreateRequest->name = 'Shwan Ippotle';
    $addressCreateRequest->company = 'Shippo';
    $addressCreateRequest->street1 = '215 Clayton St.';
    $addressCreateRequest->street2 = '<value>';
    $addressCreateRequest->street3 = '';
    $addressCreateRequest->streetNo = '';
    $addressCreateRequest->city = 'San Francisco';
    $addressCreateRequest->state = 'CA';
    $addressCreateRequest->zip = '94117';
    $addressCreateRequest->country = 'US';
    $addressCreateRequest->phone = '+1 555 341 9393';
    $addressCreateRequest->email = 'shippotle@shippo.com';
    $addressCreateRequest->isResidential = true;
    $addressCreateRequest->metadata = 'Customer ID 123456';
    $addressCreateRequest->validate = true;

    $response = $sdk->addresses->create($addressCreateRequest, '2018-02-08');

    if ($response->address !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           | Example                                                                                               |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `addressCreateRequest`                                                                                | [\Shippo\API\Models\Components\AddressCreateRequest](../../Models/Components/AddressCreateRequest.md) | :heavy_check_mark:                                                                                    | Address details.                                                                                      |                                                                                                       |
| `shippoApiVersion`                                                                                    | *string*                                                                                              | :heavy_minus_sign:                                                                                    | String used to pick a non-default API version to use                                                  | 2018-02-08                                                                                            |


### Response

**[?\Shippo\API\Models\Operations\CreateAddressResponse](../../Models/Operations/CreateAddressResponse.md)**


## get

Returns an existing address using an object ID.

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
    

    $response = $sdk->addresses->get('<value>', '2018-02-08');

    if ($response->address !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `addressId`                                          | *string*                                             | :heavy_check_mark:                                   | Object ID of the address                             |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\GetAddressResponse](../../Models/Operations/GetAddressResponse.md)**


## validate

Validates an existing address using an object ID

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
    

    $response = $sdk->addresses->validate('<value>', '2018-02-08');

    if ($response->address !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `addressId`                                          | *string*                                             | :heavy_check_mark:                                   | Object ID of the address                             |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\ValidateAddressResponse](../../Models/Operations/ValidateAddressResponse.md)**

