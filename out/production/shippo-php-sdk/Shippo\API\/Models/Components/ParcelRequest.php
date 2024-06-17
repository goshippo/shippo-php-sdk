<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class ParcelRequest
{
    /**
     * The measure unit used for length, width and height.
     *
     * @var \Shippo\API\Models\Components\DistanceUnitEnum $distanceUnit
     */
    #[\JMS\Serializer\Annotation\SerializedName('distance_unit')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\DistanceUnitEnum>')]
    public DistanceUnitEnum $distanceUnit;

    /**
     * An object holding optional extra services to be requested for each parcel in a multi-piece shipment. 
     *
     * See the <a href="#section/Parcel-Extras">Parcel Extra table below</a> for all available services.
     *
     * @var ?\Shippo\API\Models\Components\ParcelExtra $extra
     */
    #[\JMS\Serializer\Annotation\SerializedName('extra')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\ParcelExtra')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ParcelExtra $extra = null;

    /**
     * Required if template is not specified. Height of the parcel. Up to six digits in front and four digits after the decimal separator are accepted.
     *
     * @var string $height
     */
    #[\JMS\Serializer\Annotation\SerializedName('height')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $height;

    /**
     * Required if template is not specified. Length of the Parcel. Up to six digits in front and four digits after the decimal separator are accepted.
     *
     * @var string $length
     */
    #[\JMS\Serializer\Annotation\SerializedName('length')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $length;

    /**
     * The unit used for weight.
     *
     * @var \Shippo\API\Models\Components\WeightUnitEnum $massUnit
     */
    #[\JMS\Serializer\Annotation\SerializedName('mass_unit')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\WeightUnitEnum>')]
    public WeightUnitEnum $massUnit;

    /**
     * A string of up to 100 characters that can be filled with any additional information you want to attach to the object.
     *
     * @var ?string $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metadata = null;

    /**
     * If template is passed, `length`, `width`, `height`, and `distance_unit` are not required
     *
     * @var mixed $template
     */
    #[\JMS\Serializer\Annotation\SerializedName('template')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $template = null;

    /**
     * Indicates whether the object has been created in test mode.
     *
     * @var ?bool $test
     */
    #[\JMS\Serializer\Annotation\SerializedName('test')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $test = null;

    /**
     * Weight of the parcel. Up to six digits in front and four digits after the decimal separator are accepted.
     *
     * @var string $weight
     */
    #[\JMS\Serializer\Annotation\SerializedName('weight')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $weight;

    /**
     * Required if template is not specified. Width of the Parcel. Up to six digits in front and four digits after the decimal separator are accepted.
     *
     * @var string $width
     */
    #[\JMS\Serializer\Annotation\SerializedName('width')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $width;

    public function __construct()
    {
        $this->distanceUnit = \Shippo\API\Models\Components\DistanceUnitEnum::Cm;
        $this->extra = null;
        $this->height = '';
        $this->length = '';
        $this->massUnit = \Shippo\API\Models\Components\WeightUnitEnum::G;
        $this->metadata = null;
        $this->template = null;
        $this->test = null;
        $this->weight = '';
        $this->width = '';
    }
}