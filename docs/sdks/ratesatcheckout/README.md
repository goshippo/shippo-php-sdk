# RatesAtCheckout


## Overview

Rates at checkout is a tool for merchants to display up-to-date shipping estimates based on what's in their customers cart and where they’re shipping to.
Merchants set up curated shipping options for customers in the checkout flow based on data in the shopping cart. The request must include the **to** address and item information. Optional fields are the **from** address and package information. If the optional fields are not included, the service will use the default address and/or package configured for rates at checkout. The response is a list of shipping options based on the Service Group configuration.
(see <a href="#tag/Service-Groups">Service Group configuration</a> for details).
<SchemaDefinition schemaRef="#/components/schemas/LiveRate"/>


# Default Parcel Template
Assign one of your user parcel templates to be the default used when generating Live Rates. This template will be used by default when generating Live Rates, unless you explicitly provide a parcel in the Live Rates request.
<SchemaDefinition schemaRef="#/components/schemas/UserParcelTemplate"/>

### Available Operations

* [create](#create) - Generate a live rates request
* [getDefaultParcelTemplate](#getdefaultparceltemplate) - Show current default parcel template
* [updateDefaultParcelTemplate](#updatedefaultparceltemplate) - Update default parcel template
* [deleteDefaultParcelTemplate](#deletedefaultparceltemplate) - Clear current default parcel template

## create

Initiates a live rates request. Include either the object ID for
an existing address record or a fully formed address object when entering
an address value. You can also enter the object ID of an existing user parcel
template or a fully formed user parcel template object as the parcel value.

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
        $liveRateCreateRequest = new Components\LiveRateCreateRequest();
    $liveRateCreateRequest->addressFrom = '<value>';
    $liveRateCreateRequest->addressTo = '<value>';
    $liveRateCreateRequest->lineItems = [
        new Components\LineItem(),
    ];
    $liveRateCreateRequest->parcel = '5df144dca289442cv7a06';

    $response = $sdk->ratesAtCheckout->create($liveRateCreateRequest, '2018-02-08');

    if ($response->liveRatePaginatedList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             | Example                                                                                                 |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `liveRateCreateRequest`                                                                                 | [\Shippo\API\Models\Components\LiveRateCreateRequest](../../Models/Components/LiveRateCreateRequest.md) | :heavy_check_mark:                                                                                      | Generate rates at checkout                                                                              |                                                                                                         |
| `shippoApiVersion`                                                                                      | *string*                                                                                                | :heavy_minus_sign:                                                                                      | String used to pick a non-default API version to use                                                    | 2018-02-08                                                                                              |


### Response

**[?\Shippo\API\Models\Operations\CreateLiveRateResponse](../../Models/Operations/CreateLiveRateResponse.md)**


## getDefaultParcelTemplate

Retrieve and display the currently configured default parcel template for live rates.

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
    

    $response = $sdk->ratesAtCheckout->getDefaultParcelTemplate('2018-02-08');

    if ($response->defaultParcelTemplate !== null) {
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

**[?\Shippo\API\Models\Operations\GetDefaultParcelTemplateResponse](../../Models/Operations/GetDefaultParcelTemplateResponse.md)**


## updateDefaultParcelTemplate

Update the currently configured default parcel template for live rates. The object_id in the request payload should identify the user parcel template to be the new default.

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
        $defaultParcelTemplateUpdateRequest = new Components\DefaultParcelTemplateUpdateRequest();
    $defaultParcelTemplateUpdateRequest->objectId = 'b958d3690bb04bb8b2986724872750f5';

    $response = $sdk->ratesAtCheckout->updateDefaultParcelTemplate('2018-02-08', $defaultParcelTemplateUpdateRequest);

    if ($response->defaultParcelTemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       | Example                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `shippoApiVersion`                                                                                                                | *string*                                                                                                                          | :heavy_minus_sign:                                                                                                                | String used to pick a non-default API version to use                                                                              | 2018-02-08                                                                                                                        |
| `defaultParcelTemplateUpdateRequest`                                                                                              | [\Shippo\API\Models\Components\DefaultParcelTemplateUpdateRequest](../../Models/Components/DefaultParcelTemplateUpdateRequest.md) | :heavy_minus_sign:                                                                                                                | N/A                                                                                                                               |                                                                                                                                   |


### Response

**[?\Shippo\API\Models\Operations\UpdateDefaultParcelTemplateResponse](../../Models/Operations/UpdateDefaultParcelTemplateResponse.md)**


## deleteDefaultParcelTemplate

Clears the currently configured default parcel template for live rates.

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
    

    $response = $sdk->ratesAtCheckout->deleteDefaultParcelTemplate('2018-02-08');

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
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\DeleteDefaultParcelTemplateResponse](../../Models/Operations/DeleteDefaultParcelTemplateResponse.md)**

