<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** WebhookPayloadTransaction - Content of the webhook posted to the external URL */
class WebhookPayloadTransaction
{
    /**
     * Type of event that triggered the webhook.
     *
     * @var ?WebhookEventTypeEnum $event
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('event')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\WebhookEventTypeEnum|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?WebhookEventTypeEnum $event = null;

    /**
     * Determines whether the webhook is a test webhook or not.
     *
     * @var ?bool $test
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('test')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $test = null;

    /**
     *
     * @var ?Transaction $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\Transaction|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Transaction $data = null;

    /**
     * @param  ?WebhookEventTypeEnum  $event
     * @param  ?bool  $test
     * @param  ?Transaction  $data
     */
    public function __construct(?WebhookEventTypeEnum $event = null, ?bool $test = null, ?Transaction $data = null)
    {
        $this->event = $event;
        $this->test = $test;
        $this->data = $data;
    }
}