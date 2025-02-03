<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class Track
{
    /**
     * Name of the carrier of the shipment to track. See <a href="#tag/Carriers">Carriers</a>.
     *
     * @var string $carrier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('carrier')]
    public string $carrier;

    /**
     * $messages
     *
     * @var array<string> $messages
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('messages')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $messages;

    /**
     * A list of tracking events, following the same structure as <code>tracking_status</code>. 
     *
     * It contains a full history of all tracking statuses, starting with the earlier tracking event first.
     *
     * @var array<TrackingStatus> $trackingHistory
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tracking_history')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Shippo\API\Models\Components\TrackingStatus>')]
    public array $trackingHistory;

    /**
     * Tracking number to track.
     *
     * @var string $trackingNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tracking_number')]
    public string $trackingNumber;

    /**
     * The sender address with city, state, zip and country information.
     *
     * @var ?TrackingStatusLocationBase $addressFrom
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address_from')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\TrackingStatusLocationBase|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TrackingStatusLocationBase $addressFrom = null;

    /**
     * The recipient address with city, state, zip and country information.
     *
     * @var ?TrackingStatusLocationBase $addressTo
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address_to')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\TrackingStatusLocationBase|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TrackingStatusLocationBase $addressTo = null;

    /**
     * The estimated time of arrival according to the carrier, this might be updated by carriers during the life of the shipment.
     *
     * @var ?\DateTime $eta
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('eta')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $eta = null;

    /**
     * A string of up to 100 characters that can be filled with any additional information you want to attach to the object.
     *
     * @var ?string $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $metadata = null;

    /**
     * The estimated time of arrival according to the carrier at the time the shipment first entered the system.
     *
     * @var ?\DateTime $originalEta
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('original_eta')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $originalEta = null;

    /**
     *
     * @var ?ServiceLevelWithParent $servicelevel
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('servicelevel')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\ServiceLevelWithParent|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ServiceLevelWithParent $servicelevel = null;

    /**
     * The latest tracking information of this shipment.
     *
     * @var ?TrackingStatus $trackingStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tracking_status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\TrackingStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TrackingStatus $trackingStatus = null;

    /**
     * The <code>object_id</code> of the transaction associated with this tracking object. 
     *
     * This field is visible only to the object owner of the transaction.
     *
     * @var ?string $transaction
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transaction')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $transaction = null;

    /**
     * @param  string  $carrier
     * @param  array<string>  $messages
     * @param  array<TrackingStatus>  $trackingHistory
     * @param  string  $trackingNumber
     * @param  ?TrackingStatusLocationBase  $addressFrom
     * @param  ?TrackingStatusLocationBase  $addressTo
     * @param  ?\DateTime  $eta
     * @param  ?string  $metadata
     * @param  ?\DateTime  $originalEta
     * @param  ?ServiceLevelWithParent  $servicelevel
     * @param  ?TrackingStatus  $trackingStatus
     * @param  ?string  $transaction
     */
    public function __construct(string $carrier, array $messages, array $trackingHistory, string $trackingNumber, ?TrackingStatusLocationBase $addressFrom = null, ?TrackingStatusLocationBase $addressTo = null, ?\DateTime $eta = null, ?string $metadata = null, ?\DateTime $originalEta = null, ?ServiceLevelWithParent $servicelevel = null, ?TrackingStatus $trackingStatus = null, ?string $transaction = null)
    {
        $this->carrier = $carrier;
        $this->messages = $messages;
        $this->trackingHistory = $trackingHistory;
        $this->trackingNumber = $trackingNumber;
        $this->addressFrom = $addressFrom;
        $this->addressTo = $addressTo;
        $this->eta = $eta;
        $this->metadata = $metadata;
        $this->originalEta = $originalEta;
        $this->servicelevel = $servicelevel;
        $this->trackingStatus = $trackingStatus;
        $this->transaction = $transaction;
    }
}