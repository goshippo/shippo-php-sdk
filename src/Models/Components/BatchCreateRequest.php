<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class BatchCreateRequest
{
    /**
     * ID of the Carrier Account object to use as the default for all shipments in this Batch. 
     *
     * The carrier account can be changed on a per-shipment basis by changing the carrier_account in the 
     * corresponding BatchShipment object.
     *
     * @var string $defaultCarrierAccount
     */
    #[\JMS\Serializer\Annotation\SerializedName('default_carrier_account')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $defaultCarrierAccount;

    /**
     * Token of the service level to use as the default for all shipments in this Batch. 
     *
     * The servicelevel can be changed on a per-shipment basis by changing the servicelevel_token in the 
     * corresponding BatchShipment object. <a href="#tag/Service-Levels">Servicelevel tokens can be found here.</a>
     *
     * @var string $defaultServicelevelToken
     */
    #[\JMS\Serializer\Annotation\SerializedName('default_servicelevel_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $defaultServicelevelToken;

    /**
     * Print format of the <a href="https://docs.goshippo.com/docs/shipments/shippinglabelsizes/">label</a>. If empty, will use the default format set from 
     *
     * <a href="https://apps.goshippo.com/settings/labels">the Shippo dashboard.</a>
     *
     * @var ?\Shippo\API\Models\Components\LabelFileTypeEnum $labelFiletype
     */
    #[\JMS\Serializer\Annotation\SerializedName('label_filetype')]
    #[\JMS\Serializer\Annotation\Type('enum<Shippo\API\Models\Components\LabelFileTypeEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?LabelFileTypeEnum $labelFiletype = null;

    /**
     * A string of up to 100 characters that can be filled with any additional information you want to attach to the object.
     *
     * @var ?string $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metadata = null;

    /**
     * Array of BatchShipment objects. The response keeps the same order as in the request array.
     *
     * @var array<\Shippo\API\Models\Components\BatchShipmentCreateRequest> $batchShipments
     */
    #[\JMS\Serializer\Annotation\SerializedName('batch_shipments')]
    #[\JMS\Serializer\Annotation\Type('array<Shippo\API\Models\Components\BatchShipmentCreateRequest>')]
    public array $batchShipments;

    public function __construct()
    {
        $this->defaultCarrierAccount = '';
        $this->defaultServicelevelToken = '';
        $this->labelFiletype = null;
        $this->metadata = null;
        $this->batchShipments = [];
    }
}