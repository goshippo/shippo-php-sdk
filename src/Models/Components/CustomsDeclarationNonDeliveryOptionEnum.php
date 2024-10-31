<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/**
 * Indicates how the carrier should proceed in case the shipment can't be delivered.
 *
 * Allowed values available <a href="#tag/Customs-Declaration-Non-Delivery-Option">here</a>
 */
enum CustomsDeclarationNonDeliveryOptionEnum: string
{
    case Abandon = 'ABANDON';
    case Return = 'RETURN';
}
