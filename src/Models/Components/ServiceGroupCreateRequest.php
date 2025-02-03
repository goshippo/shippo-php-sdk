<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class ServiceGroupCreateRequest
{
    /**
     * Description for the service group
     *
     * @var string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public string $description;

    /**
     * Name for the service group that will be shown to customers in the response
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * The type of the service group.<br> 
     *
     * `LIVE_RATE` - Shippo will make a rating request and return real-time rates for the shipping group, only falling back to the specified flat rate amount if no rates match a service level in the service group.<br> 
     * `FLAT_RATE` - Returns a shipping option with the specified flat rate amount.<br> 
     * `FREE_SHIPPING` - Returns a shipping option with a price of $0 only if the total cost of items exceeds the amount defined by `free_shipping_threshold_min`
     *
     * @var ServiceGroupTypeEnum $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\ServiceGroupTypeEnum')]
    public ServiceGroupTypeEnum $type;

    /**
     * $serviceLevels
     *
     * @var array<ServiceGroupAccountAndServiceLevel> $serviceLevels
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('service_levels')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Shippo\API\Models\Components\ServiceGroupAccountAndServiceLevel>')]
    public array $serviceLevels;

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
    #[\Speakeasy\Serializer\Annotation\SerializedName('flat_rate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $flatRate = null;

    /**
     * required unless type is `FREE_SHIPPING`. (ISO 4217 currency)
     *
     * @var ?string $flatRateCurrency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('flat_rate_currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $flatRateCurrency = null;

    /**
     * optional unless type is `FREE_SHIPPING`. (ISO 4217 currency)
     *
     * @var ?string $freeShippingThresholdCurrency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('free_shipping_threshold_currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $freeShippingThresholdCurrency = null;

    /**
     * For service groups of type `FREE_SHIPPING`, this field must be required to configure the minimum 
     *
     * cart total (total cost of items in the cart) for this service group to be returned for rates at 
     * checkout. Optional unless type is `FREE_SHIPPING`
     *
     * @var ?string $freeShippingThresholdMin
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('free_shipping_threshold_min')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $freeShippingThresholdMin = null;

    /**
     * The amount in percent (%) that the service group's returned rate should be adjusted. For example, if this field is set to 5 and the matched rate price is $5.00, the returned value of the service group will be $5.25. Negative integers are also accepted and will discount the rate price by the defined percentage amount.
     *
     * @var ?int $rateAdjustment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rate_adjustment')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $rateAdjustment = null;

    /**
     * @param  string  $description
     * @param  string  $name
     * @param  ServiceGroupTypeEnum  $type
     * @param  array<ServiceGroupAccountAndServiceLevel>  $serviceLevels
     * @param  ?string  $flatRate
     * @param  ?string  $flatRateCurrency
     * @param  ?string  $freeShippingThresholdCurrency
     * @param  ?string  $freeShippingThresholdMin
     * @param  ?int  $rateAdjustment
     */
    public function __construct(string $description, string $name, ServiceGroupTypeEnum $type, array $serviceLevels, ?string $flatRate = null, ?string $flatRateCurrency = null, ?string $freeShippingThresholdCurrency = null, ?string $freeShippingThresholdMin = null, ?int $rateAdjustment = null)
    {
        $this->description = $description;
        $this->name = $name;
        $this->type = $type;
        $this->serviceLevels = $serviceLevels;
        $this->flatRate = $flatRate;
        $this->flatRateCurrency = $flatRateCurrency;
        $this->freeShippingThresholdCurrency = $freeShippingThresholdCurrency;
        $this->freeShippingThresholdMin = $freeShippingThresholdMin;
        $this->rateAdjustment = $rateAdjustment;
    }
}