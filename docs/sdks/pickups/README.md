# Pickups
(*pickups*)

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
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;
use Shippo\API\Utils;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();

$pickupBase = new Components\PickupBase(
    carrierAccount: 'adcfdddf8ec64b84ad22772bce3ea37a',
    location: new Components\Location(
        address: new Components\AddressCompleteCreateRequest(
            name: 'Shwan Ippotle',
            street1: '215 Clayton St.',
            city: 'San Francisco',
            state: 'CA',
            zip: '94117',
            country: 'US',
            company: 'Shippo',
            street3: '',
            streetNo: '',
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
    requestedEndTime: Utils\Utils::parseDateTime('2024-06-17T07:14:55.338Z'),
    requestedStartTime: Utils\Utils::parseDateTime('2024-11-30T17:06:07.804Z'),
    transactions: [
        'adcfdddf8ec64b84ad22772bce3ea37a',
    ],
);

$response = $sdk->pickups->create(
    pickupBase: $pickupBase,
    shippoApiVersion: '2018-02-08'

);

if ($response->pickup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `pickupBase`                                                                                                                                                       | [Components\PickupBase](../../Models/Components/PickupBase.md)                                                                                                     | :heavy_check_mark:                                                                                                                                                 | Shippo’s pickups endpoint allows you to schedule pickups with USPS and DHL Express for eligible shipments that you have already created.                           |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\Pickup](../../Models/Components/Pickup.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |