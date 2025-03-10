<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** Billing - Specify billing details (UPS, FedEx, and DHL Germany only). */
class Billing
{
    /**
     * Account number to be billed. (For DHL Germany, leave this field blank.)
     *
     * @var ?string $account
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $account = null;

    /**
     * Country iso2 code of account number to be billed (required for UPS third party billing only).
     *
     * @var ?string $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $country = null;

    /**
     * 2 digit code used to override your default participation code associated with your DHL Germany account.
     *
     * @var ?string $participationCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('participation_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $participationCode = null;

    /**
     * Party to be billed. (Leave blank for DHL Germany.)
     *
     * @var ?Type $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\Type|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Type $type = null;

    /**
     * ZIP code of account number to be billed (required for UPS if there is a zip on the billing account).
     *
     * @var ?string $zip
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('zip')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $zip = null;

    /**
     * @param  ?string  $account
     * @param  ?string  $country
     * @param  ?string  $participationCode
     * @param  ?Type  $type
     * @param  ?string  $zip
     * @phpstan-pure
     */
    public function __construct(?string $account = null, ?string $country = null, ?string $participationCode = null, ?Type $type = null, ?string $zip = null)
    {
        $this->account = $account;
        $this->country = $country;
        $this->participationCode = $participationCode;
        $this->type = $type;
        $this->zip = $zip;
    }
}