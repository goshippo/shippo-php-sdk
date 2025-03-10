<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class ParcelCreateRequest
{
    /**
     * The unit used for weight.
     *
     * @var WeightUnitEnum $massUnit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mass_unit')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\WeightUnitEnum')]
    public WeightUnitEnum $massUnit;

    /**
     * Weight of the parcel. Up to six digits in front and four digits after the decimal separator are accepted.
     *
     * @var string $weight
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('weight')]
    public string $weight;

    /**
     * The measure unit used for length, width and height.
     *
     * @var DistanceUnitEnum $distanceUnit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('distance_unit')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\DistanceUnitEnum')]
    public DistanceUnitEnum $distanceUnit;

    /**
     * Height of the parcel. Up to six digits in front and four digits after the decimal separator are accepted.
     *
     * @var string $height
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('height')]
    public string $height;

    /**
     * Length of the Parcel. Up to six digits in front and four digits after the decimal separator are accepted.
     *
     * @var string $length
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('length')]
    public string $length;

    /**
     * Width of the Parcel. Up to six digits in front and four digits after the decimal separator are accepted.
     *
     * @var string $width
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('width')]
    public string $width;

    /**
     * An object holding optional extra services to be requested for each parcel in a multi-piece shipment. 
     *
     * See the <a href="#section/Parcel-Extras">Parcel Extra table below</a> for all available services.
     *
     * @var ?ParcelExtra $extra
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('extra')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\ParcelExtra|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ParcelExtra $extra = null;

    /**
     *
     * @var ?string $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $metadata = null;

    /**
     * @param  WeightUnitEnum  $massUnit
     * @param  string  $weight
     * @param  DistanceUnitEnum  $distanceUnit
     * @param  string  $height
     * @param  string  $length
     * @param  string  $width
     * @param  ?ParcelExtra  $extra
     * @param  ?string  $metadata
     * @phpstan-pure
     */
    public function __construct(WeightUnitEnum $massUnit, string $weight, DistanceUnitEnum $distanceUnit, string $height, string $length, string $width, ?ParcelExtra $extra = null, ?string $metadata = null)
    {
        $this->massUnit = $massUnit;
        $this->weight = $weight;
        $this->distanceUnit = $distanceUnit;
        $this->height = $height;
        $this->length = $length;
        $this->width = $width;
        $this->extra = $extra;
        $this->metadata = $metadata;
    }
}