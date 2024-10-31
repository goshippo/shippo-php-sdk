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
 * | colissimo_home | Domicile|
 * | colissimo_pick_up_point | Point Retrait|
 * | colissimo_return_mainland_france | Retour France|
 *
 */
enum ServiceLevelColissimoEnum: string
{
    case ColissimoHome = 'colissimo_home';
    case ColissimoPickUpPoint = 'colissimo_pick_up_point';
    case ColissimoReturnMainlandFrance = 'colissimo_return_mainland_france';
}
