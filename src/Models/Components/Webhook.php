<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class Webhook
{
    /**
     * Type of event that triggers the webhook.
     *
     * @var string $event
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('event')]
    public string $event;

    /**
     * URL webhook events are sent to.
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     * Determines whether the webhook is active or not.
     *
     * @var ?bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $active = null;

    /**
     * Determines whether the webhook is a test webhook or not.
     *
     * @var ?bool $isTest
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_test')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isTest = null;

    /**
     * Timestamp of the creation of the webhook.
     *
     * @var ?\DateTime $objectCreated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_created')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $objectCreated = null;

    /**
     * Unique identifier of the webhook. This can be used to retrieve or delete the webhook.
     *
     * @var ?string $objectId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $objectId = null;

    /**
     * Timestamp of the last update of the webhook.
     *
     * @var ?\DateTime $objectUpdated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_updated')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $objectUpdated = null;

    /**
     * Username of the user who created the webhook.
     *
     * @var ?string $objectOwner
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_owner')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $objectOwner = null;

    /**
     * @param  string  $event
     * @param  string  $url
     * @param  ?bool  $active
     * @param  ?bool  $isTest
     * @param  ?\DateTime  $objectCreated
     * @param  ?string  $objectId
     * @param  ?\DateTime  $objectUpdated
     * @param  ?string  $objectOwner
     * @phpstan-pure
     */
    public function __construct(string $event, string $url, ?bool $active = null, ?bool $isTest = null, ?\DateTime $objectCreated = null, ?string $objectId = null, ?\DateTime $objectUpdated = null, ?string $objectOwner = null)
    {
        $this->event = $event;
        $this->url = $url;
        $this->active = $active;
        $this->isTest = $isTest;
        $this->objectCreated = $objectCreated;
        $this->objectId = $objectId;
        $this->objectUpdated = $objectUpdated;
        $this->objectOwner = $objectOwner;
    }
}