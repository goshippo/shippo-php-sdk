<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class ServiceGroupAccountAndServiceLevel
{
    /**
     * ID of a Carrier Account object
     *
     * @var ?string $accountObjectId
     */
    #[\JMS\Serializer\Annotation\SerializedName('account_object_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $accountObjectId = null;

    /**
     * Service level token, e.g. `usps_priority` or `fedex_ground`.<br>
     *
     * See <a href="#tag/Service-Levels">Service Levels</a>.
     *
     * @var ?string $serviceLevelToken
     */
    #[\JMS\Serializer\Annotation\SerializedName('service_level_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $serviceLevelToken = null;

    public function __construct()
    {
        $this->accountObjectId = null;
        $this->serviceLevelToken = null;
    }
}