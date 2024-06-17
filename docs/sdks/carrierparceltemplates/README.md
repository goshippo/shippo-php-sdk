# CarrierParcelTemplates


## Overview

A carrier parcel template represents a package used for shipping that has preset dimensions defined by a carrier. Some examples of a carrier parcel template include USPS Flat Rate Box and Fedex Small Pak. When using a carrier parcel template, the rates returned may be limited to the carrier that provides the box. You can create user parcel templates using a carrier parcel template. Shippo takes the dimensions of the carrier parcel template but you must configure the weight.

<SchemaDefinition schemaRef="#/components/schemas/CarrierParcelTemplate"/>

### Available Operations

* [list](#list) - List all carrier parcel templates
* [get](#get) - Retrieve a carrier parcel templates

## list

List all carrier parcel template objects. <br> Use the following query string params to filter the results as needed. <br> <ul> <li>`include=all` (the default). Includes templates from all carriers </li> <li>`include=user`. Includes templates only from carriers which the user has added (whether or not they're currently enabled) </li> <li>`include=enabled`. includes templates only for carriers which the user has added and enabled </li> <li>`carrier=*token*`. filter by specific carrier, e.g. fedex, usps </li> </ul>

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
    

    $response = $sdk->carrierParcelTemplates->list(Operations\IncludeT::Enabled, 'fedex', '2018-02-08');

    if ($response->carrierParcelTemplateList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                     | Type                                                                          | Required                                                                      | Description                                                                   | Example                                                                       |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `include`                                                                     | [\Shippo\API\Models\Operations\IncludeT](../../Models/Operations/IncludeT.md) | :heavy_minus_sign:                                                            | filter by user or enabled                                                     |                                                                               |
| `carrier`                                                                     | *string*                                                                      | :heavy_minus_sign:                                                            | filter by specific carrier                                                    | fedex                                                                         |
| `shippoApiVersion`                                                            | *string*                                                                      | :heavy_minus_sign:                                                            | String used to pick a non-default API version to use                          | 2018-02-08                                                                    |


### Response

**[?\Shippo\API\Models\Operations\ListCarrierParcelTemplatesResponse](../../Models/Operations/ListCarrierParcelTemplatesResponse.md)**


## get

Fetches the parcel template information for a specific carrier parcel template, identified by the token.

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
    

    $response = $sdk->carrierParcelTemplates->get('<value>', '2018-02-08');

    if ($response->carrierParcelTemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                       | Type                                                            | Required                                                        | Description                                                     | Example                                                         |
| --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- |
| `carrierParcelTemplateToken`                                    | *string*                                                        | :heavy_check_mark:                                              | The unique string representation of the carrier parcel template |                                                                 |
| `shippoApiVersion`                                              | *string*                                                        | :heavy_minus_sign:                                              | String used to pick a non-default API version to use            | 2018-02-08                                                      |


### Response

**[?\Shippo\API\Models\Operations\GetCarrierParcelTemplateResponse](../../Models/Operations/GetCarrierParcelTemplateResponse.md)**

