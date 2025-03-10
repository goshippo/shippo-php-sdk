<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** TrackingStatus - The latest tracking information of this shipment. */
class TrackingStatus
{
    /**
     *
     * @var \DateTime $objectCreated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_created')]
    public \DateTime $objectCreated;

    /**
     *
     * @var string $objectId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_id')]
    public string $objectId;

    /**
     *
     * @var \DateTime $objectUpdated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_updated')]
    public \DateTime $objectUpdated;

    /**
     * Indicates the high level status of the shipment.
     *
     * @var TrackingStatusEnum $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\TrackingStatusEnum')]
    public TrackingStatusEnum $status;

    /**
     * The human-readable description of the status.
     *
     * @var string $statusDetails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status_details')]
    public string $statusDetails;

    /**
     * An object containing zip, city, state and country information of the tracking event.
     *
     * @var ?TrackingStatusLocationBase $location
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\TrackingStatusLocationBase|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TrackingStatusLocationBase $location = null;

    /**
     * A finer-grained classification of the tracking event.
     *
     * @var ?TrackingStatusSubstatus $substatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('substatus')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\TrackingStatusSubstatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TrackingStatusSubstatus $substatus = null;

    /**
     * Date and time when the carrier scanned this tracking event. This is displayed in UTC.
     *
     * @var ?\DateTime $statusDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $statusDate = null;

    /**
     * @param  \DateTime  $objectCreated
     * @param  string  $objectId
     * @param  \DateTime  $objectUpdated
     * @param  TrackingStatusEnum  $status
     * @param  string  $statusDetails
     * @param  ?TrackingStatusLocationBase  $location
     * @param  ?TrackingStatusSubstatus  $substatus
     * @param  ?\DateTime  $statusDate
     * @phpstan-pure
     */
    public function __construct(\DateTime $objectCreated, string $objectId, \DateTime $objectUpdated, TrackingStatusEnum $status, string $statusDetails, ?TrackingStatusLocationBase $location = null, ?TrackingStatusSubstatus $substatus = null, ?\DateTime $statusDate = null)
    {
        $this->objectCreated = $objectCreated;
        $this->objectId = $objectId;
        $this->objectUpdated = $objectUpdated;
        $this->status = $status;
        $this->statusDetails = $statusDetails;
        $this->location = $location;
        $this->substatus = $substatus;
        $this->statusDate = $statusDate;
    }
}