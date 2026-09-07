<!-- Start SDK Example Usage [usage] -->
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



$response = $sdk->addresses->list(
    page: 1,
    results: 5

);

if ($response->addressPaginatedList !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->