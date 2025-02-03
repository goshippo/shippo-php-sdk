<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class ShipmentCreateRequest
{
    /**
     *
     * @var AddressCreateRequest|string $addressFrom
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address_from')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\AddressCreateRequest|string')]
    public AddressCreateRequest|string $addressFrom;

    /**
     *
     * @var AddressCreateRequest|string $addressTo
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address_to')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\AddressCreateRequest|string')]
    public AddressCreateRequest|string $addressTo;

    /**
     * $parcels
     *
     * @var array<ParcelCreateRequest|ParcelCreateFromTemplateRequest|string> $parcels
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parcels')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Shippo\API\Models\Components\ParcelCreateRequest|\Shippo\API\Models\Components\ParcelCreateFromTemplateRequest|string>')]
    public array $parcels;

    /**
     * An object holding optional extra services to be requested.
     *
     * @var ?ShipmentExtra $extra
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('extra')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\ShipmentExtra|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ShipmentExtra $extra = null;

    /**
     * A string of up to 100 characters that can be filled with any additional information you want to attach to the object.
     *
     * @var ?string $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $metadata = null;

    /**
     * Date the shipment will be tendered to the carrier. Must be in the format `2014-01-18T00:35:03.463Z`. 
     *
     * Defaults to current date and time if no value is provided. Please note that some carriers require this value to
     * be in the future, on a working day, or similar.
     *
     * @var ?string $shipmentDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('shipment_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $shipmentDate = null;

    /**
     *
     * @var AddressCreateRequest|string|null $addressReturn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address_return')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\AddressCreateRequest|string|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public AddressCreateRequest|string|null $addressReturn = null;

    /**
     *
     * @var CustomsDeclarationCreateRequest|string|null $customsDeclaration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customs_declaration')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\CustomsDeclarationCreateRequest|string|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public CustomsDeclarationCreateRequest|string|null $customsDeclaration = null;

    /**
     *
     * @var ?bool $async
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('async')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $async = null;

    /**
     * List of <a href="#tag/Carrier-Accounts/">Carrier Accounts</a> `object_id`s used to filter 
     *
     * the returned rates.  If set, only rates from these carriers will be returned.
     *
     * @var ?array<string> $carrierAccounts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('carrier_accounts')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $carrierAccounts = null;

    /**
     * @param  AddressCreateRequest|string  $addressFrom
     * @param  AddressCreateRequest|string  $addressTo
     * @param  array<ParcelCreateRequest|ParcelCreateFromTemplateRequest|string>  $parcels
     * @param  ?ShipmentExtra  $extra
     * @param  ?string  $metadata
     * @param  ?string  $shipmentDate
     * @param  AddressCreateRequest|string|null  $addressReturn
     * @param  CustomsDeclarationCreateRequest|string|null  $customsDeclaration
     * @param  ?bool  $async
     * @param  ?array<string>  $carrierAccounts
     */
    public function __construct(AddressCreateRequest|string $addressFrom, AddressCreateRequest|string $addressTo, array $parcels, ?ShipmentExtra $extra = null, ?string $metadata = null, ?string $shipmentDate = null, AddressCreateRequest|string|null $addressReturn = null, CustomsDeclarationCreateRequest|string|null $customsDeclaration = null, ?bool $async = null, ?array $carrierAccounts = null)
    {
        $this->addressFrom = $addressFrom;
        $this->addressTo = $addressTo;
        $this->parcels = $parcels;
        $this->extra = $extra;
        $this->metadata = $metadata;
        $this->shipmentDate = $shipmentDate;
        $this->addressReturn = $addressReturn;
        $this->customsDeclaration = $customsDeclaration;
        $this->async = $async;
        $this->carrierAccounts = $carrierAccounts;
    }
}