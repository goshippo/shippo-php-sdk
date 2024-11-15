<?php


use PHPUnit\Framework\TestCase;
use Shippo\API\Models\Components\AddressCreateRequest;
use Shippo\API\Models\Components\DistanceUnitEnum;
use Shippo\API\Models\Components\WeightUnitEnum;

final class PurchaseLabelTest extends TestCase
{

    private static SDKProvider $sdkProvider;

    public static function setUpBeforeClass(): void
    {
        self::$sdkProvider = new SDKProvider();
    }

    public function testPurchaseLabelUsingReferenceIds()
    {
//        $addressFromCreateRequest = new AddressCreateRequest();
//        $addressFromCreateRequest->name = 'Rachael';
//        $addressFromCreateRequest->street1 = '1092 Indian Summer Ct';
//        $addressFromCreateRequest->city = 'San Jose';
//        $addressFromCreateRequest->state = 'CA';
//        $addressFromCreateRequest->zip = '95122';
//        $addressFromCreateRequest->country = 'US';
//        $addressFromCreateRequest->phone = '4159876543';
//        $addressFromCreateRequest->email = 'rachael@alltheyarnz.com';
//        $addressFrom = self::$sdkProvider->getSdk()->addresses->create($addressFromCreateRequest);
//
//        $addressToCreateRequest = new AddressCreateRequest();
//        $addressToCreateRequest->name = 'Mr Hippo';
//        $addressToCreateRequest->street1 = '965 Mission St #572';
//        $addressToCreateRequest->city = 'San Francisco';
//        $addressToCreateRequest->state = 'CA';
//        $addressToCreateRequest->zip = '94103';
//        $addressToCreateRequest->country = 'US';
//        $addressToCreateRequest->phone = '4151234567';
//        $addressToCreateRequest->email = 'mrhippo@shippo.com';
//        $addressTo = self::$sdkProvider->getSdk()->addresses->create($addressToCreateRequest);

        $parcelCreateRequest = [
            'length' => '5',
            'width' => '5',
            'height' => '5',
            'distance_unit' => DistanceUnitEnum::Cm,
            'weight' => '2',
            'mass_unit' => WeightUnitEnum::Lb,
            'metadata' => 'Wool Box1',
        ];
        $parcel = self::$sdkProvider->getSdk()->parcels->create($parcelCreateRequest);
        print($parcel->parcel->objectId);

//         parcel = api.parcels.create(
//             ParcelRequest(
//             ))
    }

}

// import shippo
// from shippo.models.components import CarriersEnum, ParcelRequest, DistanceUnitEnum, WeightUnitEnum, \
//     AddressCreateRequest, ShipmentCreateRequest, TransactionCreateRequest, ParcelCreateRequest, Transaction
// from tests.helpers_custom import get_carrier_accounts
//
//
// # https://docs.goshippo.com/docs/stories/single_rating_guide/
// class TestPurchaseLabel:
//
//     def test_purchase_label(self, api: shippo.Shippo):
//         carrier_accounts = get_carrier_accounts(api, CarriersEnum.USPS)
//         carrier_account_ids = [carrier_account.object_id for carrier_account in carrier_accounts]
//
//         shipment = api.shipments.create(
//             ShipmentCreateRequest(
//                 address_from=AddressCreateRequest(
//                     name="Rachael",
//                     street1="1092 Indian Summer Ct",
//                     city="San Jose",
//                     state="CA",
//                     zip="95122",
//                     country="US",
//                     phone="4159876543",
//                     email="rachael@alltheyarnz.com"
//                 ),
//                 address_to=AddressCreateRequest(
//                     name="Mr Hippo",
//                     street1="965 Mission St #572",
//                     city="San Francisco",
//                     state="CA",
//                     zip="94103",
//                     country="US",
//                     phone="4151234567",
//                     email="mrhippo@shippo.com"
//                 ),
//                 parcels=[
//                     ParcelCreateRequest(
//                         length="5",
//                         width="5",
//                         height="5",
//                         distance_unit=DistanceUnitEnum.CM,
//                         weight="2",
//                         mass_unit=WeightUnitEnum.LB
//                     )
//                 ],
//                 carrier_accounts=carrier_account_ids
//             ))
//         assert shipment is not None
//
//         transaction = api.transactions.create(
//             TransactionCreateRequest(rate=shipment.rates[0].object_id)
//         )
//         assert transaction is not None
//
//     def test_purchase_label_using_reference_ids(self, api: shippo.Shippo):
//         address_from = api.addresses.create(
//             AddressCreateRequest(
//                 name="Rachael",
//                 street1="1092 Indian Summer Ct",
//                 city="San Jose",
//                 state="CA",
//                 zip="95122",
//                 country="US",
//                 phone="4159876543",
//                 email="rachael@alltheyarnz.com"
//             ))
//
//         address_to = api.addresses.create(
//             AddressCreateRequest(
//                 name="Mr Hippo",
//                 street1="965 Mission St #572",
//                 city="San Francisco",
//                 state="CA",
//                 zip="94103",
//                 country="US",
//                 phone="4151234567",
//                 email="mrhippo@shippo.com"
//             ))
//
//         parcel = api.parcels.create(
//             ParcelRequest(
//                 length="5",
//                 width="5",
//                 height="5",
//                 distance_unit=DistanceUnitEnum.CM,
//                 weight="2",
//                 mass_unit=WeightUnitEnum.LB,
//                 metadata="Wool Box1",
//             ))
//
//         shipment = api.shipments.create(
//             ShipmentCreateRequest(
//                 address_from=address_from.object_id,
//                 address_return=address_from.object_id,
//                 address_to=address_to.object_id,
//                 parcels=[parcel.object_id]
//             ))
//         assert shipment is not None
//         assert shipment.address_to.object_id == address_to.object_id
//         assert shipment.address_from.object_id == address_from.object_id
//         assert shipment.address_return.object_id == address_from.object_id
//
//         transaction = api.transactions.create(
//             TransactionCreateRequest(rate=shipment.rates[0].object_id)
//         )
//         assert transaction is not None
//         assert isinstance(transaction, Transaction)
//         assert isinstance(transaction.rate, str)
