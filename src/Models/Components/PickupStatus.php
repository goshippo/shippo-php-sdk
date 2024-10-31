<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** Indicates the status of the pickup. */
enum PickupStatus: string
{
    case Pending = 'PENDING';
    case Confirmed = 'CONFIRMED';
    case Error = 'ERROR';
    case Cancelled = 'CANCELLED';
}
