<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class CustomsDeclaration
{
    /**
     * Expresses that the certify_signer has provided all information of this customs declaration truthfully.
     *
     * @var bool $certify
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('certify')]
    public bool $certify;

    /**
     * Name of the person who created the customs declaration and is responsible for the validity of all 
     *
     * information provided.
     *
     * @var string $certifySigner
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('certify_signer')]
    public string $certifySigner;

    /**
     * Type of goods of the shipment.  
     *
     * Allowed values available <a href="#tag/Customs-Declaration-Contents-Type">here</a>
     *
     * @var string $contentsType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contents_type')]
    public string $contentsType;

    /**
     * Distinct Parcel content items as Customs Items object_ids.
     *
     * @var array<string> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $items;

    /**
     * Indicates how the carrier should proceed in case the shipment can't be delivered.
     *
     * Allowed values available <a href="#tag/Customs-Declaration-Non-Delivery-Option">here</a>
     *
     * @var string $nonDeliveryOption
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('non_delivery_option')]
    public string $nonDeliveryOption;

    /**
     * **required if eel_pfc is `AES_ITN`**<br>
     *
     * AES / ITN reference of the shipment.
     *
     * @var ?string $aesItn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('aes_itn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $aesItn = null;

    /**
     * B13A Option details are obtained by filing a B13A Canada Export Declaration via the Canadian Export Reporting System (CERS). 
     *
     * <a href="https://www.cbsa-asfc.gc.ca/services/export/guide-eng.html" target="_blank" rel="noopener noreferrer"> More information on reporting commercial exports from Canada. </a>
     * Allowed values available <a href="#tag/Customs-Declaration-B13A-Filing-Option">here</a>
     *
     * @var ?string $b13aFilingOption
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('b13a_filing_option')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $b13aFilingOption = null;

    /**
     * **must be provided if and only if b13a_filing_option is provided**<br>
     *
     * Represents:<br> the Proof of Report (POR) Number when b13a_filing_option is `FILED_ELECTRONICALLY`;<br> 
     * the Summary ID Number when b13a_filing_option is `SUMMARY_REPORTING`;<br> 
     * or the Exemption Number when b13a_filing_option is `NOT_REQUIRED`.
     *
     * @var ?string $b13aNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('b13a_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $b13aNumber = null;

    /**
     * Certificate reference of the shipment.
     *
     * @var ?string $certificate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('certificate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $certificate = null;

    /**
     *
     * @var ?bool $commercialInvoice
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('commercial_invoice')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $commercialInvoice = null;

    /**
     * **required if contents_type is `OTHER`**<br>
     *
     * Explanation of the type of goods of the shipment.
     *
     * @var ?string $contentsExplanation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contents_explanation')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contentsExplanation = null;

    /**
     * Disclaimer for the shipment and customs information that have been provided.
     *
     * @var ?string $disclaimer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('disclaimer')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $disclaimer = null;

    /**
     * Specifies who will pay the duties for the shipment. Only accepted for FedEx shipments.
     *
     * @var ?CustomsDeclarationDutiesPayor $dutiesPayor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duties_payor')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\CustomsDeclarationDutiesPayor|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomsDeclarationDutiesPayor $dutiesPayor = null;

    /**
     * Additional exporter identification that may be required to ship in certain countries
     *
     * @var ?CustomsExporterIdentification $exporterIdentification
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('exporter_identification')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\CustomsExporterIdentification|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomsExporterIdentification $exporterIdentification = null;

    /**
     * Exporter reference of an export shipment.
     *
     * @var ?string $exporterReference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('exporter_reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $exporterReference = null;

    /**
     * Importer reference of an import shipment.
     *
     * @var ?string $importerReference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('importer_reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $importerReference = null;

    /**
     * Indicates whether the shipment's destination VAT has been collected. May be required for some destinations.
     *
     * @var ?bool $isVatCollected
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_vat_collected')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isVatCollected = null;

    /**
     * Invoice reference of the shipment.
     *
     * @var ?string $invoice
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invoice')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $invoice = null;

    /**
     * License reference of the shipment.
     *
     * @var ?string $license
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('license')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $license = null;

    /**
     * A string of up to 100 characters that can be filled with any additional information you 
     *
     * want to attach to the object.
     *
     * @var ?string $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $metadata = null;

    /**
     * Additional notes to be included in the customs declaration.
     *
     * @var ?string $notes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('notes')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $notes = null;

    /**
     * Object ID of the Importer address.
     *
     * @var ?string $addressImporter
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address_importer')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $addressImporter = null;

    /**
     * EEL / PFC type of the shipment. For most shipments from the US to CA, `NOEEI_30_36` is applicable; for most 
     *
     * other shipments from the US, `NOEEI_30_37_a` is applicable.
     * Allowed values available <a href="#tag/Customs-Declaration-EELPFC">here</a>
     *
     * @var ?string $eelPfc
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('eel_pfc')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $eelPfc = null;

    /**
     * The incoterm reference of the shipment. FCA is available for DHL Express and FedEx only. 
     *
     * eDAP is available for DPD UK only. DAP is available for DHL Express and DPD UK.
     * If expecting DAP for other carriers, please use DDU.
     * Allowed values available <a href="#tag/Customs-Declaration-Incoterm">here</a>
     *
     * @var ?string $incoterm
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('incoterm')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $incoterm = null;

    /**
     * Additional invoiced charges to be shown on the Customs Declaration Commercial Invoice.
     *
     * @var ?CustomsInvoicedCharges $invoicedCharges
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invoiced_charges')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\CustomsInvoicedCharges|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomsInvoicedCharges $invoicedCharges = null;

    /**
     * Date and time of object creation.
     *
     * @var ?\DateTime $objectCreated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_created')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $objectCreated = null;

    /**
     * Unique identifier of the given object.
     *
     * @var ?string $objectId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $objectId = null;

    /**
     * Username of the user who created the object.
     *
     * @var ?string $objectOwner
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_owner')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $objectOwner = null;

    /**
     * Indicates the validity of the enclosing object
     *
     * @var ?ObjectStateEnum $objectState
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_state')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\ObjectStateEnum|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ObjectStateEnum $objectState = null;

    /**
     * Date and time of last object update.
     *
     * @var ?\DateTime $objectUpdated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object_updated')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $objectUpdated = null;

    /**
     * Indicates whether the object has been created in test mode.
     *
     * @var ?bool $test
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('test')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $test = null;

    /**
     * @param  bool  $certify
     * @param  string  $certifySigner
     * @param  string  $contentsType
     * @param  array<string>  $items
     * @param  string  $nonDeliveryOption
     * @param  ?string  $aesItn
     * @param  ?string  $b13aFilingOption
     * @param  ?string  $b13aNumber
     * @param  ?string  $certificate
     * @param  ?bool  $commercialInvoice
     * @param  ?string  $contentsExplanation
     * @param  ?string  $disclaimer
     * @param  ?CustomsDeclarationDutiesPayor  $dutiesPayor
     * @param  ?CustomsExporterIdentification  $exporterIdentification
     * @param  ?string  $exporterReference
     * @param  ?string  $importerReference
     * @param  ?bool  $isVatCollected
     * @param  ?string  $invoice
     * @param  ?string  $license
     * @param  ?string  $metadata
     * @param  ?string  $notes
     * @param  ?string  $addressImporter
     * @param  ?string  $eelPfc
     * @param  ?string  $incoterm
     * @param  ?CustomsInvoicedCharges  $invoicedCharges
     * @param  ?\DateTime  $objectCreated
     * @param  ?string  $objectId
     * @param  ?string  $objectOwner
     * @param  ?ObjectStateEnum  $objectState
     * @param  ?\DateTime  $objectUpdated
     * @param  ?bool  $test
     */
    public function __construct(bool $certify, string $certifySigner, string $contentsType, array $items, string $nonDeliveryOption, ?string $aesItn = null, ?string $b13aFilingOption = null, ?string $b13aNumber = null, ?string $certificate = null, ?bool $commercialInvoice = null, ?string $contentsExplanation = null, ?string $disclaimer = null, ?CustomsDeclarationDutiesPayor $dutiesPayor = null, ?CustomsExporterIdentification $exporterIdentification = null, ?string $exporterReference = null, ?string $importerReference = null, ?bool $isVatCollected = null, ?string $invoice = null, ?string $license = null, ?string $metadata = null, ?string $notes = null, ?string $addressImporter = null, ?string $eelPfc = null, ?string $incoterm = null, ?CustomsInvoicedCharges $invoicedCharges = null, ?\DateTime $objectCreated = null, ?string $objectId = null, ?string $objectOwner = null, ?ObjectStateEnum $objectState = null, ?\DateTime $objectUpdated = null, ?bool $test = null)
    {
        $this->certify = $certify;
        $this->certifySigner = $certifySigner;
        $this->contentsType = $contentsType;
        $this->items = $items;
        $this->nonDeliveryOption = $nonDeliveryOption;
        $this->aesItn = $aesItn;
        $this->b13aFilingOption = $b13aFilingOption;
        $this->b13aNumber = $b13aNumber;
        $this->certificate = $certificate;
        $this->commercialInvoice = $commercialInvoice;
        $this->contentsExplanation = $contentsExplanation;
        $this->disclaimer = $disclaimer;
        $this->dutiesPayor = $dutiesPayor;
        $this->exporterIdentification = $exporterIdentification;
        $this->exporterReference = $exporterReference;
        $this->importerReference = $importerReference;
        $this->isVatCollected = $isVatCollected;
        $this->invoice = $invoice;
        $this->license = $license;
        $this->metadata = $metadata;
        $this->notes = $notes;
        $this->addressImporter = $addressImporter;
        $this->eelPfc = $eelPfc;
        $this->incoterm = $incoterm;
        $this->invoicedCharges = $invoicedCharges;
        $this->objectCreated = $objectCreated;
        $this->objectId = $objectId;
        $this->objectOwner = $objectOwner;
        $this->objectState = $objectState;
        $this->objectUpdated = $objectUpdated;
        $this->test = $test;
    }
}