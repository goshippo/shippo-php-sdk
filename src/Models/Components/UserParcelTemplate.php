<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class UserParcelTemplate
{
    /**
     * The measure unit used for length, width and height.
     *
     * @var ?DistanceUnitEnum $distanceUnit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('distance_unit')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\DistanceUnitEnum|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?DistanceUnitEnum $distanceUnit = null;

    /**
     * The height of the package, in units specified by the `distance_unit` attribute. Required, but if using a preset carrier template then this field must be empty.
     *
     * @var ?string $height
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('height')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $height = null;

    /**
     * The length of the package, in units specified by the `distance_unit` attribute. Required, but if using a preset carrier template then this field must be empty.
     *
     * @var ?string $length
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('length')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $length = null;

    /**
     * The name of the User Parcel Template
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The weight of the package, in units specified by the weight_unit attribute.
     *
     * @var ?string $weight
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('weight')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $weight = null;

    /**
     * The unit used for weight.
     *
     * @var ?WeightUnitEnum $weightUnit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('weight_unit')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\WeightUnitEnum|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?WeightUnitEnum $weightUnit = null;

    /**
     * The width of the package, in units specified by the `distance_unit` attribute. Required, but if using a preset carrier template then this field must be empty.
     *
     * @var ?string $width
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('width')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $width = null;

    /**
     * Date and time of User Parcel Template creation
     *
     * @var ?\DateTime $objectCreated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_created')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $objectCreated = null;

    /**
     * Unique identifier of the given User Parcel Template object
     *
     * @var ?string $objectId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $objectId = null;

    /**
     * Username of the user who created the User Parcel Template object
     *
     * @var ?string $objectOwner
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_owner')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $objectOwner = null;

    /**
     * Date and time of last update on User Parcel Template
     *
     * @var ?\DateTime $objectUpdated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_updated')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $objectUpdated = null;

    /**
     *
     * @var ?CarrierParcelTemplate $template
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('template')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\CarrierParcelTemplate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CarrierParcelTemplate $template = null;

    /**
     * @param  ?DistanceUnitEnum  $distanceUnit
     * @param  ?string  $height
     * @param  ?string  $length
     * @param  ?string  $name
     * @param  ?string  $weight
     * @param  ?WeightUnitEnum  $weightUnit
     * @param  ?string  $width
     * @param  ?\DateTime  $objectCreated
     * @param  ?string  $objectId
     * @param  ?string  $objectOwner
     * @param  ?\DateTime  $objectUpdated
     * @param  ?CarrierParcelTemplate  $template
     */
    public function __construct(?DistanceUnitEnum $distanceUnit = null, ?string $height = null, ?string $length = null, ?string $name = null, ?string $weight = null, ?WeightUnitEnum $weightUnit = null, ?string $width = null, ?\DateTime $objectCreated = null, ?string $objectId = null, ?string $objectOwner = null, ?\DateTime $objectUpdated = null, ?CarrierParcelTemplate $template = null)
    {
        $this->distanceUnit = $distanceUnit;
        $this->height = $height;
        $this->length = $length;
        $this->name = $name;
        $this->weight = $weight;
        $this->weightUnit = $weightUnit;
        $this->width = $width;
        $this->objectCreated = $objectCreated;
        $this->objectId = $objectId;
        $this->objectOwner = $objectOwner;
        $this->objectUpdated = $objectUpdated;
        $this->template = $template;
    }
}