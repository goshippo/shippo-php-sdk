# CarrierParcelTemplates
(*carrierParcelTemplates*)

## Overview

A carrier parcel template represents a package used for shipping that has preset dimensions defined by a carrier. Some examples of a carrier parcel template include USPS Flat Rate Box and Fedex Small Pak. When using a carrier parcel template, the rates returned may be limited to the carrier that provides the box. You can create user parcel templates using a carrier parcel template. Shippo takes the dimensions of the carrier parcel template but you must configure the weight.

<SchemaDefinition schemaRef="#/components/schemas/CarrierParcelTemplate"/>

### Available Operations

* [get](#get) - Retrieve a carrier parcel templates
* [list](#list) - List all carrier parcel templates

## get

Fetches the parcel template information for a specific carrier parcel template, identified by the token.

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



$response = $sdk->carrierParcelTemplates->get(
    carrierParcelTemplateToken: '<value>',
    shippoApiVersion: '2018-02-08'

);

if ($response->carrierParcelTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `carrierParcelTemplateToken`                                                                                                                                       | *string*                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                 | The unique string representation of the carrier parcel template                                                                                                    |                                                                                                                                                                    |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\CarrierParcelTemplate](../../Models/Components/CarrierParcelTemplate.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |

## list

List all carrier parcel template objects. <br> Use the following query string params to filter the results as needed. <br>
<ul>
<li>`include=all` (the default). Includes templates from all carriers </li>
<li>`include=user`. Includes templates only from carriers which the user has added (whether or not they're currently enabled) </li>
<li>`include=enabled`. includes templates only for carriers which the user has added and enabled </li>
<li>`carrier=*token*`. filter by specific carrier, e.g. fedex, usps </li>
</ul>

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



$response = $sdk->carrierParcelTemplates->list(
    include: Operations\IncludeT::Enabled,
    carrier: 'fedex',
    shippoApiVersion: '2018-02-08'

);

if ($response->carrierParcelTemplateList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                          | Type                                                                                                                                                               | Required                                                                                                                                                           | Description                                                                                                                                                        | Example                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `include`                                                                                                                                                          | [?Operations\IncludeT](../../Models/Operations/IncludeT.md)                                                                                                        | :heavy_minus_sign:                                                                                                                                                 | filter by user or enabled                                                                                                                                          |                                                                                                                                                                    |
| `carrier`                                                                                                                                                          | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | filter by specific carrier                                                                                                                                         | fedex                                                                                                                                                              |
| `shippoApiVersion`                                                                                                                                                 | *?string*                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                 | Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide. | 2018-02-08                                                                                                                                                         |

### Response

**[?Components\CarrierParcelTemplateList](../../Models/Components/CarrierParcelTemplateList.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |