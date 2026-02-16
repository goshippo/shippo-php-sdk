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

Returns a list of all customs declaration objects

### Example Usage

<!-- UsageSnippet language="php" operationID="ListCustomsDeclarations" method="get" path="/customs/declarations" -->
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



$response = $sdk->customsDeclarations->list(
    page: 1,
    results: 5

);

if ($response->customsDeclarationPaginatedList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `page`                                                                                                                                                             | *?int*                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                 | The page number you want to select                                                                                                                                 |                                                                                                                                                                    |
| `results`                                                                                                                                                          | *?int*                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                 | The number of results to return per page (max 100, default 5)                                                                                                      |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\CustomsDeclarationPaginatedList](../../Models/Components/CustomsDeclarationPaginatedList.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## create

Creates a new customs declaration object

### Example Usage

<!-- UsageSnippet language="php" operationID="CreateCustomsDeclaration" method="post" path="/customs/declarations" -->
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

$customsDeclarationCreateRequest = new Components\CustomsDeclarationCreateRequest(
    b13aFilingOption: Components\CustomsDeclarationB13AFilingOptionEnum::FiledElectronically,
    certify: true,
    certifySigner: 'Shawn Ippotle',
    contentsExplanation: 'T-Shirt purchase',
    dutiesPayor: new Components\DutiesPayor(
        account: '2323434543',
        type: Components\CustomsDeclarationCreateRequestType::ThirdParty,
        address: new Components\CustomsDeclarationCreateRequestAddress(
            name: 'Patrick Kavanagh',
            zip: '80331',
            country: 'DE',
        ),
    ),
    exporterIdentification: new Components\CustomsExporterIdentification(
        eoriNumber: 'PL123456790ABCDE',
        taxId: new Components\CustomsTaxIdentification(
            number: '123456789',
            type: Components\CustomsTaxIdentificationType::Ein,
        ),
    ),
    invoice: '#123123',
    metadata: 'Order ID #123123',
    addressImporter: new Components\AddressImporter(
        name: 'Shwan Ippotle',
        company: 'Shippo',
        street1: 'Blumenstraße',
        street3: '',
        streetNo: '22',
        city: 'München',
        state: 'CA',
        zip: '80331',
        country: 'DE',
        phone: '80331',
        email: 'shippotle@shippo.com',
        isResidential: true,
    ),
    contentsType: Components\CustomsDeclarationContentsTypeEnum::Merchandise,
    eelPfc: Components\CustomsDeclarationEelPfcEnum::NOEEI3037A,
    incoterm: Components\CustomsDeclarationIncotermEnum::Ddp,
    items: [],
    nonDeliveryOption: Components\CustomsDeclarationNonDeliveryOptionEnum::Return,
    test: true,
);

$response = $sdk->customsDeclarations->create(
    customsDeclarationCreateRequest: $customsDeclarationCreateRequest
);

if ($response->customsDeclaration !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `customsDeclarationCreateRequest`                                                                                                                                  | [Components\CustomsDeclarationCreateRequest](../../Models/Components/CustomsDeclarationCreateRequest.md)                                                           | :heavy_check_mark:                                                                                                                                                 | CustomsDeclaration details.                                                                                                                                        |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\CustomsDeclaration](../../Models/Components/CustomsDeclaration.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## get

Returns an existing customs declaration using an object ID

### Example Usage

<!-- UsageSnippet language="php" operationID="GetCustomsDeclaration" method="get" path="/customs/declarations/{CustomsDeclarationId}" -->
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



$response = $sdk->customsDeclarations->get(
    customsDeclarationId: '<id>',
    page: 1

);

if ($response->customsDeclaration !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `customsDeclarationId`                                                                                                                                             | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the customs declaration                                                                                                                               |                                                                                                                                                                    |
| `page`                                                                                                                                                             | *?int*                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                 | The page number you want to select                                                                                                                                 |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\CustomsDeclaration](../../Models/Components/CustomsDeclaration.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |