<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class Pickup
{
    /**
     * The object ID of your USPS or DHL Express carrier account. 
     *
     * You can retrieve this from your Rate requests or our <a href="#tag/Carrier-Accounts/">Carrier Accounts</a> endpoint.
     *
     * @var string $carrierAccount
     */
    #[\JMS\Serializer\Annotation\SerializedName('carrier_account')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $carrierAccount;

    /**
     * Location where the parcel(s) will be picked up.
     *
     * @var \Shippo\API\Models\Components\Location $location
     */
    #[\JMS\Serializer\Annotation\SerializedName('location')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\Location')]
    public Location $location;

    /**
     * A string of up to 100 characters that can be filled with any additional information you 
     *
     * want to attach to the object.
     *
     * @var ?string $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metadata = null;

    /**
     * The latest that you requested your parcels to be available for pickup. 
     *
     * Expressed in the timezone specified in the response.
     *
     * @var \DateTime $requestedEndTime
     */
    #[\JMS\Serializer\Annotation\SerializedName('requested_end_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $requestedEndTime;

    /**
     * The earliest that you requested your parcels to be ready for pickup. 
     *
     * Expressed in the timezone specified in the response.
     *
     * @var \DateTime $requestedStartTime
     */
    #[\JMS\Serializer\Annotation\SerializedName('requested_start_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $requestedStartTime;

    /**
     * The transaction(s) object ID(s) for the parcel(s) that need to be picked up.
     *
     * @var array<string> $transactions
     */
    #[\JMS\Serializer\Annotation\SerializedName('transactions')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $transactions;

    /**
     * Date and time of Pickup creation.
     *
     * @var ?\DateTime $objectCreated
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_created')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $objectCreated = null;

    /**
     * Unique identifier of the given Pickup object.
     *
     * @var ?string $objectId
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $objectId = null;

    /**
     * Date and time of last Pickup update.
     *
     * @var ?\DateTime $objectUpdated
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_updated')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $objectUpdated = null;

    /**
     * The earliest that your parcels will be ready for pickup, confirmed by the carrier. 
     *
     * Expressed in the timezone specified in the response.
     *
     * @var ?string $confirmedStartTime
     */
    #[\JMS\Serializer\Annotation\SerializedName('confirmed_start_time')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $confirmedStartTime = null;

    /**
     * The latest that your parcels will be available for pickup, confirmed by the carrier. 
     *
     * Expressed in the timezone specified in the response.
     *
     * @var ?string $confirmedEndTime
     */
    #[\JMS\Serializer\Annotation\SerializedName('confirmed_end_time')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $confirmedEndTime = null;

    /**
     * The latest time to cancel a pickup. Expressed in the timezone specified in the response. 
     *
     * To cancel a pickup, you will need to contact the carrier directly. 
     * The ability to cancel a pickup through Shippo may be released in future iterations.
     *
     * @var ?string $cancelByTime
     */
    #[\JMS\Serializer\Annotation\SerializedName('cancel_by_time')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $cancelByTime = null;

    /**
     * Indicates the status of the pickup.
     *
     * @var ?\Shippo\API\Models\Components\PickupStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\PickupStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PickupStatus $status = null;

    /**
     * Pickup's confirmation code returned by the carrier. 
     *
     * To edit or cancel a pickup, you will need to contact USPS or DHL Express directly and provide your `confirmation_code`.
     *
     * @var ?string $confirmationCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('confirmation_code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $confirmationCode = null;

    /**
     * The pickup time windows will be in the time zone specified here, not UTC.
     *
     * @var ?string $timezone
     */
    #[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $timezone = null;

    /**
     * An array containing strings of any messages generated during validation.
     *
     * @var ?array<string> $messages
     */
    #[\JMS\Serializer\Annotation\SerializedName('messages')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $messages = null;

    /**
     * Indicates whether the object has been created in test mode.
     *
     * @var ?bool $isTest
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_test')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isTest = null;

    public function __construct()
    {
        $this->carrierAccount = '';
        $this->location = new \Shippo\API\Models\Components\Location();
        $this->metadata = null;
        $this->requestedEndTime = new \DateTime();
        $this->requestedStartTime = new \DateTime();
        $this->transactions = [];
        $this->objectCreated = null;
        $this->objectId = null;
        $this->objectUpdated = null;
        $this->confirmedStartTime = null;
        $this->confirmedEndTime = null;
        $this->cancelByTime = null;
        $this->status = null;
        $this->confirmationCode = null;
        $this->timezone = null;
        $this->messages = null;
        $this->isTest = null;
    }
}