<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** Indicates the status of the Refund. */
enum RefundStatus: string
{
    case Queued = 'QUEUED';
    case Pending = 'PENDING';
    case Success = 'SUCCESS';
    case Error = 'ERROR';
}
