<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components;

$sdk = API\Shippo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->setShippoApiVersion('2018-02-08')
    ->build();

$addressCreateRequest = new Components\AddressCreateRequest(
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
);

$response = $sdk->addresses->create(
    addressCreateRequest: $addressCreateRequest,
    shippoApiVersion: '2018-02-08'

);

if ($response->address !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->