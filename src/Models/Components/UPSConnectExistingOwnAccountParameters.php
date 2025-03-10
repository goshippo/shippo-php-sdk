<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/**
 * UPSConnectExistingOwnAccountParameters - An array of additional parameters for the account, such as e.g. password or token.
 *
 * Please check the <a href="https://docs.goshippo.com/docs/carriers/carrieraccounts/">carrier accounts tutorial</a> page for the parameters per carrier.<br> 
 * To protect account information, this field will be masked in any API response.
 */
class UPSConnectExistingOwnAccountParameters
{
    /**
     * The UPS account number
     *
     * @var string $accountNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_number')]
    public string $accountNumber;

    /**
     *
     * @var string $billingAddressCity
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address_city')]
    public string $billingAddressCity;

    /**
     *
     * @var string $billingAddressCountryIso2
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address_country_iso2')]
    public string $billingAddressCountryIso2;

    /**
     *
     * @var string $billingAddressState
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address_state')]
    public string $billingAddressState;

    /**
     *
     * @var string $billingAddressStreet1
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address_street1')]
    public string $billingAddressStreet1;

    /**
     *
     * @var string $billingAddressZip
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address_zip')]
    public string $billingAddressZip;

    /**
     *
     * @var string $collecCountryIso2
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('collec_country_iso2')]
    public string $collecCountryIso2;

    /**
     * Zip code of the collection/pickup address
     *
     * @var string $collecZip
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('collec_zip')]
    public string $collecZip;

    /**
     * Company name. Full name is acceptable in this field if the user has no company name
     *
     * @var string $company
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company')]
    public string $company;

    /**
     *
     * @var string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     *
     * @var string $fullName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('full_name')]
    public string $fullName;

    /**
     * true if user has been issued a UPS invoice within the past 90 days for the US or Canada; and 45 days for any other countries. User can use data from any of the last 3 invoices
     *
     * @var bool $hasInvoice
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('has_invoice')]
    public bool $hasInvoice;

    /**
     *
     * @var string $phone
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone')]
    public string $phone;

    /**
     * User's title, e.g. including but not limited to Manager, Doctor, Artist, Engineer, Mr, Ms, Mrs, Mx
     *
     * @var string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    public string $title;

    /**
     * Whether the user agrees to the UPS terms and conditions or not. Error 400 will be returned if passed in as false
     *
     * @var bool $upsAgreements
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ups_agreements')]
    public bool $upsAgreements;

    /**
     * Only required if has_invoice is true. Country associated with the account that issued the invoice
     *
     * @var ?string $aiaCountryIso2
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('aia_country_iso2')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $aiaCountryIso2 = null;

    /**
     * Empty string acceptable for billing_address_street2
     *
     * @var ?string $billingAddressStreet2
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address_street2')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $billingAddressStreet2 = null;

    /**
     * Only required if has_invoice is true. 3-letter currency code associated with invoice_value
     *
     * @var ?string $currencyCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $currencyCode = null;

    /**
     * Only required if aia_country_iso2 is US and has_invoice is true.
     *
     * @var ?string $invoiceControlid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invoice_controlid')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $invoiceControlid = null;

    /**
     * Only required if has_invoice is true. Date the invoice was issued. yyyymmdd format
     *
     * @var ?string $invoiceDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invoice_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $invoiceDate = null;

    /**
     *
     * @var ?string $invoiceNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invoice_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $invoiceNumber = null;

    /**
     * Only required if has_invoice is true. Max 16 digits before decimal and 2 digits after decimal
     *
     * @var ?string $invoiceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('invoice_value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $invoiceValue = null;

    /**
     * @param  string  $accountNumber
     * @param  string  $billingAddressCity
     * @param  string  $billingAddressCountryIso2
     * @param  string  $billingAddressState
     * @param  string  $billingAddressStreet1
     * @param  string  $billingAddressZip
     * @param  string  $collecCountryIso2
     * @param  string  $collecZip
     * @param  string  $company
     * @param  string  $email
     * @param  string  $fullName
     * @param  bool  $hasInvoice
     * @param  string  $phone
     * @param  string  $title
     * @param  bool  $upsAgreements
     * @param  ?string  $aiaCountryIso2
     * @param  ?string  $billingAddressStreet2
     * @param  ?string  $currencyCode
     * @param  ?string  $invoiceControlid
     * @param  ?string  $invoiceDate
     * @param  ?string  $invoiceNumber
     * @param  ?string  $invoiceValue
     * @phpstan-pure
     */
    public function __construct(string $accountNumber, string $billingAddressCity, string $billingAddressCountryIso2, string $billingAddressState, string $billingAddressStreet1, string $billingAddressZip, string $collecCountryIso2, string $collecZip, string $company, string $email, string $fullName, bool $hasInvoice, string $phone, string $title, bool $upsAgreements, ?string $aiaCountryIso2 = null, ?string $billingAddressStreet2 = null, ?string $currencyCode = null, ?string $invoiceControlid = null, ?string $invoiceDate = null, ?string $invoiceNumber = null, ?string $invoiceValue = null)
    {
        $this->accountNumber = $accountNumber;
        $this->billingAddressCity = $billingAddressCity;
        $this->billingAddressCountryIso2 = $billingAddressCountryIso2;
        $this->billingAddressState = $billingAddressState;
        $this->billingAddressStreet1 = $billingAddressStreet1;
        $this->billingAddressZip = $billingAddressZip;
        $this->collecCountryIso2 = $collecCountryIso2;
        $this->collecZip = $collecZip;
        $this->company = $company;
        $this->email = $email;
        $this->fullName = $fullName;
        $this->hasInvoice = $hasInvoice;
        $this->phone = $phone;
        $this->title = $title;
        $this->upsAgreements = $upsAgreements;
        $this->aiaCountryIso2 = $aiaCountryIso2;
        $this->billingAddressStreet2 = $billingAddressStreet2;
        $this->currencyCode = $currencyCode;
        $this->invoiceControlid = $invoiceControlid;
        $this->invoiceDate = $invoiceDate;
        $this->invoiceNumber = $invoiceNumber;
        $this->invoiceValue = $invoiceValue;
    }
}