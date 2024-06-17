<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/**
 * ParcelExtra - An object holding optional extra services to be requested for each parcel in a multi-piece shipment. 
 *
 * See the <a href="#section/Parcel-Extras">Parcel Extra table below</a> for all available services.
 */
class ParcelExtra
{
    /**
     * Specify collection on delivery details (UPS only).
     *
     * @var ?\Shippo\API\Models\Components\Cod $cod
     */
    #[\JMS\Serializer\Annotation\SerializedName('COD')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\Cod')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Cod $cod = null;

    /**
     * To add insurace to your parcel, specify `amount`, `content` and `currency`. <br><br>If you do not want to add insurance to you parcel, do not set these parameters.
     *
     * @var ?\Shippo\API\Models\Components\ParcelInsurance $insurance
     */
    #[\JMS\Serializer\Annotation\SerializedName('insurance')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\ParcelInsurance')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ParcelInsurance $insurance = null;

    /**
     * Optional text to be printed on the shipping label if supported by carrier. Up to 50 characters.
     *
     * @var ?string $reference1
     */
    #[\JMS\Serializer\Annotation\SerializedName('reference_1')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $reference1 = null;

    /**
     * Optional text to be printed on the shipping label if supported by carrier. Up to 50 characters.
     *
     * @var ?string $reference2
     */
    #[\JMS\Serializer\Annotation\SerializedName('reference_2')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $reference2 = null;

    public function __construct()
    {
        $this->cod = null;
        $this->insurance = null;
        $this->reference1 = null;
        $this->reference2 = null;
    }
}