# Pickups


## Overview

A pickup is when you schedule a carrier to collect a package for delivery.
Use Shippo’s pickups endpoint to schedule pickups with USPS and DHL Express for eligible shipments that you have already created.
<SchemaDefinition schemaRef="#/components/schemas/Pickup"/>

### Available Operations

* [create](#create) - Create a pickup

## create

Creates a pickup object. This request is for a carrier to come to a specified location to take a package for shipping.

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
        $pickupBase = new Components\PickupBase();
    $pickupBase->carrierAccount = 'adcfdddf8ec64b84ad22772bce3ea37a';
    $pickupBase->location = new Components\Location();
    $pickupBase->location->address = new Components\AddressCompleteCreateRequest();
    $pickupBase->location->address->name = 'Shwan Ippotle';
    $pickupBase->location->address->company = 'Shippo';
    $pickupBase->location->address->street1 = '215 Clayton St.';
    $pickupBase->location->address->street2 = '<value>';
    $pickupBase->location->address->street3 = '';
    $pickupBase->location->address->streetNo = '';
    $pickupBase->location->address->city = 'San Francisco';
    $pickupBase->location->address->state = 'CA';
    $pickupBase->location->address->zip = '94117';
    $pickupBase->location->address->country = 'US';
    $pickupBase->location->address->phone = '+1 555 341 9393';
    $pickupBase->location->address->email = 'shippotle@shippo.com';
    $pickupBase->location->address->isResidential = true;
    $pickupBase->location->address->metadata = 'Customer ID 123456';
    $pickupBase->location->address->validate = true;
    $pickupBase->location->buildingLocationType = Components\BuildingLocationType::FrontDoor;
    $pickupBase->location->buildingType = Components\BuildingType::Apartment;
    $pickupBase->location->instructions = 'Behind screen door';
    $pickupBase->metadata = '<value>';
    $pickupBase->requestedEndTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-18T07:14:55.676Z');
    $pickupBase->requestedStartTime = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-21T08:42:38.998Z');
    $pickupBase->transactions = [
        '<value>',
    ];

    $response = $sdk->pickups->create($pickupBase, '2018-02-08');

    if ($response->pickup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              | Example                                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `pickupBase`                                                                                                                             | [\Shippo\API\Models\Components\PickupBase](../../Models/Components/PickupBase.md)                                                        | :heavy_check_mark:                                                                                                                       | Shippo’s pickups endpoint allows you to schedule pickups with USPS and DHL Express for eligible shipments that you have already created. |                                                                                                                                          |
| `shippoApiVersion`                                                                                                                       | *string*                                                                                                                                 | :heavy_minus_sign:                                                                                                                       | String used to pick a non-default API version to use                                                                                     | 2018-02-08                                                                                                                               |


### Response

**[?\Shippo\API\Models\Operations\CreatePickupResponse](../../Models/Operations/CreatePickupResponse.md)**

