<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class GetTrackRequest
{
    /**
     * Tracking number
     *
     * @var string $trackingNumber
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=TrackingNumber')]
    public string $trackingNumber;

    /**
     * Name of the carrier
     *
     * @var string $carrier
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=Carrier')]
    public string $carrier;

    /**
     * String used to pick a non-default API version to use
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    public function __construct()
    {
        $this->trackingNumber = '';
        $this->carrier = '';
        $this->shippoApiVersion = null;
    }
}