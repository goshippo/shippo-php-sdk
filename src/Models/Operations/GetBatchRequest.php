<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class GetBatchRequest
{
    /**
     * Object ID of the batch
     *
     * @var string $batchId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=BatchId')]
    public string $batchId;

    /**
     * Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide.
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    /**
     * The page number you want to select
     *
     * @var ?int $page
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?int $page = null;

    /**
     * The number of results to return per page (max 100, default 5)
     *
     * @var ?int $results
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=results')]
    public ?int $results = null;

    /**
     * @param  string  $batchId
     * @param  ?int  $page
     * @param  ?int  $results
     * @param  ?string  $shippoApiVersion
     * @phpstan-pure
     */
    public function __construct(string $batchId, ?string $shippoApiVersion = null, ?int $page = 1, ?int $results = 5)
    {
        $this->batchId = $batchId;
        $this->shippoApiVersion = $shippoApiVersion;
        $this->page = $page;
        $this->results = $results;
    }
}