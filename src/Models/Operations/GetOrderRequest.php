<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class GetOrderRequest
{
    /**
     * Object ID of the order
     *
     * @var string $orderId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=OrderId')]
    public string $orderId;

    /**
     * String used to pick a non-default API version to use
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    public function __construct()
    {
        $this->orderId = '';
        $this->shippoApiVersion = null;
    }
}