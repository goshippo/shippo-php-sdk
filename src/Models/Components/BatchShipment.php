<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class BatchShipment
{
    /**
     * Object ID of this batch shipment. Can be used in the remove_shipments endpoint.
     *
     * @var string $objectId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_id')]
    public string $objectId;

    /**
     * Object ID of the shipment object created for this batch shipment.
     *
     * @var string $shipment
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('shipment')]
    public string $shipment;

    /**
     * `INVALID` batch shipments cannot be purchased and will have to be removed, fixed, and added to the batch again.<br>
     *
     * `VALID` batch shipments can be purchased. <br>
     * Batch shipments with the status `TRANSACTION_FAILED` were not able to be purchased and the error will be displayed on the message field<br> 
     * `INCOMPLETE` batch shipments have an issue with the Address and will need to be removed, fixed, and added to the batch again.
     *
     * @var Status $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\Status')]
    public Status $status;

    /**
     * Object ID of the carrier account to be used for this shipment (will override batch default)
     *
     * @var ?string $carrierAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('carrier_account')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $carrierAccount = null;

    /**
     * A string of up to 100 characters that can be filled with any additional information you want 
     *
     * to attach to the object.
     *
     * @var ?string $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $metadata = null;

    /**
     * A token that sets the shipping method for the batch, overriding the batch default. 
     *
     * Servicelevel tokens can be found <a href="#tag/Service-Levels">in this list</a> 
     * or <a href="#operation/ListCarrierAccounts">at this endpoint</a>.
     *
     * @var ?string $servicelevelToken
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('servicelevel_token')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $servicelevelToken = null;

    /**
     * List of Shipment and Transaction error messages.
     *
     * @var ?array<mixed> $messages
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('messages')]
    #[\Speakeasy\Serializer\Annotation\Type('array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $messages = null;

    /**
     * Object ID of the transaction object created for this batch shipment.
     *
     * @var ?string $transaction
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transaction')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $transaction = null;

    /**
     * @param  string  $objectId
     * @param  string  $shipment
     * @param  Status  $status
     * @param  ?string  $carrierAccount
     * @param  ?string  $metadata
     * @param  ?string  $servicelevelToken
     * @param  ?array<mixed>  $messages
     * @param  ?string  $transaction
     */
    public function __construct(string $objectId, string $shipment, Status $status, ?string $carrierAccount = null, ?string $metadata = null, ?string $servicelevelToken = null, ?array $messages = null, ?string $transaction = null)
    {
        $this->objectId = $objectId;
        $this->shipment = $shipment;
        $this->status = $status;
        $this->carrierAccount = $carrierAccount;
        $this->metadata = $metadata;
        $this->servicelevelToken = $servicelevelToken;
        $this->messages = $messages;
        $this->transaction = $transaction;
    }
}