<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** TrackingStatusSubstatus - A finer-grained classification of the tracking event. */
class TrackingStatusSubstatus
{
    /**
     * A code that represents the substatus of the shipment. See the <a href="https://docs.goshippo.com/docs/tracking/tracking/#event-definitions">Event Definitions</a> for more information.
     *
     * @var string $code
     */
    #[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $code;

    /**
     * A human-readable description of the substatus. See the <a href="https://docs.goshippo.com/docs/tracking/tracking/#event-definitions">Event Definitions</a> for more information.
     *
     * @var string $text
     */
    #[\JMS\Serializer\Annotation\SerializedName('text')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $text;

    /**
     * Indicates whether the substatus requires action from the shipper or recipient to complete delivery.
     *
     * @var bool $actionRequired
     */
    #[\JMS\Serializer\Annotation\SerializedName('action_required')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $actionRequired;

    public function __construct()
    {
        $this->code = '';
        $this->text = '';
        $this->actionRequired = false;
    }
}