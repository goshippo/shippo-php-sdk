# CustomsDeclarations


## Overview

Customs declarations are relevant information, including one or multiple customs items, you need to provide for 
customs clearance for your international shipments.
<SchemaDefinition schemaRef="#/components/schemas/CustomsDeclaration"/>

### Available Operations

* [list](#list) - List all customs declarations
* [create](#create) - Create a new customs declaration
* [get](#get) - Retrieve a customs declaration

## list

Returns a a list of all customs declaration objects

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
    

    $response = $sdk->customsDeclarations->list(768578, 99895, '2018-02-08');

    if ($response->customsDeclarationPaginatedList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                     | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `page`                                                        | *int*                                                         | :heavy_minus_sign:                                            | The page number you want to select                            |                                                               |
| `results`                                                     | *int*                                                         | :heavy_minus_sign:                                            | The number of results to return per page (max 100, default 5) |                                                               |
| `shippoApiVersion`                                            | *string*                                                      | :heavy_minus_sign:                                            | String used to pick a non-default API version to use          | 2018-02-08                                                    |


### Response

**[?\Shippo\API\Models\Operations\ListCustomsDeclarationsResponse](../../Models/Operations/ListCustomsDeclarationsResponse.md)**


## create

Creates a new customs declaration object

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
        $customsDeclarationCreateRequest = new Components\CustomsDeclarationCreateRequest();
    $customsDeclarationCreateRequest->aesItn = '<value>';
    $customsDeclarationCreateRequest->b13aFilingOption = Components\CustomsDeclarationB13AFilingOptionEnum::FiledElectronically;
    $customsDeclarationCreateRequest->b13aNumber = '<value>';
    $customsDeclarationCreateRequest->certificate = '<value>';
    $customsDeclarationCreateRequest->certify = true;
    $customsDeclarationCreateRequest->certifySigner = 'Shawn Ippotle';
    $customsDeclarationCreateRequest->commercialInvoice = false;
    $customsDeclarationCreateRequest->contentsExplanation = 'T-Shirt purchase';
    $customsDeclarationCreateRequest->disclaimer = '<value>';
    $customsDeclarationCreateRequest->exporterIdentification = new Components\CustomsExporterIdentification();
    $customsDeclarationCreateRequest->exporterIdentification->eoriNumber = 'PL123456790ABCDE';
    $customsDeclarationCreateRequest->exporterIdentification->taxId = new Components\CustomsTaxIdentification();
    $customsDeclarationCreateRequest->exporterIdentification->taxId->number = '123456789';
    $customsDeclarationCreateRequest->exporterIdentification->taxId->type = Components\CustomsTaxIdentificationType::Ein;
    $customsDeclarationCreateRequest->exporterReference = '<value>';
    $customsDeclarationCreateRequest->importerReference = '<value>';
    $customsDeclarationCreateRequest->isVatCollected = false;
    $customsDeclarationCreateRequest->invoice = '#123123';
    $customsDeclarationCreateRequest->license = '<value>';
    $customsDeclarationCreateRequest->metadata = 'Order ID #123123';
    $customsDeclarationCreateRequest->notes = '<value>';
    $customsDeclarationCreateRequest->addressImporter = new Components\AddressImporter();
    $customsDeclarationCreateRequest->addressImporter->name = 'Shwan Ippotle';
    $customsDeclarationCreateRequest->addressImporter->company = 'Shippo';
    $customsDeclarationCreateRequest->addressImporter->street1 = 'Blumenstraße';
    $customsDeclarationCreateRequest->addressImporter->street2 = '<value>';
    $customsDeclarationCreateRequest->addressImporter->street3 = '';
    $customsDeclarationCreateRequest->addressImporter->streetNo = '22';
    $customsDeclarationCreateRequest->addressImporter->city = 'München';
    $customsDeclarationCreateRequest->addressImporter->state = 'CA';
    $customsDeclarationCreateRequest->addressImporter->zip = '80331';
    $customsDeclarationCreateRequest->addressImporter->country = 'DE';
    $customsDeclarationCreateRequest->addressImporter->phone = '80331';
    $customsDeclarationCreateRequest->addressImporter->email = 'shippotle@shippo.com';
    $customsDeclarationCreateRequest->addressImporter->isResidential = true;
    $customsDeclarationCreateRequest->contentsType = Components\CustomsDeclarationContentsTypeEnum::Merchandise;
    $customsDeclarationCreateRequest->eelPfc = Components\CustomsDeclarationEelPfcEnum::NOEEI3037A;
    $customsDeclarationCreateRequest->incoterm = Components\CustomsDeclarationIncotermEnum::Ddp;
    $customsDeclarationCreateRequest->items = [
        new Components\CustomsItemCreateRequest(),
    ];
    $customsDeclarationCreateRequest->nonDeliveryOption = Components\CustomsDeclarationNonDeliveryOptionEnum::Return;
    $customsDeclarationCreateRequest->test = true;

    $response = $sdk->customsDeclarations->create($customsDeclarationCreateRequest, '2018-02-08');

    if ($response->customsDeclaration !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 | Example                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `customsDeclarationCreateRequest`                                                                                           | [\Shippo\API\Models\Components\CustomsDeclarationCreateRequest](../../Models/Components/CustomsDeclarationCreateRequest.md) | :heavy_check_mark:                                                                                                          | CustomsDeclaration details.                                                                                                 |                                                                                                                             |
| `shippoApiVersion`                                                                                                          | *string*                                                                                                                    | :heavy_minus_sign:                                                                                                          | String used to pick a non-default API version to use                                                                        | 2018-02-08                                                                                                                  |


### Response

**[?\Shippo\API\Models\Operations\CreateCustomsDeclarationResponse](../../Models/Operations/CreateCustomsDeclarationResponse.md)**


## get

Returns an existing customs declaration using an object ID

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
    

    $response = $sdk->customsDeclarations->get('<value>', 700347, '2018-02-08');

    if ($response->customsDeclaration !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `customsDeclarationId`                               | *string*                                             | :heavy_check_mark:                                   | Object ID of the customs declaration                 |                                                      |
| `page`                                               | *int*                                                | :heavy_minus_sign:                                   | The page number you want to select                   |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\GetCustomsDeclarationResponse](../../Models/Operations/GetCustomsDeclarationResponse.md)**

