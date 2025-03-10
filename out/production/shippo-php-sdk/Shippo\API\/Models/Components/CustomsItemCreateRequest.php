<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class CustomsItemCreateRequest
{
    /**
     * Text description of your item.
     *
     * @var string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;

    /**
     * Export Control Classification Number, required on some exports from the United States.
     *
     * @var ?string $eccnEar99
     */
    #[\JMS\Serializer\Annotation\SerializedName('eccn_ear99')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $eccnEar99 = null;

    /**
     * The unit used for weight.
     *
     * @var \Shippo\API\Models\Components\WeightUnitEnum $massUnit
     */
    #[\JMS\Serializer\Annotation\SerializedName('mass_unit')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\WeightUnitEnum>')]
    public WeightUnitEnum $massUnit;

    /**
     * A string of up to 100 characters that can be filled with any additional information you 
     *
     * want to attach to the object.
     *
     * @var ?string $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metadata = null;

    /**
     * Total weight of this item, i.e. quantity * weight per item.
     *
     * @var string $netWeight
     */
    #[\JMS\Serializer\Annotation\SerializedName('net_weight')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $netWeight;

    /**
     * Country of origin of the item. Example: `US` or `DE`. 
     *
     * All accepted values can be found on the <a href="http://www.iso.org/" target="_blank">Official ISO Website</a>.
     *
     * @var string $originCountry
     */
    #[\JMS\Serializer\Annotation\SerializedName('origin_country')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $originCountry;

    /**
     * Quantity of this item in the shipment you send.  Must be greater than 0.
     *
     * @var int $quantity
     */
    #[\JMS\Serializer\Annotation\SerializedName('quantity')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $quantity;

    /**
     * SKU code of the item, which is required by some carriers.
     *
     * @var ?string $skuCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('sku_code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $skuCode = null;

    /**
     * HS code of the item, which is required by some carriers.
     *
     * @var ?string $hsCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('hs_code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $hsCode = null;

    /**
     * The tariff number of the item.
     *
     * @var ?string $tariffNumber
     */
    #[\JMS\Serializer\Annotation\SerializedName('tariff_number')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $tariffNumber = null;

    /**
     * Total value of this item, i.e. quantity * value per item.
     *
     * @var string $valueAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('value_amount')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $valueAmount;

    /**
     * Currency used for value_amount. The <a href="http://www.xe.com/iso4217.php">official ISO 4217</a> 
     *
     * currency codes are used, e.g.  `USD` or `EUR`.
     *
     * @var string $valueCurrency
     */
    #[\JMS\Serializer\Annotation\SerializedName('value_currency')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $valueCurrency;

    public function __construct()
    {
        $this->description = '';
        $this->eccnEar99 = null;
        $this->massUnit = \Shippo\API\Models\Components\WeightUnitEnum::G;
        $this->metadata = null;
        $this->netWeight = '';
        $this->originCountry = '';
        $this->quantity = 0;
        $this->skuCode = null;
        $this->hsCode = null;
        $this->tariffNumber = null;
        $this->valueAmount = '';
        $this->valueCurrency = '';
    }
}