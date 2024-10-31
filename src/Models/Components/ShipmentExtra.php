<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** ShipmentExtra - An object holding optional extra services to be requested. */
class ShipmentExtra
{
    /**
     *
     * @var ?UPSReferenceFields $accountsReceivableCustomerAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accounts_receivable_customer_account')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $accountsReceivableCustomerAccount = null;

    /**
     * Indicates that a shipment contains Alcohol (Fedex and UPS only).
     *
     * @var ?Alcohol $alcohol
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('alcohol')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\Alcohol|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Alcohol $alcohol = null;

    /**
     * Specify an ancillary service endorsement to provide the USPS with instructions on how to handle undeliverable-as-addressed pieces (DHL eCommerce only).
     *
     * @var ?AncillaryEndorsement $ancillaryEndorsement
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ancillary_endorsement')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\AncillaryEndorsement|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AncillaryEndorsement $ancillaryEndorsement = null;

    /**
     *
     * @var ?UPSReferenceFields $appropriationNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('appropriation_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $appropriationNumber = null;

    /**
     * Request `true` to give carrier permission to leave the parcel in a safe place if no one answers the 
     *
     * door (where supported). When set to `false`, if no one is available to receive the item, the parcel 
     * will not be left (*surcharges may be applicable).
     *
     * @var ?bool $authorityToLeave
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('authority_to_leave')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $authorityToLeave = null;

    /**
     *
     * @var ?UPSReferenceFields $billOfLadingNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bill_of_lading_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $billOfLadingNumber = null;

    /**
     * Specify billing details (UPS, FedEx, and DHL Germany only).
     *
     * @var ?Billing $billing
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\Billing|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Billing $billing = null;

    /**
     * Bypasses address validation (USPS, UPS, & LaserShip only).
     *
     * @var ?bool $bypassAddressValidation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bypass_address_validation')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $bypassAddressValidation = null;

    /**
     * Request carbon offsets by passing true (UPS only).
     *
     * @var ?bool $carbonNeutral
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('carbon_neutral')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $carbonNeutral = null;

    /**
     * Identifies the carrier injection site.
     *
     * @var ?string $carrierHubId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('carrier_hub_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $carrierHubId = null;

    /**
     * Travel time in hours from fulfillment center to carrier injection site.
     *
     * @var ?int $carrierHubTravelTime
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('carrier_hub_travel_time')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $carrierHubTravelTime = null;

    /**
     * Specify collection on delivery details (UPS only).
     *
     * @var ?Cod $cod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('COD')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\Cod|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Cod $cod = null;

    /**
     *
     * @var ?UPSReferenceFields $codNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cod_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $codNumber = null;

    /**
     * Specify container type.
     *
     * @var ?string $containerType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('container_type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $containerType = null;

    /**
     * Carrier arrival time to pickup packages from the fulfillment center. 
     *
     * UTC format: `%Y-%m-%dT%H:%M:%SZ`
     *
     * @var ?string $criticalPullTime
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('critical_pull_time')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $criticalPullTime = null;

    /**
     * Specify customer branch (Lasership only).
     *
     * @var ?string $customerBranch
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_branch')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $customerBranch = null;

    /**
     * Specify the reference field on the label (FedEx and UPS only).
     *
     * @var ?CustomerReference $customerReference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_reference')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\CustomerReference|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomerReference $customerReference = null;

    /**
     * Container for specifying the presence of dangerous materials. This is specific to USPS, and if any contents
     *
     * are provided, only certain USPS service levels will be eligible. For more information, see our
     * <a href="https://docs.goshippo.com/docs/shipments/hazmat/">guide on hazardous or dangerous materials shipping</a>.
     *
     * @var ?DangerousGoodsObject $dangerousGoods
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('dangerous_goods')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\DangerousGoodsObject|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?DangerousGoodsObject $dangerousGoods = null;

    /**
     * Dangerous Goods Code (DHL eCommerce only). See <a href="https://api-legacy.dhlecs.com/docs/v2/appendix.html#dangerous-goods">Category Codes</a>
     *
     * @var ?DangerousGoodsCode $dangerousGoodsCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('dangerous_goods_code')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\DangerousGoodsCode|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?DangerousGoodsCode $dangerousGoodsCode = null;

    /**
     *
     * @var ?UPSReferenceFields $dealerOrderNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('dealer_order_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $dealerOrderNumber = null;

    /**
     * Specify delivery instructions. Up to 500 characters. (FedEx and OnTrac only).
     *
     * @var ?string $deliveryInstructions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('delivery_instructions')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $deliveryInstructions = null;

    /**
     * Specify the department number field on the label (FedEx and UPS only).
     *
     * @var ?DepartmentNumber $deptNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('dept_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\DepartmentNumber|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?DepartmentNumber $deptNumber = null;

    /**
     * Specify that the package contains Dry Ice (FedEx, Veho, and UPS only).
     *
     * @var ?DryIce $dryIce
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('dry_ice')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\DryIce|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?DryIce $dryIce = null;

    /**
     *
     * @var ?UPSReferenceFields $fdaProductCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('fda_product_code')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $fdaProductCode = null;

    /**
     * The fulfilment center where the package originates from.
     *
     * @var ?string $fulfillmentCenter
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('fulfillment_center')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $fulfillmentCenter = null;

    /**
     * To add 3rd party insurance powered by <a href="https://docs.goshippo.com/docs/shipments/shippinginsurance/">XCover</a>, 
     *
     * specify <br> `amount`, `content`, and `currency`. <br> Alternatively, you can choose carrier provided insurance 
     * by additionally specifying `provider` (UPS, FedEx and OnTrac only). <br><br> If you do not want to add insurance 
     * to your shipment, do not set these parameters.
     *
     * @var ?Insurance $insurance
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('insurance')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\Insurance|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Insurance $insurance = null;

    /**
     * Specify the invoice number field on the label (FedEx and UPS only).
     *
     * @var ?InvoiceNumber $invoiceNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invoice_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\InvoiceNumber|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?InvoiceNumber $invoiceNumber = null;

    /**
     * This field specifies if it is a scan-based return shipment. See the <a href="https://docs.goshippo.com/docs/shipments/returns/">Create a return shipment</a> section for more details.
     *
     * @var ?bool $isReturn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_return')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isReturn = null;

    /**
     * Specify Lasership Attributes (Lasership only). Multiple options accepted.
     *
     * @var ?array<ShipmentExtraLasershipAttributesEnum> $lasershipAttrs
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lasership_attrs')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Shippo\API\Models\Components\ShipmentExtraLasershipAttributesEnum>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $lasershipAttrs = null;

    /**
     * Declared value (Lasership only). Defaults to `50.00`.
     *
     * @var ?string $lasershipDeclaredValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lasership_declared_value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lasershipDeclaredValue = null;

    /**
     *
     * @var ?UPSReferenceFields $manifestNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('manifest_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $manifestNumber = null;

    /**
     *
     * @var ?UPSReferenceFields $modelNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('model_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $modelNumber = null;

    /**
     *
     * @var ?UPSReferenceFields $partNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('part_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $partNumber = null;

    /**
     * Specify the PO number field on the label (FedEx and UPS only).
     *
     * @var ?PoNumber $poNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('po_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\PoNumber|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PoNumber $poNumber = null;

    /**
     * Required for DHL Germany Paket Sameday. Designates a desired timeframe for delivery. Format is `HHMMHHMM`
     *
     * @var ?PreferredDeliveryTimeframe $preferredDeliveryTimeframe
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('preferred_delivery_timeframe')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\PreferredDeliveryTimeframe|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PreferredDeliveryTimeframe $preferredDeliveryTimeframe = null;

    /**
     * Add premium service to a shipment (DHL Germany international shipments only).
     *
     * @var ?bool $premium
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('premium')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $premium = null;

    /**
     *
     * @var ?UPSReferenceFields $productionCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('production_code')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $productionCode = null;

    /**
     *
     * @var ?UPSReferenceFields $purchaseRequestNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('purchase_request_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $purchaseRequestNumber = null;

    /**
     * Request a QR code for a given transaction when creating a shipping label (USPS domestic and Evri UK only).
     *
     * @var ?bool $qrCodeRequested
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('qr_code_requested')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $qrCodeRequested = null;

    /**
     * Optional text to be printed on the shipping label if supported by carrier. Up to 50 characters.
     *
     * @var ?string $reference1
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference_1')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reference1 = null;

    /**
     * Optional text to be printed on the shipping label if supported by carrier. Up to 50 characters. For DHL eCommerce, this field can be used for billing reference.
     *
     * @var ?string $reference2
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reference_2')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reference2 = null;

    /**
     * Returns retail rates instead of account-based rates (UPS and FedEx only).
     *
     * @var ?bool $requestRetailRates
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('request_retail_rates')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $requestRetailRates = null;

    /**
     * Request additional return option for return shipments (UPS and Lasership only).
     *
     * @var ShipmentExtraReturnServiceTypeUPSEnum|ShipmentExtraReturnServiceTypeLasershipEnum|null $returnServiceType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('return_service_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\ShipmentExtraReturnServiceTypeUPSEnum|\Shippo\API\Models\Components\ShipmentExtraReturnServiceTypeLasershipEnum')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ShipmentExtraReturnServiceTypeUPSEnum|ShipmentExtraReturnServiceTypeLasershipEnum|null $returnServiceType = null;

    /**
     * Specify the RMA number field on the label (FedEx and UPS only).
     *
     * @var ?RmaNumber $rmaNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rma_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\RmaNumber|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?RmaNumber $rmaNumber = null;

    /**
     * Marks shipment as to be delivered on a Saturday.
     *
     * @var ?bool $saturdayDelivery
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('saturday_delivery')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $saturdayDelivery = null;

    /**
     *
     * @var ?UPSReferenceFields $salespersonNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('salesperson_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $salespersonNumber = null;

    /**
     *
     * @var ?UPSReferenceFields $serialNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('serial_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $serialNumber = null;

    /**
     * Request standard or adult signature confirmation. You can alternatively request Certified Mail (USPS only) 
     *
     * or Indirect signature (FedEx only) or Carrier Confirmation (Deutsche Post only).
     *
     * @var ?SignatureConfirmation $signatureConfirmation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('signature_confirmation')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\SignatureConfirmation|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SignatureConfirmation $signatureConfirmation = null;

    /**
     *
     * @var ?UPSReferenceFields $storeNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('store_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $storeNumber = null;

    /**
     *
     * @var ?UPSReferenceFields $transactionReferenceNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transaction_reference_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\UPSReferenceFields|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UPSReferenceFields $transactionReferenceNumber = null;

    /**
     * @param  ?UPSReferenceFields  $accountsReceivableCustomerAccount
     * @param  ?Alcohol  $alcohol
     * @param  ?AncillaryEndorsement  $ancillaryEndorsement
     * @param  ?UPSReferenceFields  $appropriationNumber
     * @param  ?bool  $authorityToLeave
     * @param  ?UPSReferenceFields  $billOfLadingNumber
     * @param  ?Billing  $billing
     * @param  ?bool  $bypassAddressValidation
     * @param  ?bool  $carbonNeutral
     * @param  ?string  $carrierHubId
     * @param  ?int  $carrierHubTravelTime
     * @param  ?Cod  $cod
     * @param  ?UPSReferenceFields  $codNumber
     * @param  ?string  $containerType
     * @param  ?string  $criticalPullTime
     * @param  ?string  $customerBranch
     * @param  ?CustomerReference  $customerReference
     * @param  ?DangerousGoodsObject  $dangerousGoods
     * @param  ?DangerousGoodsCode  $dangerousGoodsCode
     * @param  ?UPSReferenceFields  $dealerOrderNumber
     * @param  ?string  $deliveryInstructions
     * @param  ?DepartmentNumber  $deptNumber
     * @param  ?DryIce  $dryIce
     * @param  ?UPSReferenceFields  $fdaProductCode
     * @param  ?string  $fulfillmentCenter
     * @param  ?Insurance  $insurance
     * @param  ?InvoiceNumber  $invoiceNumber
     * @param  ?bool  $isReturn
     * @param  ?array<ShipmentExtraLasershipAttributesEnum>  $lasershipAttrs
     * @param  ?string  $lasershipDeclaredValue
     * @param  ?UPSReferenceFields  $manifestNumber
     * @param  ?UPSReferenceFields  $modelNumber
     * @param  ?UPSReferenceFields  $partNumber
     * @param  ?PoNumber  $poNumber
     * @param  ?PreferredDeliveryTimeframe  $preferredDeliveryTimeframe
     * @param  ?bool  $premium
     * @param  ?UPSReferenceFields  $productionCode
     * @param  ?UPSReferenceFields  $purchaseRequestNumber
     * @param  ?bool  $qrCodeRequested
     * @param  ?string  $reference1
     * @param  ?string  $reference2
     * @param  ?bool  $requestRetailRates
     * @param  ShipmentExtraReturnServiceTypeUPSEnum|ShipmentExtraReturnServiceTypeLasershipEnum|null  $returnServiceType
     * @param  ?RmaNumber  $rmaNumber
     * @param  ?bool  $saturdayDelivery
     * @param  ?UPSReferenceFields  $salespersonNumber
     * @param  ?UPSReferenceFields  $serialNumber
     * @param  ?SignatureConfirmation  $signatureConfirmation
     * @param  ?UPSReferenceFields  $storeNumber
     * @param  ?UPSReferenceFields  $transactionReferenceNumber
     */
    public function __construct(?UPSReferenceFields $accountsReceivableCustomerAccount = null, ?Alcohol $alcohol = null, ?AncillaryEndorsement $ancillaryEndorsement = null, ?UPSReferenceFields $appropriationNumber = null, ?bool $authorityToLeave = null, ?UPSReferenceFields $billOfLadingNumber = null, ?Billing $billing = null, ?bool $bypassAddressValidation = null, ?bool $carbonNeutral = null, ?string $carrierHubId = null, ?int $carrierHubTravelTime = null, ?Cod $cod = null, ?UPSReferenceFields $codNumber = null, ?string $containerType = null, ?string $criticalPullTime = null, ?string $customerBranch = null, ?CustomerReference $customerReference = null, ?DangerousGoodsObject $dangerousGoods = null, ?DangerousGoodsCode $dangerousGoodsCode = null, ?UPSReferenceFields $dealerOrderNumber = null, ?string $deliveryInstructions = null, ?DepartmentNumber $deptNumber = null, ?DryIce $dryIce = null, ?UPSReferenceFields $fdaProductCode = null, ?string $fulfillmentCenter = null, ?Insurance $insurance = null, ?InvoiceNumber $invoiceNumber = null, ?bool $isReturn = null, ?array $lasershipAttrs = null, ?string $lasershipDeclaredValue = null, ?UPSReferenceFields $manifestNumber = null, ?UPSReferenceFields $modelNumber = null, ?UPSReferenceFields $partNumber = null, ?PoNumber $poNumber = null, ?PreferredDeliveryTimeframe $preferredDeliveryTimeframe = null, ?bool $premium = null, ?UPSReferenceFields $productionCode = null, ?UPSReferenceFields $purchaseRequestNumber = null, ?bool $qrCodeRequested = null, ?string $reference1 = null, ?string $reference2 = null, ?bool $requestRetailRates = null, ShipmentExtraReturnServiceTypeUPSEnum|ShipmentExtraReturnServiceTypeLasershipEnum|null $returnServiceType = null, ?RmaNumber $rmaNumber = null, ?bool $saturdayDelivery = null, ?UPSReferenceFields $salespersonNumber = null, ?UPSReferenceFields $serialNumber = null, ?SignatureConfirmation $signatureConfirmation = null, ?UPSReferenceFields $storeNumber = null, ?UPSReferenceFields $transactionReferenceNumber = null)
    {
        $this->accountsReceivableCustomerAccount = $accountsReceivableCustomerAccount;
        $this->alcohol = $alcohol;
        $this->ancillaryEndorsement = $ancillaryEndorsement;
        $this->appropriationNumber = $appropriationNumber;
        $this->authorityToLeave = $authorityToLeave;
        $this->billOfLadingNumber = $billOfLadingNumber;
        $this->billing = $billing;
        $this->bypassAddressValidation = $bypassAddressValidation;
        $this->carbonNeutral = $carbonNeutral;
        $this->carrierHubId = $carrierHubId;
        $this->carrierHubTravelTime = $carrierHubTravelTime;
        $this->cod = $cod;
        $this->codNumber = $codNumber;
        $this->containerType = $containerType;
        $this->criticalPullTime = $criticalPullTime;
        $this->customerBranch = $customerBranch;
        $this->customerReference = $customerReference;
        $this->dangerousGoods = $dangerousGoods;
        $this->dangerousGoodsCode = $dangerousGoodsCode;
        $this->dealerOrderNumber = $dealerOrderNumber;
        $this->deliveryInstructions = $deliveryInstructions;
        $this->deptNumber = $deptNumber;
        $this->dryIce = $dryIce;
        $this->fdaProductCode = $fdaProductCode;
        $this->fulfillmentCenter = $fulfillmentCenter;
        $this->insurance = $insurance;
        $this->invoiceNumber = $invoiceNumber;
        $this->isReturn = $isReturn;
        $this->lasershipAttrs = $lasershipAttrs;
        $this->lasershipDeclaredValue = $lasershipDeclaredValue;
        $this->manifestNumber = $manifestNumber;
        $this->modelNumber = $modelNumber;
        $this->partNumber = $partNumber;
        $this->poNumber = $poNumber;
        $this->preferredDeliveryTimeframe = $preferredDeliveryTimeframe;
        $this->premium = $premium;
        $this->productionCode = $productionCode;
        $this->purchaseRequestNumber = $purchaseRequestNumber;
        $this->qrCodeRequested = $qrCodeRequested;
        $this->reference1 = $reference1;
        $this->reference2 = $reference2;
        $this->requestRetailRates = $requestRetailRates;
        $this->returnServiceType = $returnServiceType;
        $this->rmaNumber = $rmaNumber;
        $this->saturdayDelivery = $saturdayDelivery;
        $this->salespersonNumber = $salespersonNumber;
        $this->serialNumber = $serialNumber;
        $this->signatureConfirmation = $signatureConfirmation;
        $this->storeNumber = $storeNumber;
        $this->transactionReferenceNumber = $transactionReferenceNumber;
    }
}