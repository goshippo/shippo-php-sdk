<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class ParcelPaginatedList
{
    #[\JMS\Serializer\Annotation\SerializedName('next')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $next = null;

    #[\JMS\Serializer\Annotation\SerializedName('previous')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $previous = null;

    /**
     * $results
     *
     * @var ?array<\Shippo\API\Models\Components\Parcel> $results
     */
    #[\JMS\Serializer\Annotation\SerializedName('results')]
    #[\JMS\Serializer\Annotation\Type('array<Shippo\API\Models\Components\Parcel>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $results = null;

    public function __construct()
    {
        $this->next = null;
        $this->previous = null;
        $this->results = null;
    }
}