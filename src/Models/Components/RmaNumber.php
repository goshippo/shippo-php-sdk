<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** RmaNumber - Specify the RMA number field on the label (FedEx and UPS only). */
class RmaNumber
{
    /**
     * Custom prefix for RMA number field (ZPL labels only). Up to 11 characters, including trailing 
     *
     * spaces. Empty string indicates removal of default prefix. To use the default prefix, do not include
     * this property.
     *
     * @var ?string $prefix
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('prefix')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $prefix = null;

    /**
     * Optional text to be printed on the shipping label for RMA number. Up to 40 characters.
     *
     * @var ?string $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $value = null;

    /**
     * Order UPS reference fields are printed on ZPL labels. For UPS shipments, if you choose to set `ref_sort` for one reference, you must set `ref_sort` for all other supported UPS references using unique integers.
     *
     * @var ?int $refSort
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ref_sort')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $refSort = null;

    /**
     * @param  ?string  $prefix
     * @param  ?string  $value
     * @param  ?int  $refSort
     * @phpstan-pure
     */
    public function __construct(?string $prefix = null, ?string $value = null, ?int $refSort = null)
    {
        $this->prefix = $prefix;
        $this->value = $value;
        $this->refSort = $refSort;
    }
}