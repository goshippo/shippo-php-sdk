<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class GetParcelRequest
{
    /**
     * Object ID of the parcel
     *
     * @var string $parcelId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ParcelId')]
    public string $parcelId;

    /**
     * String used to pick a non-default API version to use
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    public function __construct()
    {
        $this->parcelId = '';
        $this->shippoApiVersion = null;
    }
}