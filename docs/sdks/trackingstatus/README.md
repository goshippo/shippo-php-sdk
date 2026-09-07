# TrackingStatus

## Overview

<p style="text-align: center; background-color: #F2F3F4;"><br>
If you purchased your shipping label through Shippo, you can also get all the tracking details of your Shipment 
from the [Transaction](/shippoapi/public-api/transactions) object.
<br><br></p>
A tracking status of a package is an indication of current location of a package in the supply chain. For example,  sorting, warehousing, or out for delivery. Use the tracking status object to track the location of your shipments.

When using your [Test](https://docs.goshippo.com/docs/guides_general/authentication/) token for tracking, you need to use Shippo's 
predefined tokens for testing different tracking statuses. You can find more information in our 
[Tracking tutorial](https://docs.goshippo.com/docs/tracking/tracking/) on how to do this, and what the 
payloads look like.      

### Available Operations

* [create](#create) - Register a tracking webhook
* [get](#get) - Get a tracking status

## create

Registers a webhook that will send HTTP notifications to you when the status of your tracked package changes. For more details on creating a webhook, see our guides on [Webhooks](https://docs.goshippo.com/docs/tracking/webhooks/) and [Tracking](https://docs.goshippo.com/docs/tracking/tracking/).

### Example Usage

<!-- UsageSnippet language="php" operationID="CreateTrack" method="post" path="/tracks" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$tracksRequest = new Components\TracksRequest(
    carrier: 'usps',
    metadata: 'Order 000123',
    trackingNumber: '9205590164917312751089',
);

$response = $sdk->trackingStatus->create(
    tracksRequest: $tracksRequest
);

if ($response->track !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `tracksRequest`                                                                                                                                         | [Components\TracksRequest](../../Models/Components/TracksRequest.md)                                                                                    | :heavy_check_mark:                                                                                                                                      | N/A                                                                                                                                                     |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |

### Response

**[?Components\Track](../../Models/Components/Track.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## get

Returns the tracking status of a shipment using a carrier name and a tracking number.

### Example Usage

<!-- UsageSnippet language="php" operationID="GetTrack" method="get" path="/tracks/{Carrier}/{TrackingNumber}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->trackingStatus->get(
    trackingNumber: '<value>',
    carrier: '<value>'

);

if ($response->track !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `trackingNumber`                                                                                                                                        | *string*                                                                                                                                                | :heavy_check_mark:                                                                                                                                      | Tracking number                                                                                                                                         |                                                                                                                                                         |
| `carrier`                                                                                                                                               | *string*                                                                                                                                                | :heavy_check_mark:                                                                                                                                      | Name of the carrier                                                                                                                                     |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |

### Response

**[?Components\Track](../../Models/Components/Track.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |