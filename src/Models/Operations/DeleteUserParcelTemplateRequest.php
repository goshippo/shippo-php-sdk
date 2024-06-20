<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class DeleteUserParcelTemplateRequest
{
    /**
     * Object ID of the user parcel template
     *
     * @var string $userParcelTemplateObjectId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=UserParcelTemplateObjectId')]
    public string $userParcelTemplateObjectId;

    /**
     * String used to pick a non-default API version to use
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    public function __construct()
    {
        $this->userParcelTemplateObjectId = '';
        $this->shippoApiVersion = null;
    }
}