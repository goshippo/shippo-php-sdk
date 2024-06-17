<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** Alcohol - Indicates that a shipment contains Alcohol (Fedex and UPS only). */
class Alcohol
{
    /**
     * Mandatory for Fedex and UPS. Specifies that the package contains Alcohol.
     *
     * @var ?bool $containsAlcohol
     */
    #[\JMS\Serializer\Annotation\SerializedName('contains_alcohol')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $containsAlcohol = null;

    /**
     * Mandatory for Fedex only. License type of the recipient of the Alcohol Package.
     *
     * @var ?\Shippo\API\Models\Components\RecipientType $recipientType
     */
    #[\JMS\Serializer\Annotation\SerializedName('recipient_type')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\RecipientType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?RecipientType $recipientType = null;

    public function __construct()
    {
        $this->containsAlcohol = null;
        $this->recipientType = null;
    }
}