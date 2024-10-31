<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** ServiceLevelWithParent - Contains details regarding the service level for the given rate. */
class ServiceLevelWithParent
{
    /**
     * Name of the Rate's servicelevel, e.g. `International Priority` or `Standard Post`. 
     *
     * A servicelevel commonly defines the transit time of a Shipment (e.g., Express vs. Standard), along with other properties. 
     * These names vary depending on the provider.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * Further clarification of the service.
     *
     * @var ?string $terms
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('terms')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $terms = null;

    /**
     * Token of the Rate's servicelevel, e.g. `usps_priority` or `fedex_ground`. 
     *
     * See <a href="#tag/Service-Levels">servicelevels</a>.
     *
     * @var ?string $token
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $token = null;

    /**
     * Unique, extended version of the Service Level "token". 
     *
     * Guaranteed to be unique across all Service Levels, and may help offer insight into the specific Service Level it describes.
     *
     * @var ?string $extendedToken
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('extended_token')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $extendedToken = null;

    /**
     *
     * @var ?ServiceLevel $parentServicelevel
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_servicelevel')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\ServiceLevel|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ServiceLevel $parentServicelevel = null;

    /**
     * @param  ?string  $name
     * @param  ?string  $terms
     * @param  ?string  $token
     * @param  ?string  $extendedToken
     * @param  ?ServiceLevel  $parentServicelevel
     */
    public function __construct(?string $name = null, ?string $terms = null, ?string $token = null, ?string $extendedToken = null, ?ServiceLevel $parentServicelevel = null)
    {
        $this->name = $name;
        $this->terms = $terms;
        $this->token = $token;
        $this->extendedToken = $extendedToken;
        $this->parentServicelevel = $parentServicelevel;
    }
}