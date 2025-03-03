# RatesAtCheckout
(*ratesAtCheckout*)

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
* [deleteDefaultParcelTemplate](#deletedefaultparceltemplate) - Clear current default parcel template
* [getDefaultParcelTemplate](#getdefaultparceltemplate) - Show current default parcel template
* [updateDefaultParcelTemplate](#updatedefaultparceltemplate) - Update default parcel template

## create

Initiates a live rates request. Include either the object ID for
an existing address record or a fully formed address object when entering
an address value. You can also enter the object ID of an existing user parcel
template or a fully formed user parcel template object as the parcel value.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;
use Shippo\API\Utils;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();

$liveRateCreateRequest = new Components\LiveRateCreateRequest(
    addressTo: '<value>',
    lineItems: [
        new Components\LineItem(
            currency: 'USD',
            manufactureCountry: 'US',
            maxDeliveryTime: Utils\Utils::parseDateTime('2016-07-23T00:00:00Z'),
            maxShipTime: Utils\Utils::parseDateTime('2016-07-23T00:00:00Z'),
            quantity: 20,
            sku: 'HM-123',
            title: 'Hippo Magazines',
            totalPrice: '12.1',
            variantTitle: 'June Edition',
            weight: '0.4',
            weightUnit: Components\WeightUnitEnum::Lb,
            objectId: 'abf7d5675d744b6ea9fdb6f796b28f28',
        ),
    ],
    addressFrom: new Components\AddressCompleteCreateRequest(
        name: 'Shwan Ippotle',
        street1: '215 Clayton St.',
        city: 'San Francisco',
        state: 'CA',
        zip: '94117',
        country: 'US',
        company: 'Shippo',
        street3: '',
        streetNo: '',
        phone: '+1 555 341 9393',
        email: 'shippotle@shippo.com',
        isResidential: true,
        metadata: 'Customer ID 123456',
        validate: true,
    ),
    parcel: '5df144dca289442cv7a06',
);

$response = $sdk->ratesAtCheckout->create(
    liveRateCreateRequest: $liveRateCreateRequest,
    shippoApiVersion: '2018-02-08'

);

if ($response->liveRatePaginatedList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `liveRateCreateRequest`                                                                                                                                            | [Components\LiveRateCreateRequest](../../Models/Components/LiveRateCreateRequest.md)                                                                               | :heavy_check_mark:                                                                                                                                                 | Generate rates at checkout                                                                                                                                         |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\LiveRatePaginatedList](../../Models/Components/LiveRatePaginatedList.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## deleteDefaultParcelTemplate

Clears the currently configured default parcel template for live rates.

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



$response = $sdk->ratesAtCheckout->deleteDefaultParcelTemplate(
    shippoApiVersion: '2018-02-08'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## getDefaultParcelTemplate

Retrieve and display the currently configured default parcel template for live rates.

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



$response = $sdk->ratesAtCheckout->getDefaultParcelTemplate(
    shippoApiVersion: '2018-02-08'
);

if ($response->defaultParcelTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\DefaultParcelTemplate](../../Models/Components/DefaultParcelTemplate.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## updateDefaultParcelTemplate

Update the currently configured default parcel template for live rates. The object_id in the request payload should identify the user parcel template to be the new default.

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

$defaultParcelTemplateUpdateRequest = new Components\DefaultParcelTemplateUpdateRequest(
    objectId: 'b958d3690bb04bb8b2986724872750f5',
);

$response = $sdk->ratesAtCheckout->updateDefaultParcelTemplate(
    shippoApiVersion: '2018-02-08',
    defaultParcelTemplateUpdateRequest: $defaultParcelTemplateUpdateRequest

);

if ($response->defaultParcelTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |
| `defaultParcelTemplateUpdateRequest`                                                                                                                               | [?Components\DefaultParcelTemplateUpdateRequest](../../Models/Components/DefaultParcelTemplateUpdateRequest.md)                                                    | :heavy_minus_sign:                                                                                                                                                 | N/A                                                                                                                                                                |                                                                                                                                                                    |

### Response

**[?Components\DefaultParcelTemplate](../../Models/Components/DefaultParcelTemplate.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |