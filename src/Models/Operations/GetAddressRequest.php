<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class GetAddressRequest
{
    /**
     * Object ID of the address
     *
     * @var string $addressId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=AddressId')]
    public string $addressId;

    /**
     * Optional string used to pick a non-default API version to use. See our <a href="https://docs.goshippo.com/docs/api_concepts/apiversioning/">API version</a> guide.
     *
     * @var ?string $shippoApiVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=SHIPPO-API-VERSION')]
    public ?string $shippoApiVersion = null;

    /**
     * @param  string  $addressId
     * @param  ?string  $shippoApiVersion
     * @phpstan-pure
     */
    public function __construct(string $addressId, ?string $shippoApiVersion = null)
    {
        $this->addressId = $addressId;
        $this->shippoApiVersion = $shippoApiVersion;
    }
}