<?php


namespace Shippo\API;

use Shippo\API\Models\Components\AddressCreateRequest;
use Shippo\API\Models\Components\CarriersEnum;
use Shippo\API\Models\Components\DistanceUnitEnum;
use Shippo\API\Models\Components\ShipmentCreateRequest;
use Shippo\API\Models\Components\Transaction;
use Shippo\API\Models\Components\WeightUnitEnum;

// https://docs.goshippo.com/docs/guides_general/single_call/
final class PurchaseInstalabelTest extends IntegrationTestCase
{

    public function testPurchaseInstalabel()
    {
        $this->markTestSkipped('revist post alpha');

        $carrierAccount = $this->getCarrierAccount(CarriersEnum::Usps);

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
        $shipmentCreateRequest->addressFrom = $addressFromCreateRequest;
        $shipmentCreateRequest->addressTo = $addressToCreateRequest;
        $shipmentCreateRequest->parcels = [$parcelCreateRequest];

        $instantTransactionCreateRequest = [
            'carrier_acount' => $carrierAccount->objectId,
            'servicelevel_token' => 'usps_ground_advantage',
            'shipment' => $shipmentCreateRequest,
        ];

        $transactionResponse = $this->getSdk()->transactions->create($instantTransactionCreateRequest);
        $this->assertNotNull($transactionResponse->transaction);
        $transaction = $transactionResponse->transaction;
        $this->assertInstanceOf(Transaction::class, $transaction);
        $this->assertNotNull($transaction->rate->objectId);
    }

}
