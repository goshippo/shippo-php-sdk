# Orders


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
    

    $response = $sdk->orders->list(768578, 99895, '2018-02-08');

    if ($response->orderPaginatedList !== null) {
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

**[?\Shippo\API\Models\Operations\ListOrdersResponse](../../Models/Operations/ListOrdersResponse.md)**


## create

Creates a new order object.

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
        $orderCreateRequest = new Components\OrderCreateRequest();
    $orderCreateRequest->currency = 'USD';
    $orderCreateRequest->notes = 'This customer is a VIP';
    $orderCreateRequest->orderNumber = '#1068';
    $orderCreateRequest->orderStatus = Components\OrderStatusEnum::Paid;
    $orderCreateRequest->placedAt = '2016-09-23T01:28:12Z';
    $orderCreateRequest->shippingCost = '12.83';
    $orderCreateRequest->shippingCostCurrency = 'USD';
    $orderCreateRequest->shippingMethod = 'USPS First Class Package';
    $orderCreateRequest->subtotalPrice = '12.1';
    $orderCreateRequest->totalPrice = '24.93';
    $orderCreateRequest->totalTax = '0.0';
    $orderCreateRequest->weight = '0.4';
    $orderCreateRequest->weightUnit = Components\WeightUnitEnum::Lb;
    $orderCreateRequest->fromAddress = new Components\AddressCreateRequest();
    $orderCreateRequest->fromAddress->name = 'Shwan Ippotle';
    $orderCreateRequest->fromAddress->company = 'Shippo';
    $orderCreateRequest->fromAddress->street1 = '215 Clayton St.';
    $orderCreateRequest->fromAddress->street2 = '<value>';
    $orderCreateRequest->fromAddress->street3 = '';
    $orderCreateRequest->fromAddress->streetNo = '';
    $orderCreateRequest->fromAddress->city = 'San Francisco';
    $orderCreateRequest->fromAddress->state = 'CA';
    $orderCreateRequest->fromAddress->zip = '94117';
    $orderCreateRequest->fromAddress->country = 'US';
    $orderCreateRequest->fromAddress->phone = '+1 555 341 9393';
    $orderCreateRequest->fromAddress->email = 'shippotle@shippo.com';
    $orderCreateRequest->fromAddress->isResidential = true;
    $orderCreateRequest->fromAddress->metadata = 'Customer ID 123456';
    $orderCreateRequest->fromAddress->validate = true;
    $orderCreateRequest->toAddress = new Components\AddressCreateRequest();
    $orderCreateRequest->toAddress->name = 'Shwan Ippotle';
    $orderCreateRequest->toAddress->company = 'Shippo';
    $orderCreateRequest->toAddress->street1 = '215 Clayton St.';
    $orderCreateRequest->toAddress->street2 = '<value>';
    $orderCreateRequest->toAddress->street3 = '';
    $orderCreateRequest->toAddress->streetNo = '';
    $orderCreateRequest->toAddress->city = 'San Francisco';
    $orderCreateRequest->toAddress->state = 'CA';
    $orderCreateRequest->toAddress->zip = '94117';
    $orderCreateRequest->toAddress->country = 'US';
    $orderCreateRequest->toAddress->phone = '+1 555 341 9393';
    $orderCreateRequest->toAddress->email = 'shippotle@shippo.com';
    $orderCreateRequest->toAddress->isResidential = true;
    $orderCreateRequest->toAddress->metadata = 'Customer ID 123456';
    $orderCreateRequest->toAddress->validate = true;
    $orderCreateRequest->lineItems = [
        new Components\LineItemBase(),
    ];

    $response = $sdk->orders->create($orderCreateRequest, '2018-02-08');

    if ($response->order !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       | Example                                                                                           |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `orderCreateRequest`                                                                              | [\Shippo\API\Models\Components\OrderCreateRequest](../../Models/Components/OrderCreateRequest.md) | :heavy_check_mark:                                                                                | Order details.                                                                                    |                                                                                                   |
| `shippoApiVersion`                                                                                | *string*                                                                                          | :heavy_minus_sign:                                                                                | String used to pick a non-default API version to use                                              | 2018-02-08                                                                                        |


### Response

**[?\Shippo\API\Models\Operations\CreateOrderResponse](../../Models/Operations/CreateOrderResponse.md)**


## get

Retrieves an existing order using an object ID.

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
    

    $response = $sdk->orders->get('<value>', '2018-02-08');

    if ($response->order !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          | Example                                              |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `orderId`                                            | *string*                                             | :heavy_check_mark:                                   | Object ID of the order                               |                                                      |
| `shippoApiVersion`                                   | *string*                                             | :heavy_minus_sign:                                   | String used to pick a non-default API version to use | 2018-02-08                                           |


### Response

**[?\Shippo\API\Models\Operations\GetOrderResponse](../../Models/Operations/GetOrderResponse.md)**

