# TrackingStatus


## Overview

<p style="text-align: center; background-color: #F2F3F4;"></br>
If you purchased your shipping label through Shippo, you can also get all the tracking details of your Shipment 
from the <a href="#tag/Transactions">Transaction</a> object.
</br></br></p>
A tracking status of a package is an indication of current location of a package in the supply chain. For example,  sorting, warehousing, or out for delivery. Use the tracking status object to track the location of your shipments.

When using your <a href="https://docs.goshippo.com/docs/guides_general/authentication/">Test</a> token for tracking, you need to use Shippo's 
predefined tokens for testing different tracking statuses. You can find more information in our 
<a href="https://docs.goshippo.com/docs/tracking/tracking/">Tracking tutorial</a> on how to do this, and what the 
payloads look like.      
<SchemaDefinition schemaRef="#/components/schemas/Track"/>

### Available Operations

* [create](#create) - Register a tracking webhook
* [get](#get) - Get a tracking status

## create

Registers a webhook that will send HTTP notifications to you when the status of your tracked package changes. For more details on creating a webhook, see our guides on <a href="https://docs.goshippo.com/docs/tracking/webhooks/">Webhooks</a> and <a href="https://docs.goshippo.com/docs/tracking/tracking/">Tracking</a>.

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
        $tracksRequest = new Components\TracksRequest();
    $tracksRequest->carrier = 'usps';
    $tracksRequest->metadata = 'Order 000123';
    $tracksRequest->trackingNumber = '9205590164917312751089';

    $response = $sdk->trackingStatus->create($tracksRequest, '2018-02-08');

    if ($response->track !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                               | Type                                                                                    | Required                                                                                | Description                                                                             | Example                                                                                 |
| --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- |
| `tracksRequest`                                                                         | [\Shippo\API\Models\Components\TracksRequest](../../Models/Components/TracksRequest.md) | :heavy_check_mark:                                                                      | N/A                                                                                     |                                                                                         |
| `shippoApiVersion`                                                                      | *string*                                                                                | :heavy_minus_sign:                                                                      | String used to pick a non-default API version to use                                    | 2018-02-08                                                                              |


### Response

**[?\Shippo\API\Models\Operations\CreateTrackResponse](../../Models/Operations/CreateTrackResponse.md)**


## get

Returns the tracking status of a shipment using a carrier name and a tracking number.

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
    

    $response = $sdk->trackingStatus->get('<value>', '<value>', '2018-02-08');

    if ($response->track !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `trackingNumber`                                     | *string*                                             | :heavy_check_mark:                                   | Tracking number                                      |                                                      |
| `carrier`                                            | *string*                                             | :heavy_check_mark:                                   | Name of the carrier                                  |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\GetTrackResponse](../../Models/Operations/GetTrackResponse.md)**

