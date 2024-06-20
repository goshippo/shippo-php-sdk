<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class GetRateRequest
{
    /**
     * Object ID of the rate
     *
     * @var string $rateId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=RateId')]
    public string $rateId;

    /**
     * String used to pick a non-default API version to use
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    public function __construct()
    {
        $this->rateId = '';
        $this->shippoApiVersion = null;
    }
}