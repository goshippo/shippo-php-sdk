<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class ListCarrierAccountsRequest
{
    /**
     * Appends the property `service_levels` to each returned carrier account
     *
     * @var ?bool $serviceLevels
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=service_levels')]
    public ?bool $serviceLevels = null;

    /**
     * Filter the response by the specified carrier
     *
     * @var ?\Shippo\API\Models\Components\CarriersEnum $carrier
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=carrier')]
    public ?\Shippo\API\Models\Components\CarriersEnum $carrier = null;

    /**
     * Filter the response by the specified carrier account Id
     *
     * @var ?string $accountId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=account_id')]
    public ?string $accountId = null;

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
     * String used to pick a non-default API version to use
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    public function __construct()
    {
        $this->serviceLevels = null;
        $this->carrier = null;
        $this->accountId = null;
        $this->page = null;
        $this->results = null;
        $this->shippoApiVersion = null;
    }
}