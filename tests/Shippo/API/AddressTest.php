<?php
declare(strict_types=1);
namespace Shippo\API;
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Shippo\API\Models\Components\Address;
use Shippo\API\Models\Components\AddressPaginatedList;

final class AddressTest extends TestCase
{

    public function testListAllAddresses()
    {
        $token = "ShippoToken " . getenv('SHIPPO_TOKEN');
        $sdk = \Shippo\API\ShippoSDK::builder()
            ->setSecurity($token)
            ->build();

        $response = $sdk->addresses->list(
            page: 1,
            results: 10,
            shippoApiVersion: '2018-02-08'
        );

        $this->assertNotNull($response->results);
        $this->assertInstanceOf(AddressPaginatedList::class, $response);
    }
}