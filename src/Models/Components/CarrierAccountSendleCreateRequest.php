<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class CarrierAccountSendleCreateRequest
{
    /**
     *
     * @var string $carrier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('carrier')]
    public string $carrier;

    /**
     *
     * @var CarrierAccountSendleCreateRequestParameters $parameters
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parameters')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\CarrierAccountSendleCreateRequestParameters')]
    public CarrierAccountSendleCreateRequestParameters $parameters;

    /**
     * @param  string  $carrier
     * @param  CarrierAccountSendleCreateRequestParameters  $parameters
     */
    public function __construct(string $carrier, CarrierAccountSendleCreateRequestParameters $parameters)
    {
        $this->carrier = $carrier;
        $this->parameters = $parameters;
    }
}