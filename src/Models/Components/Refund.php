<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class Refund
{
    /**
     * Date and time of object creation.
     *
     * @var ?\DateTime $objectCreated
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_created')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $objectCreated = null;

    /**
     * Unique identifier of the given object.
     *
     * @var ?string $objectId
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $objectId = null;

    /**
     * Username of the user who created the object.
     *
     * @var ?string $objectOwner
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_owner')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $objectOwner = null;

    /**
     * Date and time of last object update.
     *
     * @var ?\DateTime $objectUpdated
     */
    #[\JMS\Serializer\Annotation\SerializedName('object_updated')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $objectUpdated = null;

    /**
     * Indicates the status of the Refund.
     *
     * @var ?\Shippo\API\Models\Components\RefundStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\RefundStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?RefundStatus $status = null;

    /**
     * Indicates whether the object has been created in test mode.
     *
     * @var ?bool $test
     */
    #[\JMS\Serializer\Annotation\SerializedName('test')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $test = null;

    /**
     * Object ID of the Transaction to be refunded.
     *
     * @var ?string $transaction
     */
    #[\JMS\Serializer\Annotation\SerializedName('transaction')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $transaction = null;

    public function __construct()
    {
        $this->objectCreated = null;
        $this->objectId = null;
        $this->objectOwner = null;
        $this->objectUpdated = null;
        $this->status = null;
        $this->test = null;
        $this->transaction = null;
    }
}