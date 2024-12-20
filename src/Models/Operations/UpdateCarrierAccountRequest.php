<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class UpdateCarrierAccountRequest
{
    /**
     * Object ID of the carrier account
     *
     * @var string $carrierAccountId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=CarrierAccountId')]
    public string $carrierAccountId;

    /**
     * String used to pick a non-default API version to use
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    /**
     * Examples.
     *
     * @var ?\Shippo\API\Models\Components\CarrierAccountBase $carrierAccountBase
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Shippo\API\Models\Components\CarrierAccountBase $carrierAccountBase = null;

    public function __construct()
    {
        $this->carrierAccountId = '';
        $this->shippoApiVersion = null;
        $this->carrierAccountBase = null;
    }
}