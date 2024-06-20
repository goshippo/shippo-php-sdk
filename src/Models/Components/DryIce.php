<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** DryIce - Specify that the package contains Dry Ice (FedEx, Veho, and UPS only). */
class DryIce
{
    /**
     * Mandatory. Specifies that the package contains Dry Ice.
     *
     * @var ?bool $containsDryIce
     */
    #[\JMS\Serializer\Annotation\SerializedName('contains_dry_ice')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $containsDryIce = null;

    /**
     * Mandatory. Units must be in Kilograms. Cannot be greater than package weight.
     *
     * @var ?string $weight
     */
    #[\JMS\Serializer\Annotation\SerializedName('weight')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $weight = null;

    public function __construct()
    {
        $this->containsDryIce = null;
        $this->weight = null;
    }
}