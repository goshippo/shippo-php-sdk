<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class Order
{
    /**
     * **Required if total_price is provided**<br>
     *
     * Currency of the <code>total_price</code> and <code>total_tax</code> amounts.
     *
     * @var ?string $currency
     */
    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $currency = null;

    /**
     * Custom buyer- or seller-provided notes about the order.
     *
     * @var ?string $notes
     */
    #[\JMS\Serializer\Annotation\SerializedName('notes')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $notes = null;

    /**
     * An alphanumeric identifier for the order used by the seller/buyer. This identifier doesn't need to be unique.
     *
     * @var ?string $orderNumber
     */
    #[\JMS\Serializer\Annotation\SerializedName('order_number')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $orderNumber = null;

    /**
     * Current state of the order. See the <a href="https://docs.goshippo.com/docs/orders/orders/">orders tutorial</a> 
     *
     * for the logic of how the status is handled.
     *
     * @var ?\Shippo\API\Models\Components\OrderStatusEnum $orderStatus
     */
    #[\JMS\Serializer\Annotation\SerializedName('order_status')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\OrderStatusEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?OrderStatusEnum $orderStatus = null;

    /**
     * Date and time when the order was placed. This datetime can be different from the datetime of the order object creation on Shippo.
     *
     * @var string $placedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('placed_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $placedAt;

    /**
     * Amount paid by the buyer for shipping. This amount can be different from the price the seller will actually pay for shipping.
     *
     * @var ?string $shippingCost
     */
    #[\JMS\Serializer\Annotation\SerializedName('shipping_cost')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $shippingCost = null;

    /**
     * **Required if shipping_cost is provided**<br>
     *
     * Currency of the <code>shipping_cost</code> amount.
     *
     * @var ?string $shippingCostCurrency
     */
    #[\JMS\Serializer\Annotation\SerializedName('shipping_cost_currency')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $shippingCostCurrency = null;

    /**
     * Shipping method (carrier + service or other free text description) chosen by the buyer. 
     *
     * This value can be different from the shipping method the seller will actually choose.
     *
     * @var ?string $shippingMethod
     */
    #[\JMS\Serializer\Annotation\SerializedName('shipping_method')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $shippingMethod = null;

    #[\JMS\Serializer\Annotation\SerializedName('subtotal_price')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subtotalPrice = null;

    /**
     * Total amount paid by the buyer for this order.
     *
     * @var ?string $totalPrice
     */
    #[\JMS\Serializer\Annotation\SerializedName('total_price')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $totalPrice = null;

    /**
     * Total tax amount paid by the buyer for this order.
     *
     * @var ?string $totalTax
     */
    #[\JMS\Serializer\Annotation\SerializedName('total_tax')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $totalTax = null;

    /**
     * Total weight of the order.
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
     * <a href="#tag/Addresses">Address</a> object of the sender / seller. Will be returned expanded by default.
     *
     * @var ?\Shippo\API\Models\Components\Address $fromAddress
     */
    #[\JMS\Serializer\Annotation\SerializedName('from_address')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\Address')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Address $fromAddress = null;

    /**
     * <a href="#tag/Addresses">Address</a> object of the recipient / buyer. Will be returned expanded by default.
     *
     * @var \Shippo\API\Models\Components\Address $toAddress
     */
    #[\JMS\Serializer\Annotation\SerializedName('to_address')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\Address')]
    public Address $toAddress;

    /**
     * Array of <a href="#section/Line-Item">line item</a> objects representing the items in this order. 
     *
     * All objects will be returned expanded by default.
     *
     * @var ?array<\Shippo\API\Models\Components\LineItem> $lineItems
     */
    #[\JMS\Serializer\Annotation\SerializedName('line_items')]
    #[\JMS\Serializer\Annotation\Type('array<Shippo\API\Models\Components\LineItem>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $lineItems = null;

    /**
     * Unique identifier of the order object.
     *
     * @var ?string $objectId
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $objectId = null;

    /**
     * Username of the user who created the object.
     *
     * @var ?string $objectOwner
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_owner')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $objectOwner = null;

    /**
     * Platform the order was created on and, if applicable, imported from. 
     *
     * Orders created via the Shippo API or dashboard will have the value "Shippo".
     *
     * @var ?\Shippo\API\Models\Components\ShopApp $shopApp
     */
    #[\JMS\Serializer\Annotation\SerializedName('shop_app')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\ShopApp>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ShopApp $shopApp = null;

    /**
     * Array of <a href="#tag/Transactions">transaction</a> objects representing all shipping labels purchased for this order.
     *
     * All objects are returned expanded with a limited number of fields by default.
     *
     * @var ?array<string> $transactions
     */
    #[\JMS\Serializer\Annotation\SerializedName('transactions')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $transactions = null;

    public function __construct()
    {
        $this->currency = null;
        $this->notes = null;
        $this->orderNumber = null;
        $this->orderStatus = null;
        $this->placedAt = '';
        $this->shippingCost = null;
        $this->shippingCostCurrency = null;
        $this->shippingMethod = null;
        $this->subtotalPrice = null;
        $this->totalPrice = null;
        $this->totalTax = null;
        $this->weight = null;
        $this->weightUnit = null;
        $this->fromAddress = null;
        $this->toAddress = new \Shippo\API\Models\Components\Address();
        $this->lineItems = null;
        $this->objectId = null;
        $this->objectOwner = null;
        $this->shopApp = null;
        $this->transactions = null;
    }
}