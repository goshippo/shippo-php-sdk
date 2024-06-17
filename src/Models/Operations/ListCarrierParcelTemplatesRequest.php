<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class ListCarrierParcelTemplatesRequest
{
    /**
     * filter by user or enabled
     *
     * @var ?\Shippo\API\Models\Operations\IncludeT $include
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=include')]
    public ?IncludeT $include = null;

    /**
     * filter by specific carrier
     *
     * @var ?string $carrier
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=carrier')]
    public ?string $carrier = null;

    /**
     * String used to pick a non-default API version to use
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    public function __construct()
    {
        $this->include = null;
        $this->carrier = null;
        $this->shippoApiVersion = null;
    }
}