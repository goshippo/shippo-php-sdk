<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class ConnectExistingOwnAccountRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('account_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $accountId;

    #[\JMS\Serializer\Annotation\SerializedName('active')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $active = null;

    #[\JMS\Serializer\Annotation\SerializedName('carrier')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $carrier;

    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metadata = null;

    #[\JMS\Serializer\Annotation\SerializedName('parameters')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $parameters;

    #[\JMS\Serializer\Annotation\SerializedName('test')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $test = null;

    public function __construct()
    {
        $this->accountId = '';
        $this->active = null;
        $this->carrier = '';
        $this->metadata = null;
        $this->parameters = null;
        $this->test = null;
    }
}