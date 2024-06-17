<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class AddShipmentsToBatchRequest
{
    /**
     * Object ID of the batch
     *
     * @var string $batchId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=BatchId')]
    public string $batchId;

    /**
     * Array of shipments to add to the batch
     *
     * @var array<\Shippo\API\Models\Components\BatchShipmentCreateRequest> $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public array $requestBody;

    /**
     * String used to pick a non-default API version to use
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    public function __construct()
    {
        $this->batchId = '';
        $this->requestBody = [];
        $this->shippoApiVersion = null;
    }
}