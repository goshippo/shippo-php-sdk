<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class CarrierAccountDHLExpressCreateRequestParameters
{
    /**
     * Whether or not the user agrees to the DHL Express Terms and Conditions. If passed in as false, request will fail with error 400
     *
     * @var bool $userAcceptedTermsAndConditions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_accepted_terms_and_conditions')]
    public bool $userAcceptedTermsAndConditions;

    /**
     * @param  bool  $userAcceptedTermsAndConditions
     * @phpstan-pure
     */
    public function __construct(bool $userAcceptedTermsAndConditions)
    {
        $this->userAcceptedTermsAndConditions = $userAcceptedTermsAndConditions;
    }
}