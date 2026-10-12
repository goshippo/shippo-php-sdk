# Transactions

## Overview

A transaction is the purchase of a shipping label from a shipping provider for a specific service. You can print purchased labels and used them to ship a parcel with a carrier, such as USPS or FedEx.

### Available Operations

* [list](#list) - List all shipping labels
* [create](#create) - Create a shipping label
* [get](#get) - Retrieve a shipping label

## list

Returns a list of all transaction objects.

To filter results by creation date, use the optional query parameters below. Provided dates should be ISO 8601 UTC dates (timezone offsets are currently not supported).

- `object_created_gt`: object(s) created after the provided date time
- `object_created_gte`: object(s) created at or after the provided date time
- `object_created_lt`: object(s) created before the provided date time
- `object_created_lte`: object(s) created at or before the provided date time

Provide at most one lower bound (`object_created_gt` or `object_created_gte`) and at most one upper bound (`object_created_lt` or `object_created_lte`) per request. Lower bounds must not be in the future.

Date format examples: `2017-01-01`, `2017-01-01T03:30:30` (or `2017-01-01T03:30:30.5`), `2017-01-01T03:30:30Z`

Example URL: `https://api.goshippo.com/transactions/?object_created_gte=2017-01-01T00:00:30&object_created_lt=2017-04-01T00:00:30`

### Example Usage

<!-- UsageSnippet language="php" operationID="ListTransactions" method="get" path="/transactions" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;
use Shippo\API\Models\Operations;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListTransactionsRequest(
    objectStatus: Components\TransactionStatusEnum::Success,
    trackingStatus: Components\TrackingStatusEnum::Delivered,
);

$response = $sdk->transactions->list(
    request: $request
);

if ($response->transactionPaginatedList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListTransactionsRequest](../../Models/Operations/ListTransactionsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Components\TransactionPaginatedList](../../Models/Components/TransactionPaginatedList.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## create

Creates a new transaction object and purchases the shipping label using a rate object that has previously been created.

Alternatively, creates a new transaction object and purchases the shipping label instantly using shipment details, an existing carrier account, and an existing service level token.

### Example Usage

<!-- UsageSnippet language="php" operationID="CreateTransaction" method="post" path="/transactions" -->
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



$response = $sdk->transactions->create(
    requestBody: new Components\TransactionCreateRequest(
        async: false,
        labelFileType: Components\LabelFileTypeEnum::PDF4x6,
        metadata: 'Order ID #12345',
        rate: 'ec9f0d3adc9441449c85d315f0997fd5',
        order: 'adcfdddf8ec64b84ad22772bce3ea37a',
    )
);

if ($response->transaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `requestBody`                                                                                                                                           | [Components\TransactionCreateRequest\|Components\InstantTransactionCreateRequest](../../Models/Operations/CreateTransactionRequestBody.md)              | :heavy_check_mark:                                                                                                                                      | Examples.                                                                                                                                               |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |

### Response

**[?Components\Transaction](../../Models/Components/Transaction.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## get

Returns an existing transaction using an object ID.

### Example Usage

<!-- UsageSnippet language="php" operationID="GetTransaction" method="get" path="/transactions/{TransactionId}" -->
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



$response = $sdk->transactions->get(
    transactionId: '<id>'
);

if ($response->transaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `transactionId`                                                                                                                                         | *string*                                                                                                                                                | :heavy_check_mark:                                                                                                                                      | Object ID of the transaction to update                                                                                                                  |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |

### Response

**[?Components\Transaction](../../Models/Components/Transaction.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |