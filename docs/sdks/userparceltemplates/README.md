# UserParcelTemplates
(*userParcelTemplates*)

## Overview

A user parcel template represents a package used for shipping that has preset dimensions and attributes defined 
by you. They are useful for capturing attributes of parcel-types you frequently use for shipping, allowing 
them to be defined once and then used for many shipments. These parcel templates can also be used for live rates.

User parcel templates can also be created using a carrier parcel template, where the dimensions will be copied from 
the carrier presets, but the weight can be configured by you.
<SchemaDefinition schemaRef="#/components/schemas/UserParcelTemplate"/>

### Available Operations

* [create](#create) - Create a new user parcel template
* [delete](#delete) - Delete a user parcel template
* [get](#get) - Retrieves a user parcel template
* [list](#list) - List all user parcel templates
* [update](#update) - Update an existing user parcel template

## create

Creates a new user parcel template. <br>You can choose to create a
parcel template using a preset carrier template as a starting point, or
you can create an entirely custom one. To use a preset carrier template,
pass in a unique template token from <a href="#tag/Parcel-Templates">this list</a>
plus the weight fields (**weight** and **weight_unit**). Otherwise, omit
the template field and pass the other fields, for the weight, length, height,
and depth, as well as their units."

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();



$response = $sdk->userParcelTemplates->create(
    userParcelTemplateCreateRequest: new Components\UserParcelTemplateWithCarrierTemplateCreateRequest(
        weight: '12',
        weightUnit: Components\WeightUnitEnum::Lb,
    ),
    shippoApiVersion: '2018-02-08'

);

if ($response->userParcelTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                    | Type                                                                                                                                                                                         | Required                                                                                                                                                                                     | Description                                                                                                                                                                                  | Example                                                                                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `userParcelTemplateCreateRequest`                                                                                                                                                            | [Components\UserParcelTemplateWithCarrierTemplateCreateRequest\|Components\UserParcelTemplateWithoutCarrierTemplateCreateRequest](../../Models/Components/UserParcelTemplateCreateRequest.md) | :heavy_check_mark:                                                                                                                                                                           | N/A                                                                                                                                                                                          |                                                                                                                                                                                              |
| `shippoApiVersion`                                                                                                                                                                           | *?string*                                                                                                                                                                                    | :heavy_minus_sign:                                                                                                                                                                           | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide.                           | 2018-02-08                                                                                                                                                                                   |

### Response

**[?Components\UserParcelTemplate](../../Models/Components/UserParcelTemplate.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## delete

Deletes a user parcel template using an object ID.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();



$response = $sdk->userParcelTemplates->delete(
    userParcelTemplateObjectId: '<id>',
    shippoApiVersion: '2018-02-08'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `userParcelTemplateObjectId`                                                                                                                                       | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the user parcel template                                                                                                                              |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## get

Returns the parcel template information for a specific user parcel
template, identified by the object ID.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();



$response = $sdk->userParcelTemplates->get(
    userParcelTemplateObjectId: '<id>',
    shippoApiVersion: '2018-02-08'

);

if ($response->userParcelTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `userParcelTemplateObjectId`                                                                                                                                       | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the user parcel template                                                                                                                              |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\UserParcelTemplate](../../Models/Components/UserParcelTemplate.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## list

Returns a list all of all user parcel template objects.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();



$response = $sdk->userParcelTemplates->list(
    shippoApiVersion: '2018-02-08'
);

if ($response->userParcelTemplateList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\UserParcelTemplateList](../../Models/Components/UserParcelTemplateList.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## update

Updates an existing user parcel template.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();

$userParcelTemplateUpdateRequest = new Components\UserParcelTemplateUpdateRequest(
    distanceUnit: Components\DistanceUnitEnum::In,
    height: '6',
    length: '10',
    name: 'My Custom Template',
    width: '8',
    weight: '12',
    weightUnit: Components\WeightUnitEnum::Lb,
);

$response = $sdk->userParcelTemplates->update(
    userParcelTemplateObjectId: '<id>',
    shippoApiVersion: '2018-02-08',
    userParcelTemplateUpdateRequest: $userParcelTemplateUpdateRequest

);

if ($response->userParcelTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `userParcelTemplateObjectId`                                                                                                                                       | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the user parcel template                                                                                                                              |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |
| `userParcelTemplateUpdateRequest`                                                                                                                                  | [?Components\UserParcelTemplateUpdateRequest](../../Models/Components/UserParcelTemplateUpdateRequest.md)                                                          | :heavy_minus_sign:                                                                                                                                                 | N/A                                                                                                                                                                |                                                                                                                                                                    |

### Response

**[?Components\UserParcelTemplate](../../Models/Components/UserParcelTemplate.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |