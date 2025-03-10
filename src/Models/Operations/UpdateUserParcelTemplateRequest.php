<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Models\Components;
use Shippo\API\Utils\SpeakeasyMetadata;
class UpdateUserParcelTemplateRequest
{
    /**
     * Object ID of the user parcel template
     *
     * @var string $userParcelTemplateObjectId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=UserParcelTemplateObjectId')]
    public string $userParcelTemplateObjectId;

    /**
     * Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide.
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    /**
     *
     * @var ?Components\UserParcelTemplateUpdateRequest $userParcelTemplateUpdateRequest
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Components\UserParcelTemplateUpdateRequest $userParcelTemplateUpdateRequest = null;

    /**
     * @param  string  $userParcelTemplateObjectId
     * @param  ?string  $shippoApiVersion
     * @param  ?Components\UserParcelTemplateUpdateRequest  $userParcelTemplateUpdateRequest
     * @phpstan-pure
     */
    public function __construct(string $userParcelTemplateObjectId, ?string $shippoApiVersion = null, ?Components\UserParcelTemplateUpdateRequest $userParcelTemplateUpdateRequest = null)
    {
        $this->userParcelTemplateObjectId = $userParcelTemplateObjectId;
        $this->shippoApiVersion = $shippoApiVersion;
        $this->userParcelTemplateUpdateRequest = $userParcelTemplateUpdateRequest;
    }
}