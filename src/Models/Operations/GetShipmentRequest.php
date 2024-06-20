<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class GetShipmentRequest
{
    /**
     * Object ID of the shipment to update
     *
     * @var string $shipmentId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ShipmentId')]
    public string $shipmentId;

    /**
     * String used to pick a non-default API version to use
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    public function __construct()
    {
        $this->shipmentId = '';
        $this->shippoApiVersion = null;
    }
}