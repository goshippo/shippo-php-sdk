<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** Shipment - Shipment represents the parcel as retrieved from the database */
class Shipment
{
    /**
     * A string of up to 100 characters that can be filled with any additional information you want to attach to the object.
     *
     * @var string $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    public string $metadata;

    /**
     * <a href="#tag/Addresses">Address</a> object of the sender / seller. Will be returned expanded by default.
     *
     * @var Address $addressFrom
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address_from')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\Address')]
    public Address $addressFrom;

    /**
     * <a href="#tag/Addresses">Address</a> object of the recipient / buyer. Will be returned expanded by default.
     *
     * @var Address $addressTo
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address_to')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\Address')]
    public Address $addressTo;

    /**
     * An array of object_ids of the carrier account objects to be used for getting shipping rates for this shipment. 
     *
     * If no carrier account object_ids are set in this field, Shippo will attempt to generate rates using all the 
     * carrier accounts that have the `active` field set.
     *
     * @var array<string> $carrierAccounts
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('carrier_accounts')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $carrierAccounts;

    /**
     * $messages
     *
     * @var array<ResponseMessage> $messages
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('messages')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Shippo\API\Models\Components\ResponseMessage>')]
    public array $messages;

    /**
     * Date and time of Shipment creation.
     *
     * @var \DateTime $objectCreated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_created')]
    public \DateTime $objectCreated;

    /**
     * Unique identifier of the given Shipment object.
     *
     * @var string $objectId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_id')]
    public string $objectId;

    /**
     * Username of the user who created the Shipment object.
     *
     * @var string $objectOwner
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_owner')]
    public string $objectOwner;

    /**
     * Date and time of last Shipment update.
     *
     * @var \DateTime $objectUpdated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_updated')]
    public \DateTime $objectUpdated;

    /**
     * List of Parcel objects to be shipped.
     *
     * @var array<Parcel> $parcels
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parcels')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Shippo\API\Models\Components\Parcel>')]
    public array $parcels;

    /**
     * An array with all available rates. If <code>async</code> has been set to <code>false</code> in the request,
     *
     * this will be populated with all available rates in the response. Otherwise rates will be created
     * asynchronously and this array will initially be empty.
     *
     * @var array<Rate> $rates
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rates')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Shippo\API\Models\Components\Rate>')]
    public array $rates;

    /**
     * `Waiting` shipments have been successfully submitted but not yet been processed. 
     *
     * `Queued` shipments are currently being processed. 
     * `Success` shipments have been processed successfully, meaning that rate generation has concluded. 
     * `Error` does not occur currently and is reserved for future use.
     *
     * @var ShipmentStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\ShipmentStatus')]
    public ShipmentStatus $status;

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
     * ID of the Address object where the shipment will be sent back to if it is not delivered 
     *
     * (Only available for UPS, USPS, and Fedex shipments). <br/> 
     * If this field is not set, your shipments will be returned to the address_from.
     *
     * @var ?Address $addressReturn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address_return')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\Address|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Address $addressReturn = null;

    /**
     *
     * @var ?CustomsDeclaration $customsDeclaration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customs_declaration')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\CustomsDeclaration|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomsDeclaration $customsDeclaration = null;

    /**
     * Indicates whether the object has been created in test mode.
     *
     * @var ?bool $test
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('test')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $test = null;

    /**
     * @param  string  $metadata
     * @param  Address  $addressFrom
     * @param  Address  $addressTo
     * @param  array<string>  $carrierAccounts
     * @param  array<ResponseMessage>  $messages
     * @param  \DateTime  $objectCreated
     * @param  string  $objectId
     * @param  string  $objectOwner
     * @param  \DateTime  $objectUpdated
     * @param  array<Parcel>  $parcels
     * @param  array<Rate>  $rates
     * @param  ShipmentStatus  $status
     * @param  ?ShipmentExtra  $extra
     * @param  ?string  $shipmentDate
     * @param  ?Address  $addressReturn
     * @param  ?CustomsDeclaration  $customsDeclaration
     * @param  ?bool  $test
     */
    public function __construct(string $metadata, Address $addressFrom, Address $addressTo, array $carrierAccounts, array $messages, \DateTime $objectCreated, string $objectId, string $objectOwner, \DateTime $objectUpdated, array $parcels, array $rates, ShipmentStatus $status, ?ShipmentExtra $extra = null, ?string $shipmentDate = null, ?Address $addressReturn = null, ?CustomsDeclaration $customsDeclaration = null, ?bool $test = null)
    {
        $this->metadata = $metadata;
        $this->addressFrom = $addressFrom;
        $this->addressTo = $addressTo;
        $this->carrierAccounts = $carrierAccounts;
        $this->messages = $messages;
        $this->objectCreated = $objectCreated;
        $this->objectId = $objectId;
        $this->objectOwner = $objectOwner;
        $this->objectUpdated = $objectUpdated;
        $this->parcels = $parcels;
        $this->rates = $rates;
        $this->status = $status;
        $this->extra = $extra;
        $this->shipmentDate = $shipmentDate;
        $this->addressReturn = $addressReturn;
        $this->customsDeclaration = $customsDeclaration;
        $this->test = $test;
    }
}