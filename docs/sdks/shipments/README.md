# Shipments
(*shipments*)

## Overview

A shipment is the act of transporting goods. A shipment object contains **to** and **from** addresses, and the parcel details that you are shipping. You can use the shipment object to retrieve shipping rates and purchase a shipping label.
<SchemaDefinition schemaRef="#/components/schemas/Shipment"/>
 
# Shipment Extras
The following values are supported for the `extra` field of the shipment object.
<SchemaDefinition schemaRef="#/components/schemas/ShipmentExtra"/>

### Available Operations

* [create](#create) - Create a new shipment
* [get](#get) - Retrieve a shipment
* [list](#list) - List all shipments

## create

Creates a new shipment object.

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

$shipmentCreateRequest = new Components\ShipmentCreateRequest(
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
    addressTo: 'd799c2679e644279b59fe661ac8fa489',
    parcels: [
        new Components\ParcelCreateFromTemplateRequest(
            massUnit: Components\WeightUnitEnum::Lb,
            weight: '1',
            template: Components\ParcelTemplateFedExEnum::FedExBox25kg,
            extra: new Components\ParcelExtra(
                cod: new Components\Cod(
                    amount: '5.5',
                    currency: 'USD',
                    paymentMethod: Components\PaymentMethod::Cash,
                ),
                insurance: new Components\ParcelInsurance(
                    amount: '5.5',
                    content: 'Laptop',
                    currency: 'USD',
                    provider: Components\ParcelInsuranceProvider::Ups,
                ),
            ),
            metadata: 'Customer ID 123456',
        ),
    ],
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
    addressReturn: 'd799c2679e644279b59fe661ac8fa488',
    customsDeclaration: 'adcfdddf8ec64b84ad22772bce3ea37a',
    carrierAccounts: [
        '065a4a8c10d24a34ab932163a1b87f52',
        '73f706f4bdb94b54a337563840ce52b0',
    ],
);

$response = $sdk->shipments->create(
    shipmentCreateRequest: $shipmentCreateRequest,
    shippoApiVersion: '2018-02-08'

);

if ($response->shipment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `shipmentCreateRequest`                                                                                                                                            | [Components\ShipmentCreateRequest](../../Models/Components/ShipmentCreateRequest.md)                                                                               | :heavy_check_mark:                                                                                                                                                 | Shipment details and contact info.                                                                                                                                 |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\Shipment](../../Models/Components/Shipment.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## get

Returns an existing shipment using an object ID

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



$response = $sdk->shipments->get(
    shipmentId: '<id>',
    shippoApiVersion: '2018-02-08'

);

if ($response->shipment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `shipmentId`                                                                                                                                                       | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the shipment to update                                                                                                                                |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\Shipment](../../Models/Components/Shipment.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## list

Returns a list of all shipment objects.<br><br>
In order to filter results, you must use the below path parameters. 
A maximum date range of 90 days is permitted. 
Provided dates should be ISO 8601 UTC dates (timezone offsets are currently not supported).<br><br>

Optional path parameters:<br>
  `object_created_gt`- object(s) created greater than a provided date time<br>
  `object_created_gte` - object(s) created greater than or equal to a provided date time<br>
  `object_created_lt` - object(s) created less than a provided date time<br>
  `object_created_lte` - object(s) created less than or equal to a provided date time<br>

  Date format examples:<br>
    `2017-01-01`<br>
    `2017-01-01T03:30:30` or `2017-01-01T03:30:30.5`<br>
    `2017-01-01T03:30:30Z`<br><br>

  Example URL:<br>
    `https://api.goshippo.com/shipments/?object_created_gte=2017-01-01T00:00:30&object_created_lt=2017-04-01T00:00:30`

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Operations;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
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