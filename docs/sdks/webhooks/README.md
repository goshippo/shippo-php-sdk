# Webhooks


## Overview

Webhooks are a way for Shippo to notify your application when a specific event occurs. For example, when a label is purchased or when a shipment tracking status has changed. You can use webhooks to trigger actions in your application, such as sending an email or updating a database.
<SchemaDefinition schemaRef="#/components/schemas/Webhook"/>

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
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Shippo\API;
use \Shippo\API\Models\Components;

$security = new Components\Security();
$security->apiKeyHeader = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();

try {
        $request = new Components\WebhookUpdateRequest();
    $request->event = Components\WebhookEventTypeEnum::TrackUpdated;
    $request->url = 'https://wobbly-marmalade.org';
    $request->active = false;
    $request->isTest = false;;

    $response = $sdk->webhooks->createWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\Shippo\API\Models\Components\WebhookUpdateRequest](../../Models/Components/WebhookUpdateRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\Shippo\API\Models\Operations\CreateWebhookResponse](../../Models/Operations/CreateWebhookResponse.md)**


## listWebhooks

Returns a list of all webhooks you have created.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Shippo\API;
use \Shippo\API\Models\Components;

$security = new Components\Security();
$security->apiKeyHeader = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();

try {
    $response = $sdk->webhooks->listWebhooks();

    if ($response->webhookPaginatedList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Shippo\API\Models\Operations\ListWebhooksResponse](../../Models/Operations/ListWebhooksResponse.md)**


## getWebhook

Returns the details of a specific webhook using the webhook object ID.

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
    

    $response = $sdk->webhooks->getWebhook('<value>');

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                            | Type                                 | Required                             | Description                          |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `webhookId`                          | *string*                             | :heavy_check_mark:                   | Object ID of the webhook to retrieve |


### Response

**[?\Shippo\API\Models\Operations\GetWebhookResponse](../../Models/Operations/GetWebhookResponse.md)**


## updateWebhook

Updates an existing webhook using the webhook object ID.

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
        $webhookUpdateRequest = new Components\WebhookUpdateRequest();
    $webhookUpdateRequest->event = Components\WebhookEventTypeEnum::TrackUpdated;
    $webhookUpdateRequest->url = 'https://small-cock.info';
    $webhookUpdateRequest->active = false;
    $webhookUpdateRequest->isTest = false;

    $response = $sdk->webhooks->updateWebhook('<value>', $webhookUpdateRequest);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `webhookId`                                                                                           | *string*                                                                                              | :heavy_check_mark:                                                                                    | Object ID of the webhook to retrieve                                                                  |
| `webhookUpdateRequest`                                                                                | [\Shippo\API\Models\Components\WebhookUpdateRequest](../../Models/Components/WebhookUpdateRequest.md) | :heavy_check_mark:                                                                                    | N/A                                                                                                   |


### Response

**[?\Shippo\API\Models\Operations\UpdateWebhookResponse](../../Models/Operations/UpdateWebhookResponse.md)**


## deleteWebhook

Deletes a specific webhook using the webhook object ID.

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
    

    $response = $sdk->webhooks->deleteWebhook('<value>');

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                          | Type                               | Required                           | Description                        |
| ---------------------------------- | ---------------------------------- | ---------------------------------- | ---------------------------------- |
| `webhookId`                        | *string*                           | :heavy_check_mark:                 | Object ID of the webhook to delete |


### Response

**[?\Shippo\API\Models\Operations\DeleteWebhookResponse](../../Models/Operations/DeleteWebhookResponse.md)**

