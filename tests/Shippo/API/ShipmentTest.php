<?php
declare(strict_types=1);
namespace Shippo\API;
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Shippo\API;
use Shippo\API\Models\Components\AddressCreateRequest;
use Shippo\API\Models\Components\DistanceUnitEnum;
use Shippo\API\Models\Components\ParcelCreateRequest;
use Shippo\API\Models\Components\ShipmentCreateRequest;
use Shippo\API\Models\Components\ShipmentPaginatedList;
use Shippo\API\Models\Components\WeightUnitEnum;
use Shippo\API\Models\Operations\ListShipmentsRequest;

final class ShipmentTest extends TestCase
{
    // https://docs.goshippo.com/shippoapi/public-api/#operation/ListShipments
    public function testGetShipments()
    {
        $token = "ShippoToken " . getenv('SHIPPO_TOKEN');
        $sdk = \Shippo\API\ShippoSDK::builder()
            ->setSecurity($token)
            ->build();

        $response = $sdk->shipments->list(
            request: new ListShipmentsRequest()
        );

        $this->assertNotNull($response->results);
        $this->assertInstanceOf(ShipmentPaginatedList::class, $response);
    }

    public function testCreateShipment()
    {
        $token = "ShippoToken " . getenv('SHIPPO_TOKEN');
        $sdk = \Shippo\API\ShippoSDK::builder()
            ->setSecurity($token)
            ->build();

        $shipmentCreateRequest = new ShipmentCreateRequest(
            addressFrom: new AddressCreateRequest(
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
             ),
            addressTo: new AddressCreateRequest(
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
             ),
            parcels: [
                new ParcelCreateRequest(
                    length: '5',
                    width: '5',
                    height: '5',
                    distanceUnit: DistanceUnitEnum::Cm,
                    weight: '2',
                    massUnit: WeightUnitEnum::Lb,
                    metadata: 'Wool Box1'
                )
            ]
        );

        $response = $sdk->shipments->create(
            shipmentCreateRequest: $shipmentCreateRequest,
            shippoApiVersion: '2018-02-08'
        );

        var_dump($response);
    }
}
