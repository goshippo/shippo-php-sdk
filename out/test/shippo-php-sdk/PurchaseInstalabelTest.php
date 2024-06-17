<?php


use JMS\Serializer\Annotation\Type;
use PHPUnit\Framework\TestCase;
use Shippo\API\Models\Components\CarrierAccountWithExtraInfo;
use Shippo\API\Models\Components\CarriersEnum;
use Shippo\API\Models\Operations\ListCarrierAccountsRequest;

final class PurchaseInstalabelTest extends TestCase
{
    #[Type('array<Shippo\API\Models\Components\CarrierAccountWithExtraInfo>')]
    public function getCarrierAccounts(\Shippo\API\ShippoSDK $sdk, CarriersEnum $carrier): array
    {
        $listCarrierAccountsRequest = new ListCarrierAccountsRequest();
        $listCarrierAccountsRequest->carrier = $carrier;

        $response = $sdk->carrierAccounts->list($listCarrierAccountsRequest);
        return $response->carrierAccountPaginatedList->results;
    }

    public function getCarrierAccount($api, $carrier): CarrierAccountWithExtraInfo
    {
        return $this->getCarrierAccounts($api, $carrier)[0];
    }


    public function testInstalabel()
    {
        $token = "ShippoToken " . getenv('SHIPPO_TOKEN');
//        $security = new Components\Security();
//        $security->apiKeyHeader = $token;

        $sdk = \Shippo\API\ShippoSDK::builder()
            ->setSecurity($token)
            ->build();

        $carrierAccount = $this->getCarrierAccount($sdk, CarriersEnum::Usps);

        $instantTransactionCreateRequest = [
            "carrier_acount" => $carrierAccount->objectId,
            "servicelevel_token" => "usps_ground_advantage",
            "shipment" => [
                "address_from" => [
                    "name" => "Rachael",
                    "street1" => "1092 Indian Summer Ct",
                    "city" => "San Jose",
                    "state" => "CA",
                    "zip" => "95122",
                    "country" => "US",
                    "phone" => "4159876543",
                    "email" => "rachael@alltheyarnz.com"
                ]
            ]
        ];

//        $sdk->transactions->create()

//        transaction = api . transactions . create(
//                InstantTransactionCreateRequest(
//                    carrier_account = carrier_account . object_id,
//                    servicelevel_token = "usps_ground_advantage",
//                    shipment = ShipmentCreateRequest(
//                        address_from = AddressCreateRequest(
//                            name = "Rachael",
//                            street1 = "1092 Indian Summer Ct",
//                            city = "San Jose",
//                            state = "CA",
//                            zip = "95122",
//                            country = "US",
//                            phone = "4159876543",
//                            email = "rachael@alltheyarnz.com"
//                        ),
//                        address_to = AddressCreateRequest(
//                            name = "Mr Hippo",
//                            street1 = "965 Mission St #572",
//                            city = "San Francisco",
//                            state = "CA",
//                            zip = "94103",
//                            country = "US",
//                            phone = "4151234567",
//                            email = "mrhippo@shippo.com"
//                        ),
//                        parcels = [
//                            ParcelCreateRequest(
//                                length = "5",
//                                width = "5",
//                                height = "5",
//                                distance_unit = DistanceUnitEnum . CM,
//                                weight = "2",
//                                mass_unit = WeightUnitEnum . LB
//                            )
//                        ]
//                    )
//                ))
    }
}

//# https://docs.goshippo.com/docs/guides_general/single_call/
//class TestInstalabel:
//
//def test_instalabel(self, api: shippo.Shippo):
//carrier_account = get_carrier_account(api, CarriersEnum.USPS)
//
//assert transaction is not None
//assert isinstance(transaction, Transaction)
//assert transaction.rate.object_id is not None
