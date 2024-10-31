<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** Indicates the high level status of the shipment. */
enum TrackingStatusEnum: string
{
    case Unknown = 'UNKNOWN';
    case PreTransit = 'PRE_TRANSIT';
    case Transit = 'TRANSIT';
    case Delivered = 'DELIVERED';
    case Returned = 'RETURNED';
    case Failure = 'FAILURE';
}
