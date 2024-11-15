<?php


namespace Shippo\API;

use PHPUnit\Framework\TestCase;
use Shippo\API\Models\Components\AddressCreateRequest;
use Shippo\API\Models\Components\CarrierAccountWithExtraInfo;
use Shippo\API\Models\Components\CarriersEnum;
use Shippo\API\Models\Components\DistanceUnitEnum;
use Shippo\API\Models\Components\InstantTransactionCreateRequest;
use Shippo\API\Models\Operations\ListCarrierAccountsRequest;
use Shippo\API\Models\Components\ParcelCreateRequest;
use Shippo\API\Models\Components\ShipmentCreateRequest;
use Shippo\API\Models\Components\Transaction;
use Shippo\API\Models\Components\WeightUnitEnum;

// https://docs.goshippo.com/docs/guides_general/single_call/
final class PurchaseInstalabelTest extends TestCase
{

    public function getCarrierAccounts(\Shippo\API\ShippoSDK $sdk, CarriersEnum $carrier): array
    {
        $listCarrierAccountsRequest = new ListCarrierAccountsRequest(
            carrier: $carrier
        );

        $response = $sdk->carrierAccounts->list($listCarrierAccountsRequest);
        return $response->results;
    }

    public function getCarrierAccount($api, $carrier): CarrierAccountWithExtraInfo
    {
        return $this->getCarrierAccounts($api, $carrier)[0];
    }

    public function testPurchaseInstalabel()
    {
        $token = "ShippoToken " . getenv('SHIPPO_TOKEN');
        $sdk = \Shippo\API\ShippoSDK::builder()
            ->setSecurity($token)
            ->build();

        $carrierAccount = $this->getCarrierAccount($sdk, CarriersEnum::Usps);

        $addressFromCreateRequest = new AddressCreateRequest(
            name: 'Rachael',
            street1: '1092 Indian Summer Ct',
            city: 'San Jose',
            state: 'CA',
            zip: '95122',
            country: 'US',
            phone: '4159876543',
            email: 'rachael@alltheyarnz.com'
            );

        $addressToCreateRequest = new AddressCreateRequest(
            name: 'Mr Hippo',
            street1: '965 Mission St #572',
            city: 'San Francisco',
            state: 'CA',
            zip: '94103',
            country: 'US',
            phone: '4151234567',
            email: 'mrhippo@shippo.com'
            );

        $parcelCreateRequest = new ParcelCreateRequest(
            length: '5',
            width: '5',
            height: '5',
            distanceUnit: DistanceUnitEnum::Cm,
            weight: '2',
            massUnit: WeightUnitEnum::Lb,
            metadata: 'Wool Box1'
            );

        $shipmentCreateRequest = new ShipmentCreateRequest(
            addressFrom: $addressFromCreateRequest,
            addressTo: $addressToCreateRequest,
            parcels: [$parcelCreateRequest]
            );

        $instantTransactionCreateRequest = new InstantTransactionCreateRequest(
            carrierAccount: $carrierAccount->objectId,
            servicelevelToken: 'usps_ground_advantage',
            shipment: $shipmentCreateRequest
            );

        //Throws 'API error occurred' error
        $response = $sdk->transactions->create($instantTransactionCreateRequest);
        //$this->assertNotNull($response->transaction);
        //$transaction = $response->transaction;
        //$this->assertInstanceOf(Transaction::class, $transaction);
        //$this->assertNotNull($transaction->rate->objectId);
    }

}
