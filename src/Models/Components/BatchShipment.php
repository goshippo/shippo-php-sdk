<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class BatchShipment
{
    /**
     * Object ID of the carrier account to be used for this shipment (will override batch default)
     *
     * @var ?string $carrierAccount
     */
    #[\JMS\Serializer\Annotation\SerializedName('carrier_account')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $carrierAccount = null;

    /**
     * A string of up to 100 characters that can be filled with any additional information you want 
     *
     * to attach to the object.
     *
     * @var ?string $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metadata = null;

    /**
     * A token that sets the shipping method for the batch, overriding the batch default. 
     *
     * Servicelevel tokens can be found <a href="#tag/Service-Levels">in this list</a> 
     * or <a href="#operation/ListCarrierAccounts">at this endpoint</a>.
     *
     * @var ?string $servicelevelToken
     */
    #[\JMS\Serializer\Annotation\SerializedName('servicelevel_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $servicelevelToken = null;

    /**
     * List of Shipment and Transaction error messages.
     *
     * @var ?array<mixed> $messages
     */
    #[\JMS\Serializer\Annotation\SerializedName('messages')]
    #[\JMS\Serializer\Annotation\Type('array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $messages = null;

    /**
     * Object ID of this batch shipment. Can be used in the remove_shipments endpoint.
     *
     * @var string $objectId
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $objectId;

    /**
     * Object ID of the shipment object created for this batch shipment.
     *
     * @var string $shipment
     */
    #[\JMS\Serializer\Annotation\SerializedName('shipment')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $shipment;

    /**
     * `INVALID` batch shipments cannot be purchased and will have to be removed, fixed, and added to the batch again.<br>
     *
     * `VALID` batch shipments can be purchased. <br>
     * Batch shipments with the status `TRANSACTION_FAILED` were not able to be purchased and the error will be displayed on the message field<br> 
     * `INCOMPLETE` batch shipments have an issue with the Address and will need to be removed, fixed, and added to the batch again.
     *
     * @var \Shippo\API\Models\Components\Status $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\Status>')]
    public Status $status;

    /**
     * Object ID of the transaction object created for this batch shipment.
     *
     * @var ?string $transaction
     */
    #[\JMS\Serializer\Annotation\SerializedName('transaction')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $transaction = null;

    public function __construct()
    {
        $this->carrierAccount = null;
        $this->metadata = null;
        $this->servicelevelToken = null;
        $this->messages = null;
        $this->objectId = '';
        $this->shipment = '';
        $this->status = \Shippo\API\Models\Components\Status::Invalid;
        $this->transaction = null;
    }
}