<?php
declare(strict_types=1);
namespace Shippo\API;
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Shippo\API;
use Shippo\API\Models\Components;
use Shippo\API\Models\Operations;

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
            request: new Operations\ListShipmentsRequest()
        );

        $this->assertNotNull($response->results);
        $this->assertInstanceOf(Components\ShipmentPaginatedList::class, $response);
    }

    public function testCreateShipment()
    {
        $token = "ShippoToken " . getenv('SHIPPO_TOKEN');
        $sdk = \Shippo\API\ShippoSDK::builder()
            ->setSecurity($token)
            ->build();

        $parcelCreateRequest = new Components\ParcelCreateRequest(
           massUnit: Components\WeightUnitEnum::Lb,
           weight: '1',
           distanceUnit: Components\DistanceUnitEnum::In,
           height: '1',
           length: '1',
           width: '1',
        );

        $addressFrom = new Components\AddressCreateRequest(
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

        $addressTo = new Components\AddressCreateRequest(
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

        $shipmentCreateRequest = new Components\ShipmentCreateRequest(
            addressFrom:  $addressFrom,
            addressTo: $addressTo,
            parcels: array($parcelCreateRequest)
        );

        //var_dump($shipmentCreateRequest);

        $response = $sdk->shipments->create(
            shipmentCreateRequest: $shipmentCreateRequest,
            shippoApiVersion: '2018-02-08'
        );

        var_dump($response);
    }
}
