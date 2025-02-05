<?php


namespace Shippo\API;

use Shippo\API\Models\Components\AddressCreateRequest;
use Shippo\API\Models\Components\CarriersEnum;
use Shippo\API\Models\Components\DistanceUnitEnum;
use Shippo\API\Models\Components\ParcelCreateRequest;
use Shippo\API\Models\Components\ShipmentCreateRequest;
use Shippo\API\Models\Components\Transaction;
use Shippo\API\Models\Components\WeightUnitEnum;

// https://docs.goshippo.com/docs/stories/single_rating_guide/
final class PurchaseLabelTest extends IntegrationTestCase
{

    public function testPurchaseLabel()
    {
        $this->markTestSkipped('revist post alpha');

        $carrierAccountsIds = $this->getCarrierAccountIds(CarriersEnum::Usps);

        $addressFromCreateRequest = new AddressCreateRequest();
        $addressFromCreateRequest->name = 'Rachael';
        $addressFromCreateRequest->street1 = '1092 Indian Summer Ct';
        $addressFromCreateRequest->city = 'San Jose';
        $addressFromCreateRequest->state = 'CA';
        $addressFromCreateRequest->zip = '95122';
        $addressFromCreateRequest->country = 'US';
        $addressFromCreateRequest->phone = '4159876543';
        $addressFromCreateRequest->email = 'rachael@alltheyarnz.com';

        $addressToCreateRequest = new AddressCreateRequest();
        $addressToCreateRequest->name = 'Mr Hippo';
        $addressToCreateRequest->street1 = '965 Mission St #572';
        $addressToCreateRequest->city = 'San Francisco';
        $addressToCreateRequest->state = 'CA';
        $addressToCreateRequest->zip = '94103';
        $addressToCreateRequest->country = 'US';
        $addressToCreateRequest->phone = '4151234567';
        $addressToCreateRequest->email = 'mrhippo@shippo.com';

        // TODO: change to object when available
        $parcelCreateRequest = [
            'length' => '5',
            'width' => '5',
            'height' => '5',
            'distance_unit' => DistanceUnitEnum::Cm->value,
            'weight' => '2',
            'mass_unit' => WeightUnitEnum::Lb->value,
            'metadata' => 'Wool Box1',
        ];

        $shipmentCreateRequest = new ShipmentCreateRequest();
        $shipmentCreateRequest->carrierAccounts = $carrierAccountsIds;
        $shipmentCreateRequest->addressFrom = $addressFromCreateRequest;
        $shipmentCreateRequest->addressTo = $addressToCreateRequest;
        $shipmentCreateRequest->parcels = [$parcelCreateRequest];
        // TODO: this fails b/c the complete address object is being serialized to a string, presumably this will
        // be fixed once the generator moves out of alpha
        $shipmentResponse = $this->getSdk()->shipments->create($shipmentCreateRequest);
        $this->assertNotNull($shipmentResponse->shipment);
        $shipment = $shipmentResponse->shipment;

        $transactionCreateRequest = [
            'rate' => $shipment->rates[0]->objectId,
        ];
        $transaction = $this->getSdk()->transactions->create($transactionCreateRequest);
        $this->assertNotNull($transaction);
        $this->assertInstanceOf(Transaction::class, $transaction);
        $this->assertIsString($transaction->rate);
    }

    public function testPurchaseLabelUsingReferenceIds()
    {
        $addressFromCreateRequest = new AddressCreateRequest(
            country: 'US',
            name: 'Rachael',
            street1: '1092 Indian Summer Ct',
            city: 'San Jose',
            state: 'CA',
            zip: '95122',
            phone: '4159876543',
            email: 'rachael@alltheyarnz.com'
        );
        $addressFromCreateResponse = $this->getSdk()->addresses->create($addressFromCreateRequest);
        $this->assertNotNull($addressFromCreateResponse);
        $addressFrom = $addressFromCreateResponse;

        $addressToCreateRequest = new AddressCreateRequest(
            country: 'US',
            name: 'Mr Hippo',
            street1: '965 Mission St #572',
            city: 'San Francisco',
            state: 'CA',
            zip: '94103',
            phone: '4151234567',
            email: 'mrhippo@shippo.com'
        );
        $addressToCreateResponse = $this->getSdk()->addresses->create($addressToCreateRequest);
        $this->assertNotNull($addressToCreateResponse);
        $addressTo = $addressToCreateResponse;

        // TODO: change to object when available
        $parcelCreateRequest = new ParcelCreateRequest(
            massUnit: WeightUnitEnum::Lb,
            weight: '1',
            distanceUnit: DistanceUnitEnum::In,
            height: '1',
            length: '1',
            width: '1',
            metadata: 'Wool Box1',
        );
        $parcelCreateResponse = $this->getSdk()->parcels->create($parcelCreateRequest);
        $this->assertNotNull($parcelCreateResponse);
        $parcel = $parcelCreateResponse;

        $shipmentCreateRequest = new ShipmentCreateRequest();
        $shipmentCreateRequest->addressFrom = $addressFrom->objectId;
        $shipmentCreateRequest->addressReturn = $addressFrom->objectId;
        $shipmentCreateRequest->addressTo = $addressTo->objectId;
        $shipmentCreateRequest->parcels = [$parcel->objectId];
        $shipmentCreateResponse = $this->getSdk()->shipments->create($shipmentCreateRequest);
        $this->assertNotNull($shipmentCreateResponse->shipment);
        $shipment = $shipmentCreateResponse->shipment;
        $this->assertEquals($addressTo->objectId, $shipment->addressTo->objectId);
        $this->assertEquals($addressFrom->objectId, $shipment->addressFrom->objectId);
        $this->assertEquals($addressFrom->objectId, $shipment->addressReturn->objectId);

        $transactionCreateRequest = [
            'rate' => $shipment->rates[0]->objectId,
        ];
        $transactionCreateResponse = $this->getSdk()->transactions->create($transactionCreateRequest);
        $this->assertNotNull($transactionCreateResponse->transaction);
        $transaction = $transactionCreateResponse->transaction;
        $this->assertInstanceOf(Transaction::class, $transaction);
        $this->assertIsString($transaction->rate);
    }

}
