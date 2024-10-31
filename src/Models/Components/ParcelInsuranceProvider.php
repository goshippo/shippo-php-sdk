<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** To have insurance cover provided by a carrier directly instead of Shippo's provider (XCover), set provider to `FEDEX`, `UPS`, or `ONTRAC`. */
enum ParcelInsuranceProvider: string
{
    case Fedex = 'FEDEX';
    case Ups = 'UPS';
    case Ontrac = 'ONTRAC';
}
