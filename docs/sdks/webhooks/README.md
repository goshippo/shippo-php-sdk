# Webhooks
(*webhooks*)

## Overview

Webhooks are a way for Shippo to notify your application when a specific event occurs. For example, when a label is purchased or when a shipment tracking status has changed. You can use webhooks to trigger actions in your application, such as sending an email or updating a database.
<SchemaDefinition schemaRef="#/components/schemas/Webhook"/>

# Webhook Payload
The payload is the body of the POST request Shippo sends to the URL specified at the time of webhook registration.
<SchemaDefinition schemaRef="#/components/schemas/WebhookPayload"/>

### Available Operations

* [createWebhook](#createwebhook) - Create a new webhook
* [listWebhooks](#listwebhooks) - List all webhooks
* [getWebhook](#getwebhook) - Retrieve a specific webhook
* [updateWebhook](#updatewebhook) - Update an existing webhook
* [deleteWebhook](#deletewebhook) - Delete a specific webhook

## createWebhook

Creates a new webhook to send notifications to a URL when a specific event occurs.

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

$request = new Components\WebhookUpdateRequest(
    event: Components\WebhookEventTypeEnum::BatchCreated,
    url: 'https://example.com/shippo-webhook',
    active: true,
    isTest: false,
);

$response = $sdk->webhooks->createWebhook(
    request: $request
);

if ($response->webhook !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Components\WebhookUpdateRequest](../../Models/Components/WebhookUpdateRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateWebhookResponse](../../Models/Operations/CreateWebhookResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listWebhooks

Returns a list of all webhooks you have created.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();



$response = $sdk->webhooks->listWebhooks(

);

if ($response->webhookPaginatedList !== null) {
    // handle response
}
```

### Response

**[?Operations\ListWebhooksResponse](../../Models/Operations/ListWebhooksResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getWebhook

Returns the details of a specific webhook using the webhook object ID.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();



$response = $sdk->webhooks->getWebhook(
    webhookId: '<id>'
);

if ($response->webhook !== null) {
    // handle response
}
```

### Parameters

| Parameter                            | Type                                 | Required                             | Description                          |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `webhookId`                          | *string*                             | :heavy_check_mark:                   | Object ID of the webhook to retrieve |

### Response

**[?Operations\GetWebhookResponse](../../Models/Operations/GetWebhookResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateWebhook

Updates an existing webhook using the webhook object ID.

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

$webhookUpdateRequest = new Components\WebhookUpdateRequest(
    event: Components\WebhookEventTypeEnum::BatchCreated,
    url: 'https://example.com/shippo-webhook',
    active: true,
    isTest: false,
);

$response = $sdk->webhooks->updateWebhook(
    webhookId: '<id>',
    webhookUpdateRequest: $webhookUpdateRequest

);

if ($response->webhook !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `webhookId`                                                                        | *string*                                                                           | :heavy_check_mark:                                                                 | Object ID of the webhook to retrieve                                               |
| `webhookUpdateRequest`                                                             | [Components\WebhookUpdateRequest](../../Models/Components/WebhookUpdateRequest.md) | :heavy_check_mark:                                                                 | N/A                                                                                |

### Response

**[?Operations\UpdateWebhookResponse](../../Models/Operations/UpdateWebhookResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## deleteWebhook

Deletes a specific webhook using the webhook object ID.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();



$response = $sdk->webhooks->deleteWebhook(
    webhookId: '<id>'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                          | Type                               | Required                           | Description                        |
| ---------------------------------- | ---------------------------------- | ---------------------------------- | ---------------------------------- |
| `webhookId`                        | *string*                           | :heavy_check_mark:                 | Object ID of the webhook to delete |

### Response

**[?Operations\DeleteWebhookResponse](../../Models/Operations/DeleteWebhookResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |