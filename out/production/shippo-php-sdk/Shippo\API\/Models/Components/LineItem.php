<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class LineItem
{
    /**
     * Currency of the <code>total_price</code> amount.
     *
     * @var ?string $currency
     */
    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $currency = null;

    /**
     * Country the item was manufactured in. In the Shippo dashboard, this value will be used ot pre-fill the customs declaration when creating a label for this order.
     *
     * @var ?string $manufactureCountry
     */
    #[\JMS\Serializer\Annotation\SerializedName('manufacture_country')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $manufactureCountry = null;

    /**
     * The date and time this item needs to be delivered by, i.e. by when the carrier delivers it to the buyer. 
     *
     * This value is used by some platforms such as eBay to measure a seller's shipping time and performance. 
     * It will be displayed in the Shippo dashboard.
     *
     * @var ?\DateTime $maxDeliveryTime
     */
    #[\JMS\Serializer\Annotation\SerializedName('max_delivery_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $maxDeliveryTime = null;

    /**
     * The date and time this item needs to be fulfilled by, i.e. by when the shipping label needs to be 
     *
     * created and handed over to the carrier. This value is used by some platforms such as eBay to measure 
     * a seller's handling time and performance. It will be displayed in the Shippo dashboard.
     *
     * @var ?\DateTime $maxShipTime
     */
    #[\JMS\Serializer\Annotation\SerializedName('max_ship_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $maxShipTime = null;

    /**
     * The quantity of this item in this order.
     *
     * @var ?int $quantity
     */
    #[\JMS\Serializer\Annotation\SerializedName('quantity')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $quantity = null;

    /**
     * The stock keeping unit value of this item.
     *
     * @var ?string $sku
     */
    #[\JMS\Serializer\Annotation\SerializedName('sku')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $sku = null;

    /**
     * Title of the line item.
     *
     * @var ?string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title = null;

    /**
     * Total price paid by the buyer for this item (or these items, if quantity > 1).
     *
     * @var ?string $totalPrice
     */
    #[\JMS\Serializer\Annotation\SerializedName('total_price')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $totalPrice = null;

    /**
     * A variant is a specific variation of an item (e.g. `size M` or `color blue`). 
     *
     * Variants might be exposed as a separate resource in the future too. 
     * Currently the variant title is a free text field describing the variant.
     *
     * @var ?string $variantTitle
     */
    #[\JMS\Serializer\Annotation\SerializedName('variant_title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $variantTitle = null;

    /**
     * Total weight of this/these item(s). Instead of specifying the weight of all items, 
     *
     * you can also set the <code>total_weight</code> value of the order object.
     *
     * @var ?string $weight
     */
    #[\JMS\Serializer\Annotation\SerializedName('weight')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $weight = null;

    /**
     * The unit used for weight.
     *
     * @var ?\Shippo\API\Models\Components\WeightUnitEnum $weightUnit
     */
    #[\JMS\Serializer\Annotation\SerializedName('weight_unit')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\WeightUnitEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?WeightUnitEnum $weightUnit = null;

    /**
     * Unique identifier of the line item object.
     *
     * @var ?string $objectId
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $objectId = null;

    public function __construct()
    {
        $this->currency = null;
        $this->manufactureCountry = null;
        $this->maxDeliveryTime = null;
        $this->maxShipTime = null;
        $this->quantity = null;
        $this->sku = null;
        $this->title = null;
        $this->totalPrice = null;
        $this->variantTitle = null;
        $this->weight = null;
        $this->weightUnit = null;
        $this->objectId = null;
    }
}