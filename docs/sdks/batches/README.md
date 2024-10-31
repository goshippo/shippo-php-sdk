# Batches
(*batches*)

## Overview

A batch is a technique for creating multiple labels at once. Use the  batch object to create and purchase many shipments in two API calls. After creating the batch, retrieve the batch to verify that all shipments are valid. You can add and remove shipments after you have created the batch. When all shipments are valid you can purchase the batch and retrieve all the shipping labels.
<SchemaDefinition schemaRef="#/components/schemas/Batch"/>

# Batch Shipment
The batch shipment object is a wrapper around a shipment object, which include shipment-specific information 
for batch processing.

Note: batch shipments can only be created on the batch endpoint, either when creating a batch object or by through 
the `/batches/{BATCH_OBJECT_ID}/add_shipments` endpoint
<SchemaDefinition schemaRef="#/components/schemas/BatchShipment"/>

### Available Operations

* [create](#create) - Create a batch
* [get](#get) - Retrieve a batch
* [addShipments](#addshipments) - Add shipments to a batch
* [purchase](#purchase) - Purchase a batch
* [removeShipments](#removeshipments) - Remove shipments from a batch

## create

Creates a new batch object for purchasing shipping labels for many shipments at once. Batches are created asynchronously. This means that the API response won't include your batch shipments yet. You need to retrieve the batch later to verify that all batch shipments are valid.

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

$batchCreateRequest = new Components\BatchCreateRequest(
    defaultCarrierAccount: '078870331023437cb917f5187429b093',
    defaultServicelevelToken: 'usps_priority',
    batchShipments: [
        new Components\BatchShipmentCreateRequest(
            shipment: new Components\ShipmentCreateRequest(
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
            ),
            carrierAccount: 'a4391cd4ab974f478f55dc08b5c8e3b3',
            metadata: 'SHIPMENT #1',
            servicelevelToken: 'fedex_ground',
        ),
    ],
    labelFiletype: Components\LabelFileTypeEnum::PDF4x6,
    metadata: 'BATCH #1',
);

$response = $sdk->batches->create(
    batchCreateRequest: $batchCreateRequest,
    shippoApiVersion: '2018-02-08'

);

if ($response->batch !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `batchCreateRequest`                                                                                                                                               | [Components\BatchCreateRequest](../../Models/Components/BatchCreateRequest.md)                                                                                     | :heavy_check_mark:                                                                                                                                                 | Batch details.                                                                                                                                                     |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Operations\CreateBatchResponse](../../Models/Operations/CreateBatchResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## get

Returns a batch using an object ID. <br> Batch shipments are displayed 100 at a time.  You can iterate 
through each `page` using the `?page= query` parameter.  You can also filter based on batch shipment 
status, for example, by passing a query param like `?object_results=creation_failed`. <br> 
For more details on filtering results, see our guide on <a href="https://docs.goshippo.com/docs/api_concepts/filtering/" target="blank"> filtering</a>.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();



$response = $sdk->batches->get(
    batchId: '<id>',
    shippoApiVersion: '2018-02-08'

);

if ($response->batch !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `batchId`                                                                                                                                                          | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the batch                                                                                                                                             |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Operations\GetBatchResponse](../../Models/Operations/GetBatchResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## addShipments

Adds batch shipments to an existing batch.

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



$response = $sdk->batches->addShipments(
    batchId: '<id>',
    requestBody: [
        new Components\BatchShipmentCreateRequest(
            shipment: new Components\ShipmentCreateRequest(
                addressFrom: 'd799c2679e644279b59fe661ac8fa488',
                addressTo: new Components\AddressCreateRequest(
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
                parcels: [
                    new Components\ParcelCreateRequest(
                        massUnit: Components\WeightUnitEnum::Lb,
                        weight: '1',
                        distanceUnit: Components\DistanceUnitEnum::In,
                        height: '1',
                        length: '1',
                        width: '1',
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
            ),
            carrierAccount: 'a4391cd4ab974f478f55dc08b5c8e3b3',
            metadata: 'SHIPMENT #1',
            servicelevelToken: 'fedex_ground',
        ),
    ],
    shippoApiVersion: '2018-02-08'

);

if ($response->batch !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `batchId`                                                                                                                                                          | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the batch                                                                                                                                             |                                                                                                                                                                    |
| `requestBody`                                                                                                                                                      | array<[Components\BatchShipmentCreateRequest](../../Models/Components/BatchShipmentCreateRequest.md)>                                                              | :heavy_check_mark:                                                                                                                                                 | Array of shipments to add to the batch                                                                                                                             |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Operations\AddShipmentsToBatchResponse](../../Models/Operations/AddShipmentsToBatchResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## purchase

Purchases an existing batch with a status of `VALID`. 
Once you send a POST request to the purchase endpoint the batch status will change to `PURCHASING`. 
When all the shipments are purchased, the status will change to `PURCHASED` and you will receive a 
`batch_purchased` webhook indicating that the batch has been purchased

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();



$response = $sdk->batches->purchase(
    batchId: '<id>',
    shippoApiVersion: '2018-02-08'

);

if ($response->batch !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `batchId`                                                                                                                                                          | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the batch                                                                                                                                             |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Operations\PurchaseBatchResponse](../../Models/Operations/PurchaseBatchResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeShipments

Removes shipments from an existing batch shipment.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();



$response = $sdk->batches->removeShipments(
    batchId: '<id>',
    requestBody: [
        '<value>',
    ],
    shippoApiVersion: '2018-02-08'

);

if ($response->batch !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `batchId`                                                                                                                                                          | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the batch                                                                                                                                             |                                                                                                                                                                    |
| `requestBody`                                                                                                                                                      | array<*string*>                                                                                                                                                    | :heavy_check_mark:                                                                                                                                                 | Array of shipments object ids to remove from the batch                                                                                                             |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Operations\RemoveShipmentsFromBatchResponse](../../Models/Operations/RemoveShipmentsFromBatchResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |