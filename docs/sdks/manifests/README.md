# Manifests
(*manifests*)

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
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();



$response = $sdk->manifests->list(
    page: 1,
    results: 5,
    shippoApiVersion: '2018-02-08'

);

if ($response->manifestPaginatedList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `page`                                                                                                                                                             | *?int*                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                 | The page number you want to select                                                                                                                                 |                                                                                                                                                                    |
| `results`                                                                                                                                                          | *?int*                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                 | The number of results to return per page (max 100, default 5)                                                                                                      |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Operations\ListManifestsResponse](../../Models/Operations/ListManifestsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## create

Creates a new manifest object.

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

$manifestCreateRequest = new Components\ManifestCreateRequest(
    carrierAccount: 'adcfdddf8ec64b84ad22772bce3ea37a',
    shipmentDate: '2014-05-16T23:59:59Z',
    addressFrom: new Components\AddressCreateRequest(
        country: 'US',
        name: 'Shwan Ippotle',
        company: 'Shippo',
        street1: '215 Clayton St.',
        street3: '',
        streetNo: '',
        city: 'San Francisco',
        state: 'CA',
        zip: '94117',
        phone: '+1 555 341 9393',
        email: 'shippotle@shippo.com',
        isResidential: true,
        metadata: 'Customer ID 123456',
        validate: true,
    ),
    transactions: [
        'adcfdddf8ec64b84ad22772bce3ea37a',
    ],
);

$response = $sdk->manifests->create(
    manifestCreateRequest: $manifestCreateRequest,
    shippoApiVersion: '2018-02-08'

);

if ($response->manifest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `manifestCreateRequest`                                                                                                                                            | [Components\ManifestCreateRequest](../../Models/Components/ManifestCreateRequest.md)                                                                               | :heavy_check_mark:                                                                                                                                                 | Manifest details and contact info.                                                                                                                                 |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Operations\CreateManifestResponse](../../Models/Operations/CreateManifestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## get

Returns an existing manifest using an object ID.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();



$response = $sdk->manifests->get(
    manifestId: '<id>',
    shippoApiVersion: '2018-02-08'

);

if ($response->manifest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `manifestId`                                                                                                                                                       | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the manifest to update                                                                                                                                |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Operations\GetManifestResponse](../../Models/Operations/GetManifestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |