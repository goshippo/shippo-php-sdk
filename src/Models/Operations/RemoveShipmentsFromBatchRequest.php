<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class RemoveShipmentsFromBatchRequest
{
    /**
     * Object ID of the batch
     *
     * @var string $batchId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=BatchId')]
    public string $batchId;

    /**
     * Array of shipments object ids to remove from the batch
     *
     * @var array<string> $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public array $requestBody;

    /**
     * Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide.
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    /**
     * @param  string  $batchId
     * @param  array<string>  $requestBody
     * @param  ?string  $shippoApiVersion
     * @phpstan-pure
     */
    public function __construct(string $batchId, array $requestBody, ?string $shippoApiVersion = null)
    {
        $this->batchId = $batchId;
        $this->requestBody = $requestBody;
        $this->shippoApiVersion = $shippoApiVersion;
    }
}