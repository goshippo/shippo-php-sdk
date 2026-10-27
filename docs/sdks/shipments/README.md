# Shipments

## Overview

A shipment is the act of transporting goods. A shipment object contains **to** and **from** addresses, and the parcel details that you are shipping. You can use the shipment object to retrieve shipping rates and purchase a shipping label.

### Available Operations

* [list](#list) - List all shipments
* [create](#create) - Create a new shipment
* [get](#get) - Retrieve a shipment

## list

Returns a list of all shipment objects.

To filter results, use the optional query parameters below. Provided dates should be ISO 8601 UTC dates (timezone offsets are currently not supported).

- `object_created_gt`: object(s) created after the provided date time
- `object_created_gte`: object(s) created at or after the provided date time
- `object_created_lt`: object(s) created before the provided date time
- `object_created_lte`: object(s) created at or before the provided date time

Date format examples: `2017-01-01`, `2017-01-01T03:30:30` (or `2017-01-01T03:30:30.5`), `2017-01-01T03:30:30Z`

Example URL: `https://api.goshippo.com/shipments/?object_created_gte=2017-01-01T00:00:30&object_created_lt=2017-04-01T00:00:30`

Note: Shipment objects older than 390 days are not returned.

### Example Usage

<!-- UsageSnippet language="php" operationID="ListShipments" method="get" path="/shipments" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Operations;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListShipmentsRequest();

$response = $sdk->shipments->list(
    request: $request
);

if ($response->shipmentPaginatedList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListShipmentsRequest](../../Models/Operations/ListShipmentsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Components\ShipmentPaginatedList](../../Models/Components/ShipmentPaginatedList.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## create

Creates a new shipment object.

### Example Usage

<!-- UsageSnippet language="php" operationID="CreateShipment" method="post" path="/shipments" -->
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

$shipmentCreateRequest = new Components\ShipmentCreateRequest(
    extra: new Components\ShipmentExtra(
        accountsReceivableCustomerAccount: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
        appropriationNumber: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
        billOfLadingNumber: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
        cod: new Components\Cod(
            amount: '5.5',
            currency: 'USD',
            paymentMethod: Components\PaymentMethod::Cash,
        ),
        codNumber: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
        customerReference: new Components\CustomerReference(
            refSort: 1,
        ),
        dealerOrderNumber: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
        deptNumber: new Components\DepartmentNumber(
            refSort: 3,
        ),
        fdaProductCode: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
        insurance: new Components\Insurance(
            amount: '5.5',
            currency: 'USD',
        ),
        invoiceNumber: new Components\InvoiceNumber(
            refSort: 2,
        ),
        manifestNumber: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
        modelNumber: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
        partNumber: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
        poNumber: new Components\PoNumber(
            refSort: 2,
        ),
        productionCode: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
        purchaseRequestNumber: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
        rmaNumber: new Components\RmaNumber(
            refSort: 1,
        ),
        salespersonNumber: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
        serialNumber: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
        storeNumber: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
        transactionReferenceNumber: new Components\UPSReferenceFields(
            prefix: 'ABC',
            value: 'value',
            refSort: 1,
        ),
    ),
    metadata: 'Customer ID 123456',
    shipmentDate: '2021-03-22T12:00:00Z',
    addressFrom: 'd799c2679e644279b59fe661ac8fa488',
    addressReturn: 'd799c2679e644279b59fe661ac8fa488',
    addressTo: 'd799c2679e644279b59fe661ac8fa489',
    customsDeclaration: 'adcfdddf8ec64b84ad22772bce3ea37a',
    carrierAccounts: [
        '065a4a8c10d24a34ab932163a1b87f52',
        '73f706f4bdb94b54a337563840ce52b0',
    ],
    parcels: [
        '<value>',
    ],
);

$response = $sdk->shipments->create(
    shipmentCreateRequest: $shipmentCreateRequest
);

if ($response->shipment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `shipmentCreateRequest`                                                                                                                                 | [Components\ShipmentCreateRequest](../../Models/Components/ShipmentCreateRequest.md)                                                                    | :heavy_check_mark:                                                                                                                                      | Shipment details and contact info.                                                                                                                      |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |

### Response

**[?Components\Shipment](../../Models/Components/Shipment.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## get

Returns an existing shipment using an object ID. Shipment objects older than 390 days are not returned.

### Example Usage

<!-- UsageSnippet language="php" operationID="GetShipment" method="get" path="/shipments/{ShipmentId}" -->
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



$response = $sdk->shipments->get(
    shipmentId: '<id>'
);

if ($response->shipment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `shipmentId`                                                                                                                                            | *string*                                                                                                                                                | :heavy_check_mark:                                                                                                                                      | Object ID of the shipment to update                                                                                                                     |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |

### Response

**[?Components\Shipment](../../Models/Components/Shipment.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |