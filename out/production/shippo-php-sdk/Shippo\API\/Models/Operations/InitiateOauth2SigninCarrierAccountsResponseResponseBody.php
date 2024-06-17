<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;


/** InitiateOauth2SigninCarrierAccountsResponseResponseBody - Invalid carrier account provided by the user */
class InitiateOauth2SigninCarrierAccountsResponseResponseBody
{
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title = null;

    #[\JMS\Serializer\Annotation\SerializedName('detail')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $detail = null;

    public function __construct()
    {
        $this->title = null;
        $this->detail = null;
    }
}