<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Models\Components;
use Shippo\API\Utils\SpeakeasyMetadata;
class CreateShipmentRequest
{
    /**
     * Shipment details and contact info.
     *
     * @var Components\ShipmentCreateRequest $shipmentCreateRequest
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\ShipmentCreateRequest $shipmentCreateRequest;

    /**
     * Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide.
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    /**
     * @param  Components\ShipmentCreateRequest  $shipmentCreateRequest
     * @param  ?string  $shippoApiVersion
     */
    public function __construct(Components\ShipmentCreateRequest $shipmentCreateRequest, ?string $shippoApiVersion = null)
    {
        $this->shipmentCreateRequest = $shipmentCreateRequest;
        $this->shippoApiVersion = $shippoApiVersion;
    }
}