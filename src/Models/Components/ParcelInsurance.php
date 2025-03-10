<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** ParcelInsurance - To add insurace to your parcel, specify `amount`, `content` and `currency`. <br><br>If you do not want to add insurance to you parcel, do not set these parameters. */
class ParcelInsurance
{
    /**
     * Declared value of the goods you want to insure.
     *
     * @var ?string $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $amount = null;

    /**
     * Description of parcel content.
     *
     * @var ?string $content
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('content')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $content = null;

    /**
     * Currency for the amount value. Currently only USD is supported for FedEx and UPS.
     *
     * @var ?string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     * To have insurance cover provided by a carrier directly instead of Shippo's provider (XCover), set provider to `FEDEX`, `UPS`, or `ONTRAC`.
     *
     * @var ?ParcelInsuranceProvider $provider
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('provider')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\ParcelInsuranceProvider|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ParcelInsuranceProvider $provider = null;

    /**
     * @param  ?string  $amount
     * @param  ?string  $content
     * @param  ?string  $currency
     * @param  ?ParcelInsuranceProvider  $provider
     * @phpstan-pure
     */
    public function __construct(?string $amount = null, ?string $content = null, ?string $currency = null, ?ParcelInsuranceProvider $provider = null)
    {
        $this->amount = $amount;
        $this->content = $content;
        $this->currency = $currency;
        $this->provider = $provider;
    }
}