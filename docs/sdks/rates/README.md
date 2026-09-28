# Rates

## Overview

A rate is the cost to ship a parcel from a carrier. The rate object details the service level including the cost and transit time. 

### Available Operations

* [get](#get) - Retrieve a rate
* [listShipmentRates](#listshipmentrates) - Retrieve shipment rates
* [listShipmentRatesByCurrencyCode](#listshipmentratesbycurrencycode) - Retrieve shipment rates in currency

## get

Returns an existing rate using a rate object ID. Rates older than 390 days are not returned.

### Example Usage

<!-- UsageSnippet language="php" operationID="GetRate" method="get" path="/rates/{RateId}" -->
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



$response = $sdk->rates->get(
    rateId: '<id>'
);

if ($response->rate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `rateId`                                                                                                                                                | *string*                                                                                                                                                | :heavy_check_mark:                                                                                                                                      | Object ID of the rate                                                                                                                                   |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |

### Response

**[?Components\Rate](../../Models/Components/Rate.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## listShipmentRates

Returns a paginated list of rates associated with a shipment. Rates for shipments older than 390 days are not returned.

### Example Usage

<!-- UsageSnippet language="php" operationID="ListShipmentRates" method="get" path="/shipments/{ShipmentId}/rates" -->
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

$request = new Operations\ListShipmentRatesRequest(
    shipmentId: '<id>',
);

$response = $sdk->rates->listShipmentRates(
    request: $request
);

if ($response->ratePaginatedList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListShipmentRatesRequest](../../Models/Operations/ListShipmentRatesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Components\RatePaginatedList](../../Models/Components/RatePaginatedList.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## listShipmentRatesByCurrencyCode

Returns all available shipping rates for a shipment object.

When you create a new valid shipment object, Shippo automatically calculates all available rates. Depending on your shipment data, there may be none, one or multiple rates.

By default, the calculated rates will return the price in two currencies under the `amount` and `amount_local` keys, respectively. The `amount` key will contain the price of a rate expressed in the currency that is used in the country from where the parcel originates, and the `amount_local` key will contain the price expressed in the currency that is used in the country the parcel is shipped to. You can request rates with prices expressed in a different currency by adding the currency code to the end of the resource URL. The full list of supported currencies along with their codes can be viewed on [open exchange rates](http://openexchangerates.org/api/currencies.json).

Note: re-requesting the rates with a different currency code will re-queue the shipment (i.e. set the Shipment's `status` to `QUEUED`) and the converted currency rates will only be available when the Shipment's `status` is set to `SUCCESS`.

Rates for shipments older than 390 days are not returned.

### Example Usage

<!-- UsageSnippet language="php" operationID="ListShipmentRatesByCurrencyCode" method="get" path="/shipments/{ShipmentId}/rates/{CurrencyCode}" -->
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

$request = new Operations\ListShipmentRatesByCurrencyCodeRequest(
    shipmentId: '<id>',
);

$response = $sdk->rates->listShipmentRatesByCurrencyCode(
    request: $request
);

if ($response->ratePaginatedList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\ListShipmentRatesByCurrencyCodeRequest](../../Models/Operations/ListShipmentRatesByCurrencyCodeRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Components\RatePaginatedList](../../Models/Components/RatePaginatedList.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |