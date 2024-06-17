<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** CustomsInvoicedCharges - Additional invoiced charges to be shown on the Customs Declaration Commercial Invoice. */
class CustomsInvoicedCharges
{
    /**
     * Currency for the invoiced charges amounts incurred on the end consumer.
     *
     * @var string $currency
     */
    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $currency;

    /**
     * Total shipping paid by the buyer.
     *
     * @var ?string $totalShipping
     */
    #[\JMS\Serializer\Annotation\SerializedName('total_shipping')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $totalShipping = null;

    /**
     * Total taxes paid by the buyer.
     *
     * @var ?string $totalTaxes
     */
    #[\JMS\Serializer\Annotation\SerializedName('total_taxes')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $totalTaxes = null;

    /**
     * Total duties paid by the buyer.
     *
     * @var ?string $totalDuties
     */
    #[\JMS\Serializer\Annotation\SerializedName('total_duties')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $totalDuties = null;

    /**
     * Other fees paid by the buyer.
     *
     * @var ?string $otherFees
     */
    #[\JMS\Serializer\Annotation\SerializedName('other_fees')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $otherFees = null;

    public function __construct()
    {
        $this->currency = '';
        $this->totalShipping = null;
        $this->totalTaxes = null;
        $this->totalDuties = null;
        $this->otherFees = null;
    }
}