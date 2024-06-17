<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/**
 * B13A Option details are obtained by filing a B13A Canada Export Declaration via the Canadian Export Reporting System (CERS). 
 *
 * <a href="https://www.cbsa-asfc.gc.ca/services/export/guide-eng.html" target="_blank" rel="noopener noreferrer"> More information on reporting commercial exports from Canada. </a>
 * Allowed values available <a href="#tag/Customs-Declaration-B13A-Filing-Option">here</a>
 */
enum CustomsDeclarationB13AFilingOptionEnum: string
{
    case FiledElectronically = 'FILED_ELECTRONICALLY';
    case SummaryReporting = 'SUMMARY_REPORTING';
    case NotRequired = 'NOT_REQUIRED';
}
