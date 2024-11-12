# Orders
(*orders*)

## Overview

An order is a request from a customer to purchase goods from a merchant. 
Use the orders object to load orders from your system to the Shippo dashboard.
You can use the orders object to create, retrieve, list, and manage orders programmatically. 
You can also retrieve shipping rates, purchase labels, and track shipments for each order.
<SchemaDefinition schemaRef="#/components/schemas/Order"/>

# Line Item
<p style="text-align: center; background-color: #F2F3F4;">
  </br>Line Items, and their corresponding abstract Products and Variants, might be exposed as a separate resource 
  in the future. Currently it's a nested object within the order resource.</br></br>
</p>
 A line item is an individual object in an order. For example, if your order contains a t-shirt, shorts, and a jacket, each item is represented by a line item.
<SchemaDefinition schemaRef="#/components/schemas/LineItem"/>

### Available Operations

* [list](#list) - List all orders
* [create](#create) - Create a new order
* [get](#get) - Retrieve an order

## list

Returns a list of all order objects.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;
use Shippo\API\Models\Operations;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();

$request = new Operations\ListOrdersRequest(
    orderStatus: [
        Components\OrderStatusEnum::Paid,
    ],
    shopApp: Components\OrderShopAppEnum::Shippo,
);

$response = $sdk->orders->list(
    request: $request
);

if ($response->orderPaginatedList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\ListOrdersRequest](../../Models/Operations/ListOrdersRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\ListOrdersResponse](../../Models/Operations/ListOrdersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## create

Creates a new order object.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;
use Shippo\API\Utils;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();

$orderCreateRequest = new Components\OrderCreateRequest(
    placedAt: '2016-09-23T01:28:12Z',
    toAddress: new Components\AddressCreateRequest(
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
    currency: 'USD',
    notes: 'This customer is a VIP',
    orderNumber: '#1068',
    orderStatus: Components\OrderStatusEnum::Paid,
    shippingCost: '12.83',
    shippingCostCurrency: 'USD',
    shippingMethod: 'USPS First Class Package',
    subtotalPrice: '12.1',
    totalPrice: '24.93',
    totalTax: '0.0',
    weight: '0.4',
    weightUnit: Components\WeightUnitEnum::Lb,
    fromAddress: new Components\AddressCreateRequest(
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
    lineItems: [
        new Components\LineItemBase(
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
        ),
    ],
);

$response = $sdk->orders->create(
    orderCreateRequest: $orderCreateRequest,
    shippoApiVersion: '2018-02-08'

);

if ($response->order !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `orderCreateRequest`                                                                                                                                               | [Components\OrderCreateRequest](../../Models/Components/OrderCreateRequest.md)                                                                                     | :heavy_check_mark:                                                                                                                                                 | Order details.                                                                                                                                                     |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Operations\CreateOrderResponse](../../Models/Operations/CreateOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## get

Retrieves an existing order using an object ID.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();



$response = $sdk->orders->get(
    orderId: '<id>',
    shippoApiVersion: '2018-02-08'

);

if ($response->order !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `orderId`                                                                                                                                                          | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | Object ID of the order                                                                                                                                             |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Operations\GetOrderResponse](../../Models/Operations/GetOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |