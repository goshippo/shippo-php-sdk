<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class WebhookUpdateRequest
{
    /**
     * Type of event that triggered the webhook.
     *
     * @var WebhookEventTypeEnum $event
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('event')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\WebhookEventTypeEnum')]
    public WebhookEventTypeEnum $event;

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
     * @param  WebhookEventTypeEnum  $event
     * @param  string  $url
     * @param  ?bool  $active
     * @param  ?bool  $isTest
     * @phpstan-pure
     */
    public function __construct(WebhookEventTypeEnum $event, string $url, ?bool $active = null, ?bool $isTest = null)
    {
        $this->event = $event;
        $this->url = $url;
        $this->active = $active;
        $this->isTest = $isTest;
    }
}