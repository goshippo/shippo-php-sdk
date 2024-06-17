<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class CreateRefundRequest
{
    /**
     * Refund details
     *
     * @var \Shippo\API\Models\Components\RefundRequestBody $refundRequestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Shippo\API\Models\Components\RefundRequestBody $refundRequestBody;

    /**
     * String used to pick a non-default API version to use
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    public function __construct()
    {
        $this->refundRequestBody = new \Shippo\API\Models\Components\RefundRequestBody();
        $this->shippoApiVersion = null;
    }
}