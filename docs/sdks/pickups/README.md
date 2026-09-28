# Pickups

## Overview

A pickup is when you schedule a carrier to collect a package for delivery.
Use Shippo’s pickups endpoint to schedule pickups with USPS and DHL Express for eligible shipments that you have already created.

### Available Operations

* [create](#create) - Create a pickup

## create

Creates a pickup object. This request is for a carrier to come to a specified location to take a package for shipping.

### Example Usage

<!-- UsageSnippet language="php" operationID="CreatePickup" method="post" path="/pickups" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;
use Shippo\API\Utils;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$pickupBase = new Components\PickupBase(
    carrierAccount: 'adcfdddf8ec64b84ad22772bce3ea37a',
    location: new Components\Location(
        address: new Components\AddressCompleteCreateRequest(
            name: 'Shwan Ippotle',
            company: 'Shippo',
            street1: '215 Clayton St.',
            street3: '',
            streetNo: '',
            city: 'San Francisco',
            state: 'CA',
            zip: '94117',
            country: 'US',
            phone: '+1 555 341 9393',
            email: 'shippotle@shippo.com',
            isResidential: true,
            metadata: 'Customer ID 123456',
            validate: true,
        ),
        buildingLocationType: Components\BuildingLocationType::FrontDoor,
        buildingType: Components\BuildingType::Apartment,
        instructions: 'Behind screen door',
    ),
    requestedEndTime: Utils\Utils::parseDateTime('2025-03-28T03:12:16.314Z'),
    requestedStartTime: Utils\Utils::parseDateTime('2024-05-20T03:35:43.192Z'),
    transactions: [
        'adcfdddf8ec64b84ad22772bce3ea37a',
    ],
);

$response = $sdk->pickups->create(
    pickupBase: $pickupBase
);

if ($response->pickup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `pickupBase`                                                                                                                                            | [Components\PickupBase](../../Models/Components/PickupBase.md)                                                                                          | :heavy_check_mark:                                                                                                                                      | Shippo’s pickups endpoint allows you to schedule pickups with USPS and DHL Express for eligible shipments that you have already created.                |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |

### Response

**[?Components\Pickup](../../Models/Components/Pickup.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |