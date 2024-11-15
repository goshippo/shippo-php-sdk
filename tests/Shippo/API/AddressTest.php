<?php
declare(strict_types=1);
namespace Shippo\API;
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Shippo\API\Models\Components;

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
        $this->assertInstanceOf(Components\AddressPaginatedList::class, $response);
    }

    public function testCreateAddress()
    {
        $token = "ShippoToken " . getenv('SHIPPO_TOKEN');
        $sdk = \Shippo\API\ShippoSDK::builder()
            ->setSecurity($token)
            ->build();

        $addressCreateRequest = new Components\AddressCreateRequest(
            name: 'Rachael',
            company: '',
            street1: '1092 Indian Summer Ct',
            street3: '',
            streetNo: '',
            city: 'San Jose',
            state: 'CA',
            zip: '95122',
            country: 'US',
            phone: '+1 415 987 6543',
            email: 'rachael@alltheyarnz.com',
            isResidential: true,
            metadata: '',
            validate: true,
        );

        $response = $sdk->addresses->create(
            addressCreateRequest: $addressCreateRequest,
            shippoApiVersion: '2018-02-08'
        );

        $this->assertNotNull($response);
        $this->assertInstanceOf(Components\Address::class, $response);
    }
}