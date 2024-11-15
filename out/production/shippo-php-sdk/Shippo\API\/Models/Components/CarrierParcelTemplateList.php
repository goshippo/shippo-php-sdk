<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class CarrierParcelTemplateList
{
    /**
     * $results
     *
     * @var ?array<\Shippo\API\Models\Components\CarrierParcelTemplate> $results
     */
    #[\JMS\Serializer\Annotation\SerializedName('results')]
    #[\JMS\Serializer\Annotation\Type('array<Shippo\API\Models\Components\CarrierParcelTemplate>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $results = null;

    public function __construct()
    {
        $this->results = null;
    }
}