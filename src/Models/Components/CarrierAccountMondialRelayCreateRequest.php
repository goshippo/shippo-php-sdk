<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class CarrierAccountMondialRelayCreateRequest
{
    /**
     *
     * @var CarrierAccountMondialRelayCreateRequestParameters $parameters
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parameters')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\CarrierAccountMondialRelayCreateRequestParameters')]
    public CarrierAccountMondialRelayCreateRequestParameters $parameters;

    /**
     *
     * @var string $carrier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('carrier')]
    public string $carrier;

    /**
     * @param  string  $carrier
     * @param  CarrierAccountMondialRelayCreateRequestParameters  $parameters
     * @phpstan-pure
     */
    public function __construct(CarrierAccountMondialRelayCreateRequestParameters $parameters, string $carrier = 'mondial_relay')
    {
        $this->parameters = $parameters;
        $this->carrier = $carrier;
    }
}