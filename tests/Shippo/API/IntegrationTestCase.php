<?php


namespace Shippo\API;

use PHPUnit\Framework\TestCase;
use Shippo\API\Shippo;
use Shippo\API\Models\Components\CarrierAccountWithExtraInfo;
use Shippo\API\Models\Components\CarriersEnum;
use Shippo\API\Models\Operations\ListCarrierAccountsRequest;


class IntegrationTestCase extends TestCase
{

    private static ?Shippo $sdk = null;

    public static function setUpBeforeClass(): void
    {
        if (self::$sdk == null) {
            $token = 'ShippoToken ' . getenv('SHIPPO_TOKEN');

            self::$sdk = Shippo::builder()
            ->setSecurity($token)
            ->setShippoApiVersion('2018-02-08')
            ->build();
        }
    }

    public function getSdk(): Shippo
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
