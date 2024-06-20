<?php


namespace Shippo\API;

use PHPUnit\Framework\TestCase;
use Shippo\API\Models\Components\CarrierAccountWithExtraInfo;
use Shippo\API\Models\Components\CarriersEnum;
use Shippo\API\Models\Operations\ListCarrierAccountsRequest;


class IntegrationTestCase extends TestCase
{

    private static ?ShippoSDK $sdk = null;

    public static function setUpBeforeClass(): void
    {
        if (self::$sdk == null) {
            $token = 'ShippoToken ' . getenv('SHIPPO_TOKEN');
//            $security = new Security();
//            $security->apiKeyHeader = $token;

            self::$sdk = ShippoSDK::builder()->setSecurity($token)->build();
        }
    }

    public function getSdk(): ShippoSDK
    {
        return self::$sdk;
    }

    public function getCarrierAccount(CarriersEnum $carrier): CarrierAccountWithExtraInfo
    {
        return $this->getCarrierAccounts($carrier)[0];
    }

    public function getCarrierAccounts(CarriersEnum $carrier): array
    {
        $listCarrierAccountsRequest = new ListCarrierAccountsRequest();
        $listCarrierAccountsRequest->carrier = $carrier;

        $response = self::getSdk()->carrierAccounts->list($listCarrierAccountsRequest);

        return $response->carrierAccountPaginatedList->results;
    }

    public function getCarrierAccountIds(CarriersEnum $carrier): array
    {
        $carrierAccounts = $this->getCarrierAccounts($carrier);
        $carrierAccountIds = [];
        foreach ($carrierAccounts as $carrierAccount) {
            $carrierAccountIds[] = $carrierAccount->objectId;
        }
        return $carrierAccountIds;
    }

}
