<?php


namespace Shippo\API;

use Shippo\API\Models\Components\AddressCreateRequest;
use Shippo\API\Models\Components\CarriersEnum;
use Shippo\API\Models\Components\DistanceUnitEnum;
use Shippo\API\Models\Components\LiveRateCreateRequest;
use Shippo\API\Models\Components\ServiceGroupAccountAndServiceLevel;
use Shippo\API\Models\Components\ServiceGroupCreateRequest;
use Shippo\API\Models\Components\ServiceGroupTypeEnum;
use Shippo\API\Models\Components\WeightUnitEnum;

final class RatesAtCheckoutTest extends IntegrationTestCase
{

    protected function setup(): void
    {
        $this->deleteAllServiceGroups();
    }

    private function deleteAllServiceGroups()
    {
        $serviceGroups = $this->getSdk()->serviceGroups->list()->serviceGroupListResponse;
        foreach ($serviceGroups as $serviceGroup) {
            $this->getSdk()->serviceGroups->delete($serviceGroup->objectId);
        }
    }

    public function testRatesAtCheckout()
    {
        $this->markTestSkipped('revist post alpha');

        $upsAccountId = $this->getCarrierAccount(CarriersEnum::Ups)->objectId;
        // TODO: update to use enums once generated
        $availableServiceLevels = ['ups_ground', 'ups_next_day_air_saver'];
        $serviceLevels = [];
        foreach ($availableServiceLevels as $availableServiceLevel) {
            $serviceGroupAccountAndServiceLevel = new ServiceGroupAccountAndServiceLevel();
            $serviceGroupAccountAndServiceLevel->accountObjectId = $upsAccountId;
            $serviceGroupAccountAndServiceLevel->serviceLevelToken = $availableServiceLevel;
            $serviceLevels[] = $serviceGroupAccountAndServiceLevel;
        }

        $serviceGroupCreateRequest = new ServiceGroupCreateRequest();
        $serviceGroupCreateRequest->name = 'UPS shipping';
        $serviceGroupCreateRequest->description = 'UPS shipping options';
        $serviceGroupCreateRequest->flatRate = '5';
        $serviceGroupCreateRequest->flatRateCurrency = 'USD';
        $serviceGroupCreateRequest->type = ServiceGroupTypeEnum::LiveRate;
        $serviceGroupCreateRequest->serviceLevels = $serviceLevels;
        $serviceGroupCreateResponse = $this->getSdk()->serviceGroups->create($serviceGroupCreateRequest);
        $this->assertNotNull($serviceGroupCreateResponse->serviceGroup);
        $serviceGroup = $serviceGroupCreateResponse->serviceGroup;

        $ratesAtCheckoutCreateRequest = new LiveRateCreateRequest();
        $ratesAtCheckoutCreateRequest->addressFrom = new AddressCreateRequest();
        $ratesAtCheckoutCreateRequest->addressFrom->name = 'S. Hippo';
        $ratesAtCheckoutCreateRequest->addressFrom->company = 'Shippo';
        $ratesAtCheckoutCreateRequest->addressFrom->street1 = '731 Market St #200';
        $ratesAtCheckoutCreateRequest->addressFrom->city = 'San Francisco';
        $ratesAtCheckoutCreateRequest->addressFrom->state = 'CA';
        $ratesAtCheckoutCreateRequest->addressFrom->zip = '94103';
        $ratesAtCheckoutCreateRequest->addressFrom->country = 'US';
        $ratesAtCheckoutCreateRequest->addressTo = new AddressCreateRequest();
        $ratesAtCheckoutCreateRequest->addressTo->name = 'Bob Bloat';
        $ratesAtCheckoutCreateRequest->addressTo->company = 'SF Zoo';
        $ratesAtCheckoutCreateRequest->addressTo->street1 = 'Sloat Blvd. & Upper Great Hwy.';
        $ratesAtCheckoutCreateRequest->addressTo->city = 'San Francisco';
        $ratesAtCheckoutCreateRequest->addressTo->state = 'CA';
        $ratesAtCheckoutCreateRequest->addressTo->zip = '94132';
        $ratesAtCheckoutCreateRequest->addressTo->country = 'US';
        $lineItem = new \Shippo\API\Models\Components\LineItem();
        $lineItem->quantity = 1;
        $lineItem->totalPrice = '12.00';
        $lineItem->currency = 'USD';
        $lineItem->weight = '1.0';
        $lineItem->weightUnit = WeightUnitEnum::Lb;
        $lineItem->title = 'Hippo Snax';
        $lineItem->manufactureCountry = 'US';
        $lineItem->sku = 'HM-123';
        $ratesAtCheckoutCreateRequest->lineItems = [$lineItem];
        $ratesAtCheckoutCreateRequest->parcel = [
            [
                'length' => '10',
                'width' => '15',
                'height' => '10',
                'distance_unit' => DistanceUnitEnum::In->value,
                'weight' => '1',
                'mass_unit' => WeightUnitEnum::Lb->value,
            ],
        ];

        $ratesAtCheckoutCreateResponse = $this->getSdk()->ratesAtCheckout->create($ratesAtCheckoutCreateRequest);
        //$this->assertNotNull($ratesAtCheckoutCreateResponse->liveRatePaginatedList);
        foreach ($ratesAtCheckoutCreateResponse->liveRatePaginatedList->results as $liveRate) {
            $this->assertEquals($serviceGroup->name, $liveRate->title);
        }
    }

}
