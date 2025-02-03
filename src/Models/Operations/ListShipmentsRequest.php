<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class ListShipmentsRequest
{
    /**
     * The page token for paginated results
     *
     * @var ?string $pageToken
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_token')]
    public ?string $pageToken = null;

    /**
     * Object(s) created greater than a provided date and time.
     *
     * @var ?string $objectCreatedGt
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=object_created_gt')]
    public ?string $objectCreatedGt = null;

    /**
     * Object(s) created greater than or equal to a provided date and time.
     *
     * @var ?string $objectCreatedGte
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=object_created_gte')]
    public ?string $objectCreatedGte = null;

    /**
     * Object(s) created lesser than a provided date and time.
     *
     * @var ?string $objectCreatedLt
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=object_created_lt')]
    public ?string $objectCreatedLt = null;

    /**
     * Object(s) created lesser than or equal to a provided date and time.
     *
     * @var ?string $objectCreatedLte
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=object_created_lte')]
    public ?string $objectCreatedLte = null;

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
     * The number of results to return per page (max 100)
     *
     * @var ?int $results
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=results')]
    public ?int $results = null;

    /**
     * @param  ?string  $pageToken
     * @param  ?int  $page
     * @param  ?int  $results
     * @param  ?string  $objectCreatedGt
     * @param  ?string  $objectCreatedGte
     * @param  ?string  $objectCreatedLt
     * @param  ?string  $objectCreatedLte
     * @param  ?string  $shippoApiVersion
     */
    public function __construct(?string $pageToken = null, ?string $objectCreatedGt = null, ?string $objectCreatedGte = null, ?string $objectCreatedLt = null, ?string $objectCreatedLte = null, ?string $shippoApiVersion = null, ?int $page = 1, ?int $results = 25)
    {
        $this->pageToken = $pageToken;
        $this->objectCreatedGt = $objectCreatedGt;
        $this->objectCreatedGte = $objectCreatedGte;
        $this->objectCreatedLt = $objectCreatedLt;
        $this->objectCreatedLte = $objectCreatedLte;
        $this->shippoApiVersion = $shippoApiVersion;
        $this->page = $page;
        $this->results = $results;
    }
}