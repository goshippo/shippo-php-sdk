<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class CarrierAccountPosteItalianeCreateRequest
{
    /**
     *
     * @var CarrierAccountPosteItalianeCreateRequestParameters $parameters
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parameters')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\CarrierAccountPosteItalianeCreateRequestParameters')]
    public CarrierAccountPosteItalianeCreateRequestParameters $parameters;

    /**
     *
     * @var string $carrier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('carrier')]
    public string $carrier;

    /**
     * @param  string  $carrier
     * @param  CarrierAccountPosteItalianeCreateRequestParameters  $parameters
     * @phpstan-pure
     */
    public function __construct(CarrierAccountPosteItalianeCreateRequestParameters $parameters, string $carrier = 'poste_italiane')
    {
        $this->parameters = $parameters;
        $this->carrier = $carrier;
    }
}