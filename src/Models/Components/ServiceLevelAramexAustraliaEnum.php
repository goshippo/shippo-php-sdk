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
 * | fastway_australia_parcel | Parcel|
 * | fastway_australia_satchel | Satchel|
 * | fastway_australia_box_small | Box Small|
 * | fastway_australia_box_medium | Box Medium|
 * | fastway_australia_box_large | Box Large|
 *
 */
enum ServiceLevelAramexAustraliaEnum: string
{
    case FastwayAustraliaParcel = 'fastway_australia_parcel';
    case FastwayAustraliaSatchel = 'fastway_australia_satchel';
    case FastwayAustraliaBoxSmall = 'fastway_australia_box_small';
    case FastwayAustraliaBoxMedium = 'fastway_australia_box_medium';
    case FastwayAustraliaBoxLarge = 'fastway_australia_box_large';
}
