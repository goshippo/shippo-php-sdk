<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/**
 * Secured funds include money orders, certified cheques and others (see 
 *
 * <a href="https://www.ups.com/content/us/en/shipping/time/service/value_added/cod.html">UPS</a> for details). 
 * If no payment_method inputted the value defaults to "ANY".)
 */
enum PaymentMethod: string
{
    case SecuredFunds = 'SECURED_FUNDS';
    case Cash = 'CASH';
    case Any = 'ANY';
}