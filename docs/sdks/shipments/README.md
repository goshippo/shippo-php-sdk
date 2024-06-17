# Shipments


## Overview

A shipment is the act of transporting goods. A shipment object contains **to** and **from** addresses, and the parcel details that you are shipping. You can use the shipment object to retrieve shipping rates and purchase a shipping label.
<SchemaDefinition schemaRef="#/components/schemas/Shipment"/>
 
# Shipment Extras
The following values are supported for the `extra` field of the shipment object.
<SchemaDefinition schemaRef="#/components/schemas/ShipmentExtra"/>

### Available Operations

* [list](#list) - List all shipments
* [create](#create) - Create a new shipment
* [get](#get) - Retrieve a shipment

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
    

    $response = $sdk->shipments->list(768578, 99895, '2018-02-08');

    if ($response->shipmentPaginatedList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `page`                                               | *int*                                                | :heavy_minus_sign:                                   | The page number you want to select                   |                                                      |
| `results`                                            | *int*                                                | :heavy_minus_sign:                                   | The number of results to return per page (max 100)   |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\ListShipmentsResponse](../../Models/Operations/ListShipmentsResponse.md)**


## create

Creates a new shipment object.

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
        $shipmentCreateRequest = new Components\ShipmentCreateRequest();
    $shipmentCreateRequest->extra = new Components\ShipmentExtra();
    $shipmentCreateRequest->extra->accountsReceivableCustomerAccount = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->accountsReceivableCustomerAccount->prefix = 'ABC';
    $shipmentCreateRequest->extra->accountsReceivableCustomerAccount->value = 'value';
    $shipmentCreateRequest->extra->accountsReceivableCustomerAccount->refSort = 1;
    $shipmentCreateRequest->extra->alcohol = new Components\Alcohol();
    $shipmentCreateRequest->extra->alcohol->containsAlcohol = false;
    $shipmentCreateRequest->extra->alcohol->recipientType = Components\RecipientType::Licensee;
    $shipmentCreateRequest->extra->ancillaryEndorsement = Components\AncillaryEndorsement::ForwardingServiceRequested;
    $shipmentCreateRequest->extra->appropriationNumber = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->appropriationNumber->prefix = 'ABC';
    $shipmentCreateRequest->extra->appropriationNumber->value = 'value';
    $shipmentCreateRequest->extra->appropriationNumber->refSort = 1;
    $shipmentCreateRequest->extra->authorityToLeave = false;
    $shipmentCreateRequest->extra->billOfLadingNumber = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->billOfLadingNumber->prefix = 'ABC';
    $shipmentCreateRequest->extra->billOfLadingNumber->value = 'value';
    $shipmentCreateRequest->extra->billOfLadingNumber->refSort = 1;
    $shipmentCreateRequest->extra->billing = new Components\Billing();
    $shipmentCreateRequest->extra->billing->account = '68421709';
    $shipmentCreateRequest->extra->billing->country = '<value>';
    $shipmentCreateRequest->extra->billing->participationCode = '<value>';
    $shipmentCreateRequest->extra->billing->type = Components\Type::ThirdPartyConsignee;
    $shipmentCreateRequest->extra->billing->zip = '98041';
    $shipmentCreateRequest->extra->bypassAddressValidation = false;
    $shipmentCreateRequest->extra->carbonNeutral = false;
    $shipmentCreateRequest->extra->carrierHubId = '<value>';
    $shipmentCreateRequest->extra->carrierHubTravelTime = 301510;
    $shipmentCreateRequest->extra->cod = new Components\Cod();
    $shipmentCreateRequest->extra->cod->amount = '5.5';
    $shipmentCreateRequest->extra->cod->currency = 'USD';
    $shipmentCreateRequest->extra->cod->paymentMethod = Components\PaymentMethod::Cash;
    $shipmentCreateRequest->extra->codNumber = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->codNumber->prefix = 'ABC';
    $shipmentCreateRequest->extra->codNumber->value = 'value';
    $shipmentCreateRequest->extra->codNumber->refSort = 1;
    $shipmentCreateRequest->extra->containerType = '<value>';
    $shipmentCreateRequest->extra->criticalPullTime = '<value>';
    $shipmentCreateRequest->extra->customerBranch = '<value>';
    $shipmentCreateRequest->extra->customerReference = new Components\CustomerReference();
    $shipmentCreateRequest->extra->customerReference->prefix = '<value>';
    $shipmentCreateRequest->extra->customerReference->value = '<value>';
    $shipmentCreateRequest->extra->customerReference->refSort = 1;
    $shipmentCreateRequest->extra->dangerousGoods = new Components\DangerousGoodsObject();
    $shipmentCreateRequest->extra->dangerousGoods->contains = false;
    $shipmentCreateRequest->extra->dangerousGoods->biologicalMaterial = new Components\DangerousGoodsBiologicalMaterial();
    $shipmentCreateRequest->extra->dangerousGoods->biologicalMaterial->contains = false;
    $shipmentCreateRequest->extra->dangerousGoods->lithiumBatteries = new Components\DangerousGoodsLithiumBatteries();
    $shipmentCreateRequest->extra->dangerousGoods->lithiumBatteries->contains = false;
    $shipmentCreateRequest->extra->dangerousGoodsCode = Components\DangerousGoodsCode::One;
    $shipmentCreateRequest->extra->dealerOrderNumber = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->dealerOrderNumber->prefix = 'ABC';
    $shipmentCreateRequest->extra->dealerOrderNumber->value = 'value';
    $shipmentCreateRequest->extra->dealerOrderNumber->refSort = 1;
    $shipmentCreateRequest->extra->deliveryInstructions = '<value>';
    $shipmentCreateRequest->extra->deptNumber = new Components\DepartmentNumber();
    $shipmentCreateRequest->extra->deptNumber->prefix = '<value>';
    $shipmentCreateRequest->extra->deptNumber->value = '<value>';
    $shipmentCreateRequest->extra->deptNumber->refSort = 3;
    $shipmentCreateRequest->extra->dryIce = new Components\DryIce();
    $shipmentCreateRequest->extra->dryIce->containsDryIce = false;
    $shipmentCreateRequest->extra->dryIce->weight = '<value>';
    $shipmentCreateRequest->extra->fdaProductCode = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->fdaProductCode->prefix = 'ABC';
    $shipmentCreateRequest->extra->fdaProductCode->value = 'value';
    $shipmentCreateRequest->extra->fdaProductCode->refSort = 1;
    $shipmentCreateRequest->extra->fulfillmentCenter = '<value>';
    $shipmentCreateRequest->extra->insurance = new Components\Insurance();
    $shipmentCreateRequest->extra->insurance->amount = '5.5';
    $shipmentCreateRequest->extra->insurance->content = '<value>';
    $shipmentCreateRequest->extra->insurance->currency = 'USD';
    $shipmentCreateRequest->extra->insurance->provider = Components\Provider::Ontrac;
    $shipmentCreateRequest->extra->invoiceNumber = new Components\InvoiceNumber();
    $shipmentCreateRequest->extra->invoiceNumber->prefix = '<value>';
    $shipmentCreateRequest->extra->invoiceNumber->value = '<value>';
    $shipmentCreateRequest->extra->invoiceNumber->refSort = 2;
    $shipmentCreateRequest->extra->isReturn = false;
    $shipmentCreateRequest->extra->lasershipAttrs = [
        Components\ShipmentExtraLasershipAttributesEnum::Perishable,
    ];
    $shipmentCreateRequest->extra->lasershipDeclaredValue = '<value>';
    $shipmentCreateRequest->extra->manifestNumber = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->manifestNumber->prefix = 'ABC';
    $shipmentCreateRequest->extra->manifestNumber->value = 'value';
    $shipmentCreateRequest->extra->manifestNumber->refSort = 1;
    $shipmentCreateRequest->extra->modelNumber = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->modelNumber->prefix = 'ABC';
    $shipmentCreateRequest->extra->modelNumber->value = 'value';
    $shipmentCreateRequest->extra->modelNumber->refSort = 1;
    $shipmentCreateRequest->extra->partNumber = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->partNumber->prefix = 'ABC';
    $shipmentCreateRequest->extra->partNumber->value = 'value';
    $shipmentCreateRequest->extra->partNumber->refSort = 1;
    $shipmentCreateRequest->extra->poNumber = new Components\PoNumber();
    $shipmentCreateRequest->extra->poNumber->prefix = '<value>';
    $shipmentCreateRequest->extra->poNumber->value = '<value>';
    $shipmentCreateRequest->extra->poNumber->refSort = 2;
    $shipmentCreateRequest->extra->preferredDeliveryTimeframe = Components\PreferredDeliveryTimeframe::NineteenMillionTwoThousandOneHundred;
    $shipmentCreateRequest->extra->premium = false;
    $shipmentCreateRequest->extra->productionCode = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->productionCode->prefix = 'ABC';
    $shipmentCreateRequest->extra->productionCode->value = 'value';
    $shipmentCreateRequest->extra->productionCode->refSort = 1;
    $shipmentCreateRequest->extra->purchaseRequestNumber = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->purchaseRequestNumber->prefix = 'ABC';
    $shipmentCreateRequest->extra->purchaseRequestNumber->value = 'value';
    $shipmentCreateRequest->extra->purchaseRequestNumber->refSort = 1;
    $shipmentCreateRequest->extra->qrCodeRequested = false;
    $shipmentCreateRequest->extra->reference1 = '<value>';
    $shipmentCreateRequest->extra->reference2 = '<value>';
    $shipmentCreateRequest->extra->requestRetailRates = false;
    $shipmentCreateRequest->extra->returnServiceType = '<value>';
    $shipmentCreateRequest->extra->rmaNumber = new Components\RmaNumber();
    $shipmentCreateRequest->extra->rmaNumber->prefix = '<value>';
    $shipmentCreateRequest->extra->rmaNumber->value = '<value>';
    $shipmentCreateRequest->extra->rmaNumber->refSort = 1;
    $shipmentCreateRequest->extra->saturdayDelivery = false;
    $shipmentCreateRequest->extra->salespersonNumber = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->salespersonNumber->prefix = 'ABC';
    $shipmentCreateRequest->extra->salespersonNumber->value = 'value';
    $shipmentCreateRequest->extra->salespersonNumber->refSort = 1;
    $shipmentCreateRequest->extra->serialNumber = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->serialNumber->prefix = 'ABC';
    $shipmentCreateRequest->extra->serialNumber->value = 'value';
    $shipmentCreateRequest->extra->serialNumber->refSort = 1;
    $shipmentCreateRequest->extra->signatureConfirmation = Components\SignatureConfirmation::CarrierConfirmation;
    $shipmentCreateRequest->extra->storeNumber = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->storeNumber->prefix = 'ABC';
    $shipmentCreateRequest->extra->storeNumber->value = 'value';
    $shipmentCreateRequest->extra->storeNumber->refSort = 1;
    $shipmentCreateRequest->extra->transactionReferenceNumber = new Components\UPSReferenceFields();
    $shipmentCreateRequest->extra->transactionReferenceNumber->prefix = 'ABC';
    $shipmentCreateRequest->extra->transactionReferenceNumber->value = 'value';
    $shipmentCreateRequest->extra->transactionReferenceNumber->refSort = 1;
    $shipmentCreateRequest->metadata = 'Customer ID 123456';
    $shipmentCreateRequest->shipmentDate = '2021-03-22T12:00:00Z';
    $shipmentCreateRequest->addressFrom = '<value>';
    $shipmentCreateRequest->addressReturn = '<value>';
    $shipmentCreateRequest->addressTo = '<value>';
    $shipmentCreateRequest->customsDeclaration = '<value>';
    $shipmentCreateRequest->async = false;
    $shipmentCreateRequest->carrierAccounts = [
        '<value>',
    ];
    $shipmentCreateRequest->parcels = [
        '<value>',
    ];

    $response = $sdk->shipments->create($shipmentCreateRequest, '2018-02-08');

    if ($response->shipment !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             | Example                                                                                                 |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `shipmentCreateRequest`                                                                                 | [\Shippo\API\Models\Components\ShipmentCreateRequest](../../Models/Components/ShipmentCreateRequest.md) | :heavy_check_mark:                                                                                      | Shipment details and contact info.                                                                      |                                                                                                         |
| `shippoApiVersion`                                                                                      | *string*                                                                                                | :heavy_minus_sign:                                                                                      | String used to pick a non-default API version to use                                                    | 2018-02-08                                                                                              |


### Response

**[?\Shippo\API\Models\Operations\CreateShipmentResponse](../../Models/Operations/CreateShipmentResponse.md)**


## get

Returns an existing shipment using an object ID

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
    

    $response = $sdk->shipments->get('<value>', '2018-02-08');

    if ($response->shipment !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `shipmentId`                                         | *string*                                             | :heavy_check_mark:                                   | Object ID of the shipment to update                  |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\GetShipmentResponse](../../Models/Operations/GetShipmentResponse.md)**

