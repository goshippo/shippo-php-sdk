<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class ManifestCreateRequest
{
    /**
     * ID of carrier account
     *
     * @var string $carrierAccount
     */
    #[\JMS\Serializer\Annotation\SerializedName('carrier_account')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $carrierAccount;

    /**
     * All shipments to be submitted on this day will be closed out. 
     *
     * Must be in the format `2014-01-18T00:35:03.463Z` (ISO 8601 date).
     *
     * @var string $shipmentDate
     */
    #[\JMS\Serializer\Annotation\SerializedName('shipment_date')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $shipmentDate;

    /**
     * IDs transactions to use. If you set this to null or not send this parameter, 
     *
     * Shippo will automatically assign all applicable transactions.
     *
     * @var ?array<string> $transactions
     */
    #[\JMS\Serializer\Annotation\SerializedName('transactions')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $transactions = null;

    #[\JMS\Serializer\Annotation\SerializedName('address_from')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $addressFrom;

    #[\JMS\Serializer\Annotation\SerializedName('async')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $async = null;

    public function __construct()
    {
        $this->carrierAccount = '';
        $this->shipmentDate = '';
        $this->transactions = null;
        $this->addressFrom = null;
        $this->async = null;
    }
}