<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;

$security = '<YOUR_API_KEY_HERE>';

$sdk = API\ShippoSDK::builder()
    ->setShippoApiVersion('2018-02-08')
    ->setSecurity($security)->build();



$response = $sdk->addresses->list(
    page: 1,
    results: 5,
    shippoApiVersion: '2018-02-08'

);

if ($response->addressPaginatedList !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->