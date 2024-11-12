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
 * | airterra_ground | GroundXC|
 * | airterra_postal | FastPost|
 *
 */
enum ServiceLevelAirterraEnum: string
{
    case AirterraGround = 'airterra_ground';
    case AirterraPostal = 'airterra_postal';
}
