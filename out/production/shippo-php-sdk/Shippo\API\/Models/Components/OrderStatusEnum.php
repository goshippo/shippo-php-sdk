<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/**
 * Current state of the order. See the <a href="https://docs.goshippo.com/docs/orders/orders/">orders tutorial</a> 
 *
 * for the logic of how the status is handled.
 */
enum OrderStatusEnum: string
{
    case Unknown = 'UNKNOWN';
    case Awaitpay = 'AWAITPAY';
    case Paid = 'PAID';
    case Refunded = 'REFUNDED';
    case Cancelled = 'CANCELLED';
    case PartiallyFulfilled = 'PARTIALLY_FULFILLED';
    case Shipped = 'SHIPPED';
}
