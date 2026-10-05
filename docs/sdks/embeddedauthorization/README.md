# EmbeddedAuthorization

## Overview

Mint short-lived JSON Web Tokens (JWTs) for client-side applications, so you never ship a
long-lived API token to the browser. Authenticate the request with a Shippo API token or an
OAuth bearer token, then pass the returned token as `Authorization: JWT <JWT_TOKEN>`.
See our [Authentication using JWT guide](https://docs.goshippo.com/docs/guides_general/authentication_using_jwt/) for details.

### Available Operations

* [create](#create) - Create a JWT

## create

Creates a short-lived JSON Web Token (JWT) that client-side applications can use
to authenticate against the Shippo API without exposing a long-lived API token.

Authenticate this request with either a Shippo API token
(`Authorization: ShippoToken <API_TOKEN>`) or an OAuth bearer token
(`Authorization: Bearer <OAUTH_BEARER_TOKEN>`). Platform accounts can mint a token
on behalf of a Managed Shippo Account by setting the `SHIPPO-ACCOUNT-ID` header.

The returned token is valid for 12 hours. Send it on subsequent requests as
`Authorization: JWT <JWT_TOKEN>`.

### Example Usage

<!-- UsageSnippet language="php" operationID="CreateEmbeddedAuthorization" method="post" path="/embedded/authz" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;
use Shippo\API\Models\Operations;

$sdk = API\Shippo::builder()
    ->setShippoApiVersion('2018-02-08')
    ->build();

$embeddedAuthorizationRequest = new Components\EmbeddedAuthorizationRequest(
    scope: 'embedded:carriers',
);
$requestSecurity = new Operations\CreateEmbeddedAuthorizationSecurity(
    apiKeyHeader: '<YOUR_API_KEY_HERE>',
);

$response = $sdk->embeddedAuthorization->create(
    security: $requestSecurity,
    embeddedAuthorizationRequest: $embeddedAuthorizationRequest,
    shippoAccountId: 'e0b382dc7d754c0ca6358c09d5d2bdf7'

);

if ($response->embeddedAuthorization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             | Example                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                                              | [Operations\CreateEmbeddedAuthorizationSecurity](../../Models/Operations/CreateEmbeddedAuthorizationSecurity.md)                                        | :heavy_check_mark:                                                                                                                                      | The security requirements to use for the request.                                                                                                       |                                                                                                                                                         |
| `embeddedAuthorizationRequest`                                                                                                                          | [Components\EmbeddedAuthorizationRequest](../../Models/Components/EmbeddedAuthorizationRequest.md)                                                      | :heavy_check_mark:                                                                                                                                      | The scope to request for the token.                                                                                                                     |                                                                                                                                                         |
| `shippoApiVersion`                                                                                                                                      | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional string used to pick a non-default API version to use. See our [API version](https://docs.goshippo.com/docs/api_concepts/apiversioning/) guide. | 2018-02-08                                                                                                                                              |
| `shippoAccountId`                                                                                                                                       | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | Optional. The object ID of a Managed Shippo Account. Platform accounts set this to<br/>mint a JWT scoped to one of their managed accounts.              | e0b382dc7d754c0ca6358c09d5d2bdf7                                                                                                                        |

### Response

**[?Components\EmbeddedAuthorization](../../Models/Components/EmbeddedAuthorization.md)**

### Errors

| Error Type      | Status Code     | Content Type    |
| --------------- | --------------- | --------------- |
| Errors\SDKError | 4XX, 5XX        | \*/\*           |