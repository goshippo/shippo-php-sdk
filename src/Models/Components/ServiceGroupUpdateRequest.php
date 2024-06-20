<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class ServiceGroupUpdateRequest
{
    /**
     * Description for the service group
     *
     * @var string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;

    /**
     * String representation of an amount to be returned as the flat rate
     *
     * if 1. The service group is of type `LIVE_RATE` and no matching rates
     * were found; or 2. The service group is of type `FLAT_RATE`. Either
     * integers or decimals are accepted. Required unless type is
     * `FREE_SHIPPING`
     *
     * @var ?string $flatRate
     */
    #[\JMS\Serializer\Annotation\SerializedName('flat_rate')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $flatRate = null;

    /**
     * required unless type is `FREE_SHIPPING`. (ISO 4217 currency)
     *
     * @var ?string $flatRateCurrency
     */
    #[\JMS\Serializer\Annotation\SerializedName('flat_rate_currency')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $flatRateCurrency = null;

    /**
     * optional unless type is `FREE_SHIPPING`. (ISO 4217 currency)
     *
     * @var ?string $freeShippingThresholdCurrency
     */
    #[\JMS\Serializer\Annotation\SerializedName('free_shipping_threshold_currency')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $freeShippingThresholdCurrency = null;

    /**
     * For service groups of type `FREE_SHIPPING`, this field must be required to configure the minimum cart total (total cost of items in the cart) for this service group to be returned for rates at checkout. Optional unless type is `FREE_SHIPPING`
     *
     * @var ?string $freeShippingThresholdMin
     */
    #[\JMS\Serializer\Annotation\SerializedName('free_shipping_threshold_min')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $freeShippingThresholdMin = null;

    /**
     * Name for the service group that will be shown to customers in the response
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;

    /**
     * The amount in percent (%) that the service group's returned rate should be adjusted. For example, if this field is set to 5 and the matched rate price is $5.00, the returned value of the service group will be $5.25. Negative integers are also accepted and will discount the rate price by the defined percentage amount.
     *
     * @var ?int $rateAdjustment
     */
    #[\JMS\Serializer\Annotation\SerializedName('rate_adjustment')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $rateAdjustment = null;

    /**
     * The type of the service group.<br> `LIVE_RATE` - Shippo will make a rating request and return real-time rates for the shipping group, only falling back to the specified flat rate amount if no rates match a service level in the service group.<br> `FLAT_RATE` - Returns a shipping option with the specified flat rate amount.<br> `FREE_SHIPPING` - Returns a shipping option with a price of $0 only if the total cost of items exceeds the amount defined by `free_shipping_threshold_min`
     *
     * @var \Shippo\API\Models\Components\ServiceGroupTypeEnum $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\ServiceGroupTypeEnum>')]
    public ServiceGroupTypeEnum $type;

    /**
     * The unique identifier of the given Service Group object.
     *
     * @var string $objectId
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $objectId;

    /**
     * True if the service group is enabled, false otherwise.
     *
     * @var bool $isActive
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_active')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $isActive;

    /**
     * $serviceLevels
     *
     * @var array<\Shippo\API\Models\Components\ServiceGroupAccountAndServiceLevel> $serviceLevels
     */
    #[\JMS\Serializer\Annotation\SerializedName('service_levels')]
    #[\JMS\Serializer\Annotation\Type('array<Shippo\API\Models\Components\ServiceGroupAccountAndServiceLevel>')]
    public array $serviceLevels;

    public function __construct()
    {
        $this->description = '';
        $this->flatRate = null;
        $this->flatRateCurrency = null;
        $this->freeShippingThresholdCurrency = null;
        $this->freeShippingThresholdMin = null;
        $this->name = '';
        $this->rateAdjustment = null;
        $this->type = \Shippo\API\Models\Components\ServiceGroupTypeEnum::LiveRate;
        $this->objectId = '';
        $this->isActive = false;
        $this->serviceLevels = [];
    }
}