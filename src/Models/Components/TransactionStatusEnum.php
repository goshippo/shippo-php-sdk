<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** Indicates the status of the Transaction. */
enum TransactionStatusEnum: string
{
    case Waiting = 'WAITING';
    case Queued = 'QUEUED';
    case Success = 'SUCCESS';
    case Error = 'ERROR';
    case Refunded = 'REFUNDED';
    case Refundpending = 'REFUNDPENDING';
    case Refundrejected = 'REFUNDREJECTED';
}
