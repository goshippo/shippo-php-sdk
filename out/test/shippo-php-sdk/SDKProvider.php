<?php


use JMS\Serializer\Annotation\Type;
use Shippo\API\Models\Components\CarrierAccountWithExtraInfo;
use Shippo\API\Models\Components\CarriersEnum;
use Shippo\API\Models\Operations\ListCarrierAccountsRequest;
use Shippo\API\ShippoSDK;


class SDKProvider
{

    private static ShippoSDK $sdk;

    static function init(): void
    {
        $token = 'ShippoToken ' . getenv('SHIPPO_TOKEN');
//            $security = new Security();
//            $security->apiKeyHeader = $token;

        self::$sdk = ShippoSDK::builder()->setSecurity($token)->build();
    }

    public function getSdk(): ShippoSDK
    {
        return self::$sdk;
    }

    #[Type('array<Shippo\API\Models\Components\CarrierAccountWithExtraInfo>')]
    public function getCarrierAccounts(CarriersEnum $carrier): array
    {
        $listCarrierAccountsRequest = new ListCarrierAccountsRequest();
        $listCarrierAccountsRequest->carrier = $carrier;

        $response = self::getSdk()->carrierAccounts->list($listCarrierAccountsRequest);

        return $response->carrierAccountPaginatedList->results;
    }

    public function getCarrierAccount(CarriersEnum $carrier): CarrierAccountWithExtraInfo
    {
        return $this->getCarrierAccounts($carrier)[0];
    }

}

SDKProvider::init();
