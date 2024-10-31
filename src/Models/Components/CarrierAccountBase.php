<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class CarrierAccountBase
{
    /**
     * Unique identifier of the account. Please check the <a href="https://docs.goshippo.com/docs/carriers/carrieraccounts/">carrier accounts tutorial</a> 
     *
     * page for the `account_id` per carrier.<br> 
     * To protect account information, this field will be masked in any API response.
     *
     * @var string $accountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_id')]
    public string $accountId;

    /**
     * Determines whether the account is active. When creating a shipment, if no `carrier_accounts` are explicitly 
     *
     * passed Shippo will query all carrier accounts that have this field set. By default, this is set to True.
     *
     * @var ?bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $active = null;

    /**
     * Carrier token, see <a href="#tag/Carriers">Carriers</a><br>
     *
     * Please check the <a href="https://docs.goshippo.com/docs/carriers/carrieraccounts/">carrier accounts tutorial</a> page for all supported carriers.
     *
     * @var string $carrier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('carrier')]
    public string $carrier;

    /**
     *
     * @var array<string, mixed>|FedExConnectExistingOwnAccountParameters|UPSConnectExistingOwnAccountParameters|null $parameters
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parameters')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|\Shippo\API\Models\Components\FedExConnectExistingOwnAccountParameters|\Shippo\API\Models\Components\UPSConnectExistingOwnAccountParameters')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public array|FedExConnectExistingOwnAccountParameters|UPSConnectExistingOwnAccountParameters|null $parameters = null;

    /**
     * @param  string  $accountId
     * @param  string  $carrier
     * @param  ?bool  $active
     * @param  array<string, mixed>|FedExConnectExistingOwnAccountParameters|UPSConnectExistingOwnAccountParameters|null  $parameters
     */
    public function __construct(string $accountId, string $carrier, ?bool $active = null, array|FedExConnectExistingOwnAccountParameters|UPSConnectExistingOwnAccountParameters|null $parameters = null)
    {
        $this->accountId = $accountId;
        $this->carrier = $carrier;
        $this->active = $active;
        $this->parameters = $parameters;
    }
}