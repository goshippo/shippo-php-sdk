<?php


namespace Shippo\API;

use Shippo\API\Models\Components\AddressCreateRequest;
use Shippo\API\Models\Components\CustomsDeclarationContentsTypeEnum;
use Shippo\API\Models\Components\CustomsDeclarationCreateRequest;
use Shippo\API\Models\Components\CustomsDeclarationIncotermEnum;
use Shippo\API\Models\Components\CustomsDeclarationNonDeliveryOptionEnum;
use Shippo\API\Models\Components\CustomsItemCreateRequest;
use Shippo\API\Models\Components\DistanceUnitEnum;
use Shippo\API\Models\Components\Insurance;
use Shippo\API\Models\Components\ShipmentCreateRequest;
use Shippo\API\Models\Components\ShipmentExtra;
use Shippo\API\Models\Components\WeightUnitEnum;

// https://docs.goshippo.com/docs/stories/intl_rating_guide/
final class PurchaseLabelInternationalTest extends IntegrationTestCase
{

    public function testPurchaseLabelInternational()
    {
        $this->markTestSkipped('revist post alpha');

        $addressFromCreateRequest = new AddressCreateRequest();
        $addressFromCreateRequest->name = 'Sarah';
        $addressFromCreateRequest->company = 'We Sell Guitars';
        $addressFromCreateRequest->street1 = '215 Clayton St.';
        $addressFromCreateRequest->city = 'San Francisco';
        $addressFromCreateRequest->state = 'CA';
        $addressFromCreateRequest->zip = '94117';
        $addressFromCreateRequest->country = 'US';
        $addressFromCreateRequest->phone = '+1 555 341 9393';
        $addressFromCreateRequest->email = 'sarah@wesellguitars.net';
        $addressFromCreateRequest->isResidential = false;
        $addressFromCreateRequest->metadata = 'We Sell Guitars HQ';
        $addressFromCreateResponse = $this->getSdk()->addresses->create($addressFromCreateRequest);
        $this->assertNotNull($addressFromCreateResponse->address);
        $addressFrom = $addressFromCreateResponse->address;

        $addressToCreateRequest = new AddressCreateRequest();
        $addressToCreateRequest->name = 'Tom Marks';
        $addressToCreateRequest->street1 = '159 Broadhurst Gardens';
        $addressToCreateRequest->city = 'London';
        $addressToCreateRequest->zip = 'NW6 3AU';
        $addressToCreateRequest->country = 'GB';
        $addressToCreateRequest->phone = '4159876543';
        $addressToCreateRequest->email = 'tommarks@gmmail.com';

        $parcelCreateRequest = [
            'weight' => '5',
            'length' => '10',
            'width' => '5',
            'height' => '4',
            'distance_unit' => DistanceUnitEnum::In->value,
            'mass_unit' => WeightUnitEnum::Lb->value,
        ];

        $shipmentExtra = new ShipmentExtra();
        $shipmentExtra->insurance = new Insurance();
        $shipmentExtra->insurance->amount = '200';
        $shipmentExtra->insurance->currency = 'USD';
        $shipmentExtra->insurance->content = 'guitar pedal';

        $customsDeclarationCreateRequest = new CustomsDeclarationCreateRequest();
        $customsDeclarationCreateRequest->contentsType = CustomsDeclarationContentsTypeEnum::Merchandise;
        $customsDeclarationCreateRequest->nonDeliveryOption = CustomsDeclarationNonDeliveryOptionEnum::Return;
        $customsDeclarationCreateRequest->certify = true;
        $customsDeclarationCreateRequest->certifySigner = 'Tom Marks';
        $customsDeclarationCreateRequest->incoterm = CustomsDeclarationIncotermEnum::Ddp;
        $customsItemCreateRequest = new CustomsItemCreateRequest();
        $customsItemCreateRequest->description = 'Guitar Pedal';
        $customsItemCreateRequest->quantity = 1;
        $customsItemCreateRequest->netWeight = '5';
        $customsItemCreateRequest->massUnit = WeightUnitEnum::Lb;
        $customsItemCreateRequest->valueAmount = '200';
        $customsItemCreateRequest->valueCurrency = 'USD';
        $customsItemCreateRequest->originCountry = 'US';
        $customsDeclarationCreateRequest->items = [$customsItemCreateRequest];

        $customsDeclarationCreateResponse = $this->getSdk()->customsDeclarations->create($customsDeclarationCreateRequest);
        $this->assertNotNull($customsDeclarationCreateResponse->customsDeclaration);
        $customsDeclaration = $customsDeclarationCreateResponse->customsDeclaration;

        $shipmentCreateRequest = new ShipmentCreateRequest();
        $shipmentCreateRequest->addressFrom = $addressFrom->objectId;
        $shipmentCreateRequest->addressTo = $addressToCreateRequest;
        $shipmentCreateRequest->parcels = [$parcelCreateRequest];
        $shipmentCreateRequest->customsDeclaration = $customsDeclaration->objectId;
        $shipmentCreateRequest->extra = $shipmentExtra;
        $shipmentCreateResponse = $this->getSdk()->shipments->create($shipmentCreateRequest);
        $this->assertNotNull($shipmentCreateResponse->shipment);
    }
}
