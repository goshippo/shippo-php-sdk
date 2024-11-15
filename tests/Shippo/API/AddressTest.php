<?php
declare(strict_types=1);
namespace Shippo\API;
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Shippo\API\Models\Components\Address;
use Shippo\API\Models\Components\AddressCreateRequest;
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

    public function testCreateAddress()
    {
        $token = "ShippoToken " . getenv('SHIPPO_TOKEN');
        $sdk = \Shippo\API\ShippoSDK::builder()
            ->setSecurity($token)
            ->build();

        $addressCreateRequest = new AddressCreateRequest(
            name: 'Shwan Ippotle',
            company: 'Shippo',
            street1: '215 Clayton St.',
            street3: '',
            streetNo: '',
            city: 'San Francisco',
            state: 'CA',
            zip: '94117',
            country: 'US',
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

        $this->assertNotNull($response);
        $this->assertInstanceOf(Address::class, $response);
    }
}