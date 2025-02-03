<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class CarrierAccountPaginatedList
{
    /**
     *
     * @var ?string $next
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('next')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $next = null;

    /**
     *
     * @var ?string $previous
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('previous')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $previous = null;

    /**
     * $results
     *
     * @var ?array<CarrierAccountWithExtraInfo> $results
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('results')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Shippo\API\Models\Components\CarrierAccountWithExtraInfo>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $results = null;

    /**
     * @param  ?string  $next
     * @param  ?string  $previous
     * @param  ?array<CarrierAccountWithExtraInfo>  $results
     */
    public function __construct(?string $next = null, ?string $previous = null, ?array $results = null)
    {
        $this->next = $next;
        $this->previous = $previous;
        $this->results = $results;
    }
}