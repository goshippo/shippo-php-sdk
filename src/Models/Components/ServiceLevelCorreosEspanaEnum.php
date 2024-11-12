<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/**
 * |Token | Service name|
 *
 * |:---|:---|
 * | correos_standard_home| Paquete Estándar|
 * | correos_premium_home | Paquete Premium|
 *
 */
enum ServiceLevelCorreosEspanaEnum: string
{
    case CorreosStandardHome = 'correos_standard_home';
    case CorreosPremiumHome = 'correos_premium_home';
}
