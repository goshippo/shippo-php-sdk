# UserParcelTemplates


## Overview

A user parcel template represents a package used for shipping that has preset dimensions and attributes defined 
by you. They are useful for capturing attributes of parcel-types you frequently use for shipping, allowing 
them to be defined once and then used for many shipments. These parcel templates can also be used for live rates.

User parcel templates can also be created using a carrier parcel template, where the dimensions will be copied from 
the carrier presets, but the weight can be configured by you.
<SchemaDefinition schemaRef="#/components/schemas/UserParcelTemplate"/>

### Available Operations

* [list](#list) - List all user parcel templates
* [create](#create) - Create a new user parcel template
* [delete](#delete) - Delete a user parcel template
* [get](#get) - Retrieves a user parcel template
* [update](#update) - Update an existing user parcel template

## list

Returns a list all of all user parcel template objects.

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
    

    $response = $sdk->userParcelTemplates->list('2018-02-08');

    if ($response->userParcelTemplateList !== null) {
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

**[?\Shippo\API\Models\Operations\ListUserParcelTemplatesResponse](../../Models/Operations/ListUserParcelTemplatesResponse.md)**


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
    

    $response = $sdk->userParcelTemplates->create('<value>', '2018-02-08');

    if ($response->userParcelTemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `requestBody`                                        | *mixed*                                              | :heavy_check_mark:                                   | N/A                                                  |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\CreateUserParcelTemplateResponse](../../Models/Operations/CreateUserParcelTemplateResponse.md)**


## delete

Deletes a user parcel template using an object ID.

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
    

    $response = $sdk->userParcelTemplates->delete('<value>', '2018-02-08');

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
| `userParcelTemplateObjectId`                         | *string*                                             | :heavy_check_mark:                                   | Object ID of the user parcel template                |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\DeleteUserParcelTemplateResponse](../../Models/Operations/DeleteUserParcelTemplateResponse.md)**


## get

Returns the parcel template information for a specific user parcel
template, identified by the object ID.

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
    

    $response = $sdk->userParcelTemplates->get('<value>', '2018-02-08');

    if ($response->userParcelTemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `userParcelTemplateObjectId`                         | *string*                                             | :heavy_check_mark:                                   | Object ID of the user parcel template                |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\GetUserParcelTemplateResponse](../../Models/Operations/GetUserParcelTemplateResponse.md)**


## update

Updates an existing user parcel template.

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
        $userParcelTemplateUpdateRequest = new Components\UserParcelTemplateUpdateRequest();
    $userParcelTemplateUpdateRequest->distanceUnit = Components\DistanceUnitEnum::In;
    $userParcelTemplateUpdateRequest->height = '6';
    $userParcelTemplateUpdateRequest->length = '10';
    $userParcelTemplateUpdateRequest->name = 'My Custom Template';
    $userParcelTemplateUpdateRequest->weight = '12';
    $userParcelTemplateUpdateRequest->weightUnit = Components\WeightUnitEnum::Lb;
    $userParcelTemplateUpdateRequest->width = '8';

    $response = $sdk->userParcelTemplates->update('<value>', '2018-02-08', $userParcelTemplateUpdateRequest);

    if ($response->userParcelTemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 | Example                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `userParcelTemplateObjectId`                                                                                                | *string*                                                                                                                    | :heavy_check_mark:                                                                                                          | Object ID of the user parcel template                                                                                       |                                                                                                                             |
| `shippoApiVersion`                                                                                                          | *string*                                                                                                                    | :heavy_minus_sign:                                                                                                          | String used to pick a non-default API version to use                                                                        | 2018-02-08                                                                                                                  |
| `userParcelTemplateUpdateRequest`                                                                                           | [\Shippo\API\Models\Components\UserParcelTemplateUpdateRequest](../../Models/Components/UserParcelTemplateUpdateRequest.md) | :heavy_minus_sign:                                                                                                          | N/A                                                                                                                         |                                                                                                                             |


### Response

**[?\Shippo\API\Models\Operations\UpdateUserParcelTemplateResponse](../../Models/Operations/UpdateUserParcelTemplateResponse.md)**

