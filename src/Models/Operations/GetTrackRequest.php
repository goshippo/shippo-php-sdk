<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
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
     * Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide.
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    /**
     * @param  string  $trackingNumber
     * @param  string  $carrier
     * @param  ?string  $shippoApiVersion
     * @phpstan-pure
     */
    public function __construct(string $trackingNumber, string $carrier, ?string $shippoApiVersion = null)
    {
        $this->trackingNumber = $trackingNumber;
        $this->carrier = $carrier;
        $this->shippoApiVersion = $shippoApiVersion;
    }
}