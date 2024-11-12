<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class CustomsItem
{
    /**
     * Text description of your item.
     *
     * @var string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public string $description;

    /**
     * Export Control Classification Number, required on some exports from the United States.
     *
     * @var ?string $eccnEar99
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('eccn_ear99')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $eccnEar99 = null;

    /**
     * The unit used for weight.
     *
     * @var WeightUnitEnum $massUnit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mass_unit')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\WeightUnitEnum')]
    public WeightUnitEnum $massUnit;

    /**
     * A string of up to 100 characters that can be filled with any additional information you 
     *
     * want to attach to the object.
     *
     * @var ?string $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $metadata = null;

    /**
     * Total weight of this item, i.e. quantity * weight per item.
     *
     * @var string $netWeight
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('net_weight')]
    public string $netWeight;

    /**
     * Country of origin of the item. Example: `US` or `DE`. 
     *
     * All accepted values can be found on the <a href="http://www.iso.org/" target="_blank">Official ISO Website</a>.
     *
     * @var string $originCountry
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('origin_country')]
    public string $originCountry;

    /**
     * Quantity of this item in the shipment you send.  Must be greater than 0.
     *
     * @var int $quantity
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('quantity')]
    public int $quantity;

    /**
     * SKU code of the item, which is required by some carriers.
     *
     * @var ?string $skuCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sku_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $skuCode = null;

    /**
     * HS code of the item, which is required by some carriers. If `tariff_number` is not provided, `hs_code` will be used.  If both `hs_code` and `tariff_number` are provided, `tariff_number` will be used. 50 character limit.
     *
     * @var ?string $hsCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hs_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $hsCode = null;

    /**
     * The tariff number of the item. If `tariff_number` is not provided, `hs_code` will be used. If both `hs_code` and `tariff_number` are provided, `tariff_number` will be used. 12 character limit.
     *
     * @var ?string $tariffNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tariff_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $tariffNumber = null;

    /**
     * Total value of this item, i.e. quantity * value per item.
     *
     * @var string $valueAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value_amount')]
    public string $valueAmount;

    /**
     * Currency used for value_amount. The <a href="http://www.xe.com/iso4217.php">official ISO 4217</a> 
     *
     * currency codes are used, e.g.  `USD` or `EUR`.
     *
     * @var string $valueCurrency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value_currency')]
    public string $valueCurrency;

    /**
     * Date and time of object creation.
     *
     * @var ?\DateTime $objectCreated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_created')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $objectCreated = null;

    /**
     * Unique identifier of the given object.
     *
     * @var ?string $objectId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $objectId = null;

    /**
     * Username of the user who created the object.
     *
     * @var ?string $objectOwner
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_owner')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $objectOwner = null;

    /**
     * Indicates the validity of the enclosing object
     *
     * @var ?ObjectStateEnum $objectState
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_state')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\ObjectStateEnum|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ObjectStateEnum $objectState = null;

    /**
     * Date and time of last object update.
     *
     * @var ?\DateTime $objectUpdated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_updated')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $objectUpdated = null;

    /**
     * Indicates whether the object has been created in test mode.
     *
     * @var ?bool $test
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('test')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $test = null;

    /**
     * @param  string  $description
     * @param  WeightUnitEnum  $massUnit
     * @param  string  $netWeight
     * @param  string  $originCountry
     * @param  int  $quantity
     * @param  string  $valueAmount
     * @param  string  $valueCurrency
     * @param  ?string  $eccnEar99
     * @param  ?string  $metadata
     * @param  ?string  $skuCode
     * @param  ?string  $hsCode
     * @param  ?string  $tariffNumber
     * @param  ?\DateTime  $objectCreated
     * @param  ?string  $objectId
     * @param  ?string  $objectOwner
     * @param  ?ObjectStateEnum  $objectState
     * @param  ?\DateTime  $objectUpdated
     * @param  ?bool  $test
     */
    public function __construct(string $description, WeightUnitEnum $massUnit, string $netWeight, string $originCountry, int $quantity, string $valueAmount, string $valueCurrency, ?string $eccnEar99 = null, ?string $metadata = null, ?string $skuCode = null, ?string $hsCode = null, ?string $tariffNumber = null, ?\DateTime $objectCreated = null, ?string $objectId = null, ?string $objectOwner = null, ?ObjectStateEnum $objectState = null, ?\DateTime $objectUpdated = null, ?bool $test = null)
    {
        $this->description = $description;
        $this->massUnit = $massUnit;
        $this->netWeight = $netWeight;
        $this->originCountry = $originCountry;
        $this->quantity = $quantity;
        $this->valueAmount = $valueAmount;
        $this->valueCurrency = $valueCurrency;
        $this->eccnEar99 = $eccnEar99;
        $this->metadata = $metadata;
        $this->skuCode = $skuCode;
        $this->hsCode = $hsCode;
        $this->tariffNumber = $tariffNumber;
        $this->objectCreated = $objectCreated;
        $this->objectId = $objectId;
        $this->objectOwner = $objectOwner;
        $this->objectState = $objectState;
        $this->objectUpdated = $objectUpdated;
        $this->test = $test;
    }
}