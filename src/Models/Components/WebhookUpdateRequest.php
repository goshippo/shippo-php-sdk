<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class WebhookUpdateRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('event')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\WebhookEventTypeEnum>')]
    public WebhookEventTypeEnum $event;

    /**
     * URL webhook events are sent to.
     *
     * @var string $url
     */
    #[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $url;

    /**
     * Determines whether the webhook is active or not.
     *
     * @var ?bool $active
     */
    #[\JMS\Serializer\Annotation\SerializedName('active')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $active = null;

    /**
     * Determines whether the webhook is a test webhook or not.
     *
     * @var ?bool $isTest
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_test')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isTest = null;

    public function __construct()
    {
        $this->event = \Shippo\API\Models\Components\WebhookEventTypeEnum::TransactionCreated;
        $this->url = '';
        $this->active = null;
        $this->isTest = null;
    }
}