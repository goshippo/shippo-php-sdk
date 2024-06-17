<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class GetCarrierParcelTemplateRequest
{
    /**
     * The unique string representation of the carrier parcel template
     *
     * @var string $carrierParcelTemplateToken
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=CarrierParcelTemplateToken')]
    public string $carrierParcelTemplateToken;

    /**
     * String used to pick a non-default API version to use
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    public function __construct()
    {
        $this->carrierParcelTemplateToken = '';
        $this->shippoApiVersion = null;
    }
}