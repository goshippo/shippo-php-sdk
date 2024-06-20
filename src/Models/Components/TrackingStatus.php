<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** TrackingStatus - The latest tracking information of this shipment. */
class TrackingStatus
{
    /**
     * An object containing zip, city, state and country information of the tracking event.
     *
     * @var ?\Shippo\API\Models\Components\TrackingStatusLocationBase $location
     */
    #[\JMS\Serializer\Annotation\SerializedName('location')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\TrackingStatusLocationBase')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TrackingStatusLocationBase $location = null;

    #[\JMS\Serializer\Annotation\SerializedName('object_created')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $objectCreated;

    #[\JMS\Serializer\Annotation\SerializedName('object_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $objectId;

    #[\JMS\Serializer\Annotation\SerializedName('object_updated')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $objectUpdated;

    /**
     * Indicates the high level status of the shipment.
     *
     * @var \Shippo\API\Models\Components\TrackingStatusEnum $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\TrackingStatusEnum>')]
    public TrackingStatusEnum $status;

    /**
     * A finer-grained classification of the tracking event.
     *
     * @var ?\Shippo\API\Models\Components\TrackingStatusSubstatus $substatus
     */
    #[\JMS\Serializer\Annotation\SerializedName('substatus')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\TrackingStatusSubstatus')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TrackingStatusSubstatus $substatus = null;

    /**
     * Date and time when the carrier scanned this tracking event. This is displayed in UTC.
     *
     * @var ?\DateTime $statusDate
     */
    #[\JMS\Serializer\Annotation\SerializedName('status_date')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $statusDate = null;

    /**
     * The human-readable description of the status.
     *
     * @var string $statusDetails
     */
    #[\JMS\Serializer\Annotation\SerializedName('status_details')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $statusDetails;

    public function __construct()
    {
        $this->location = null;
        $this->objectCreated = new \DateTime();
        $this->objectId = '';
        $this->objectUpdated = new \DateTime();
        $this->status = \Shippo\API\Models\Components\TrackingStatusEnum::Unknown;
        $this->substatus = null;
        $this->statusDate = null;
        $this->statusDetails = '';
    }
}