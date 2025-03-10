<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class Authentication
{
    /**
     * Authentication method used by this account.
     *
     * @var ?\Shippo\API\Models\Components\CarrierAccountWithExtraInfoType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\CarrierAccountWithExtraInfoType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CarrierAccountWithExtraInfoType $type = null;

    /**
     * Current authentication status. Possible values: 'disconnected' (authorization lost, reconnect needed), 'connected' (authorized and active), 'authorization_pending' (awaiting initial authorization flow).
     *
     * @var ?\Shippo\API\Models\Components\CarrierAccountWithExtraInfoStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\CarrierAccountWithExtraInfoStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CarrierAccountWithExtraInfoStatus $status = null;

    public function __construct()
    {
        $this->type = null;
        $this->status = null;
    }
}