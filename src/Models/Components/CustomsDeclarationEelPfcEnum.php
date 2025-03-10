<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/**
 * EEL / PFC type of the shipment. For most shipments from the US to CA, `NOEEI_30_36` is applicable; for most 
 *
 * other shipments from the US, `NOEEI_30_37_a` is applicable.
 * Allowed values available <a href="#tag/Customs-Declaration-EELPFC">here</a>
 */
enum CustomsDeclarationEelPfcEnum: string
{
    case NOEEI3037A = 'NOEEI_30_37_a';
    case NOEEI3037H = 'NOEEI_30_37_h';
    case NOEEI3037F = 'NOEEI_30_37_f';
    case Noeei3036 = 'NOEEI_30_36';
    case AesItn = 'AES_ITN';
}
