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
 * | fedex_ground | FedEx Ground®|
 * | fedex_home_delivery | FedEx Home Delivery®|
 * | fedex_ground_economy | FedEx Ground® Economy|
 * | fedex_2_day | FedEx 2Day®|
 * | fedex_2_day_am | FedEx 2Day® A.M.|
 * | fedex_express_saver | FedEx Express Saver®|
 * | fedex_standard_overnight | FedEx Standard Overnight®|
 * | fedex_priority_overnight | FedEx Priority Overnight®|
 * | fedex_first_overnight | FedEx First Overnight®|
 * | fedex_international_economy | FedEx International Economy®|
 * | fedex_international_priority | FedEx International Priority®|
 * | fedex_international_first | FedEx International First®|
 * | fedex_europe_first_international_priority | FedEx International First®|
 * | fedex_international_connect_plus | FedEx International Connect Plus|
 * | fedex_first | FedEx First |
 * | fedex_priority | FedEx Priority |
 * | fedex_priority_express | FedEx Priority Express|
 * | fedex_economy_select | FedEx® Economy |
 * | fedex_regional_economy | FedEx® Regional Economy |
 * | fedex_first_overnight_extra_hours | First Overnight® EH |
 * | fedex_international_priority_express | International Priority® Express |
 * | fedex_next_day_mid_morning | Next Day Mid Morning |
 * | fedex_priority_overnight_extra_hours | Priority Overnight® EH |
 * | fedex_standard_overnight_extra_hours | Standard Overnight® EH |
 *
 */
enum ServiceLevelFedExEnum: string
{
    case FedexGround = 'fedex_ground';
    case FedexHomeDelivery = 'fedex_home_delivery';
    case FedexSmartPost = 'fedex_smart_post';
    case FedexGroundEconomy = 'fedex_ground_economy';
    case Fedex2Day = 'fedex_2_day';
    case Fedex2DayAm = 'fedex_2_day_am';
    case FedexExpressSaver = 'fedex_express_saver';
    case FedexStandardOvernight = 'fedex_standard_overnight';
    case FedexPriorityOvernight = 'fedex_priority_overnight';
    case FedexFirstOvernight = 'fedex_first_overnight';
    case FedexInternationalEconomy = 'fedex_international_economy';
    case FedexInternationalPriority = 'fedex_international_priority';
    case FedexInternationalFirst = 'fedex_international_first';
    case FedexEuropeFirstInternationalPriority = 'fedex_europe_first_international_priority';
    case FedexInternationalConnectPlus = 'fedex_international_connect_plus';
    case FedexFirst = 'fedex_first';
    case FedexPriority = 'fedex_priority';
    case FedexPriorityExpress = 'fedex_priority_express';
    case FedexEconomySelect = 'fedex_economy_select';
    case FedexRegionalEconomy = 'fedex_regional_economy';
    case FedexFirstOvernightExtraHours = 'fedex_first_overnight_extra_hours';
    case FedexInternationalPriorityExpress = 'fedex_international_priority_express';
    case FedexNextDayMidMorning = 'fedex_next_day_mid_morning';
    case FedexPriorityOvernightExtraHours = 'fedex_priority_overnight_extra_hours';
    case FedexStandardOvernightExtraHours = 'fedex_standard_overnight_extra_hours';
}