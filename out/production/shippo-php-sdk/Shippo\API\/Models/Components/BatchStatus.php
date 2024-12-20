<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/**
 * Batches that are `VALIDATING` are being created and validated<br>
 *
 * `VALID` batches can be purchased<br>
 * `INVALID` batches cannot be purchased, `INVALID` BatchShipments must be removed<br>
 * Batches that are in the `PURCHASING` state are being purchased<br>
 * `PURCHASED` batches are finished purchasing.
 */
enum BatchStatus: string
{
    case Validating = 'VALIDATING';
    case Valid = 'VALID';
    case Invalid = 'INVALID';
    case Purchasing = 'PURCHASING';
    case Purchased = 'PURCHASED';
}
