<?php
declare(strict_types=1);
namespace Shippo\API;
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Shippo\API\Models\Components;

final class ParcelTest extends TestCase
{

    public function testCreateParcel()
    {
        $token = "ShippoToken " . getenv('SHIPPO_TOKEN');
        $sdk = \Shippo\API\ShippoSDK::builder()
            ->setSecurity($token)
            ->build();

        $response = $sdk->parcels->create(
            requestBody: new Components\ParcelCreateRequest(
                    massUnit: Components\WeightUnitEnum::Lb,
                    weight: '1',
                    distanceUnit: Components\DistanceUnitEnum::In,
                    height: '1',
                    length: '1',
                    width: '1',
                ),
                shippoApiVersion: '2018-02-08'
            );

        $this->assertNotNull($response);
        $this->assertInstanceOf(Components\Parcel::class, $response);
    }

    public function testCreateParcelPassObject()
        {
            $token = "ShippoToken " . getenv('SHIPPO_TOKEN');
            $sdk = \Shippo\API\ShippoSDK::builder()
                ->setSecurity($token)
                ->build();

            $parcelCreateRequest = new Components\ParcelCreateRequest(
               massUnit: Components\WeightUnitEnum::Lb,
               weight: '1',
               distanceUnit: Components\DistanceUnitEnum::In,
               height: '1',
               length: '1',
               width: '1',
            );

            $response = $sdk->parcels->create(
                requestBody: $parcelCreateRequest,
                shippoApiVersion: '2018-02-08'
                );

            $this->assertNotNull($response);
            $this->assertInstanceOf(Components\Parcel::class, $response);
        }
}