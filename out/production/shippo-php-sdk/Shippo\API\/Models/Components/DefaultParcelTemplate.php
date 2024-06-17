<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class DefaultParcelTemplate
{
    #[\JMS\Serializer\Annotation\SerializedName('result')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\UserParcelTemplate')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UserParcelTemplate $result = null;

    public function __construct()
    {
        $this->result = null;
    }
}