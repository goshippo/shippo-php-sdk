<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class DefaultParcelTemplateUpdateRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('object_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $objectId = null;

    public function __construct()
    {
        $this->objectId = null;
    }
}