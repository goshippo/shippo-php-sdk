<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class LiveRatePaginatedList
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
     *
     * @var ?int $count
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('count')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $count = null;

    /**
     * $results
     *
     * @var ?array<LiveRate> $results
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('results')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Shippo\API\Models\Components\LiveRate>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $results = null;

    /**
     * @param  ?string  $next
     * @param  ?string  $previous
     * @param  ?int  $count
     * @param  ?array<LiveRate>  $results
     * @phpstan-pure
     */
    public function __construct(?string $next = null, ?string $previous = null, ?int $count = null, ?array $results = null)
    {
        $this->next = $next;
        $this->previous = $previous;
        $this->count = $count;
        $this->results = $results;
    }
}