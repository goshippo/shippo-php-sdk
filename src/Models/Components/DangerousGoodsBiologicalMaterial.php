<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** DangerousGoodsBiologicalMaterial - Container for specifying the presence of biological material. */
class DangerousGoodsBiologicalMaterial
{
    /**
     * Indicates if the shipment contains biological material.
     *
     * @var ?bool $contains
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contains')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $contains = null;

    /**
     * @param  ?bool  $contains
     * @phpstan-pure
     */
    public function __construct(?bool $contains = null)
    {
        $this->contains = $contains;
    }
}