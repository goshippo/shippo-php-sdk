<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class CarrierAccountWithExtraInfo
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
     * Carrier token, see <a href="#tag/Carriers">Carriers</a><br>
     *
     * Please check the <a href="https://docs.goshippo.com/docs/carriers/carrieraccounts/">carrier accounts tutorial</a> page for all supported carriers.
     *
     * @var string $carrier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('carrier')]
    public string $carrier;

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
     *
     * @var array<string, mixed>|FedExConnectExistingOwnAccountParameters|UPSConnectExistingOwnAccountParameters|null $parameters
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parameters')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|\Shippo\API\Models\Components\FedExConnectExistingOwnAccountParameters|\Shippo\API\Models\Components\UPSConnectExistingOwnAccountParameters|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public array|FedExConnectExistingOwnAccountParameters|UPSConnectExistingOwnAccountParameters|null $parameters = null;

    /**
     * Carrier name, see <a href="#tag/Carriers">Carriers</a><br>
     *
     * @var mixed $carrierName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('carrier_name')]
    #[\Speakeasy\Serializer\Annotation\Type('mixed')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public mixed $carrierName = null;

    /**
     *
     * @var ?bool $isShippoAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_shippo_account')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isShippoAccount = null;

    /**
     *
     * @var ?string $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $metadata = null;

    /**
     * Unique identifier of the carrier account object.
     *
     * @var ?string $objectId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $objectId = null;

    /**
     * Username of the user who created the carrier account object.
     *
     * @var ?string $objectOwner
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_owner')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $objectOwner = null;

    /**
     * $serviceLevels
     *
     * @var ?array<CarrierAccountServiceLevel> $serviceLevels
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('service_levels')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Shippo\API\Models\Components\CarrierAccountServiceLevel>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $serviceLevels = null;

    /**
     * Indicates whether the object has been created in test mode.
     *
     * @var ?bool $test
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('test')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $test = null;

    /**
     * Holds internal state relevant to users.
     *
     * @var ?ObjectInfo $objectInfo
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_info')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\ObjectInfo|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ObjectInfo $objectInfo = null;

    /**
     * @param  string  $accountId
     * @param  string  $carrier
     * @param  ?bool  $active
     * @param  array<string, mixed>|FedExConnectExistingOwnAccountParameters|UPSConnectExistingOwnAccountParameters|null  $parameters
     * @param  mixed  $carrierName
     * @param  ?bool  $isShippoAccount
     * @param  ?string  $metadata
     * @param  ?string  $objectId
     * @param  ?string  $objectOwner
     * @param  ?array<CarrierAccountServiceLevel>  $serviceLevels
     * @param  ?bool  $test
     * @param  ?ObjectInfo  $objectInfo
     */
    public function __construct(string $accountId, string $carrier, ?bool $active = null, array|FedExConnectExistingOwnAccountParameters|UPSConnectExistingOwnAccountParameters|null $parameters = null, mixed $carrierName = null, ?bool $isShippoAccount = null, ?string $metadata = null, ?string $objectId = null, ?string $objectOwner = null, ?array $serviceLevels = null, ?bool $test = null, ?ObjectInfo $objectInfo = null)
    {
        $this->accountId = $accountId;
        $this->carrier = $carrier;
        $this->active = $active;
        $this->parameters = $parameters;
        $this->carrierName = $carrierName;
        $this->isShippoAccount = $isShippoAccount;
        $this->metadata = $metadata;
        $this->objectId = $objectId;
        $this->objectOwner = $objectOwner;
        $this->serviceLevels = $serviceLevels;
        $this->test = $test;
        $this->objectInfo = $objectInfo;
    }
}