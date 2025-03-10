<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/**
 * |Token | Carrier name|
 *
 * |:---|:---|
 * | airterra | Airterra |
 * | apc_postal | APC Postal|
 * | apg | APG|
 * | aramex | Aramex|
 * | asendia_us | Asendia US|
 * | australia_post | Australia Post (also used for Startrack)|
 * | axlehire | Jitsu|
 * | better_trucks | BetterTrucks|
 * | borderguru | BorderGuru|
 * | boxberry | Boxberry|
 * | bring | Bring (also used for Posten Norge)|
 * | canada_post | Canada Post|
 * | cdl | CDL|
 * | chronopost | Chronopost|
 * | collect_plus | CollectPlus|
 * | correios_br | CorreiosBR|
 * | correos_espana | Correos España |
 * | couriersplease | Couriers Please|
 * | colissimo | Colissimo|
 * | deutsche_post | Deutsche Post|
 * | dhl_benelux | DHL Benelux|
 * | dhl_ecommerce | DHL eCommerce|
 * | dhl_express | DHL Express|
 * | dhl_germany_c2c | DHL Germany C2C|
 * | dhl_germany | DHL Germany|
 * | dpd_de | DPD GERMANY|
 * | dpd_uk | DPD UK|
 * | estafeta | Estafeta|
 * | fastway_australia | Aramex|
 * | fedex | FedEx|
 * | globegistics | Globegistics (now Asendia)|
 * | gls_us | GLS US|
 * | gophr | Gophr|
 * | gso | GSO|
 * | hermes_germany_b2c | Hermes Germany B2C|
 * | hermes_uk | Evri UK |
 * | hongkong_post | Hongkong Post|
 * | lasership | LaserShip|
 * | lso | LSO|
 * | mondial_relay | Mondial Relay|
 * | new_zealand_post | New Zealand Post (also used for Pace and CourierPost)|
 * | nippon_express | Nippon Express|
 * | ontrac | OnTrac|
 * | orangeds | OrangeDS|
 * | parcelforce | Parcelforce|
 * | parcel | Parcel|
 * | passport | Passport|
 * | pcf | PCF|
 * | poste_italiane | Poste Italiane |
 * | posti | Posti|
 * | purolator | Purolator|
 * | royal_mail | Royal Mail|
 * | rr_donnelley | ePost Global|
 * | russian_post | Russian Post|
 * | sendle | Sendle|
 * | skypostal | SkyPostal|
 * | stuart | Stuart|
 * | swyft | Swyft|
 * | uds | UDS (United Delivery Service)|
 * | ups | UPS|
 * | usps | USPS|
 * | veho | Veho |
 * | x_delivery | X Delivery (now Maergo)|
 * | yodel | Yodel|
 *
 */
enum CarriersEnum: string
{
    case Airterra = 'airterra';
    case ApcPostal = 'apc_postal';
    case Apg = 'apg';
    case Aramex = 'aramex';
    case AsendiaUs = 'asendia_us';
    case AustraliaPost = 'australia_post';
    case Axlehire = 'axlehire';
    case BetterTrucks = 'better_trucks';
    case Borderguru = 'borderguru';
    case Boxberry = 'boxberry';
    case Bring = 'bring';
    case CanadaPost = 'canada_post';
    case Cdl = 'cdl';
    case Chronopost = 'chronopost';
    case CollectPlus = 'collect_plus';
    case CorreiosBr = 'correios_br';
    case CorreosEspana = 'correos_espana';
    case Couriersplease = 'couriersplease';
    case Colissimo = 'colissimo';
    case DeutschePost = 'deutsche_post';
    case DhlBenelux = 'dhl_benelux';
    case DhlEcommerce = 'dhl_ecommerce';
    case DhlExpress = 'dhl_express';
    case DhlGermanyC2c = 'dhl_germany_c2c';
    case DhlGermany = 'dhl_germany';
    case DpdDe = 'dpd_de';
    case DpdUk = 'dpd_uk';
    case Estafeta = 'estafeta';
    case FastwayAustralia = 'fastway_australia';
    case Fedex = 'fedex';
    case Globegistics = 'globegistics';
    case GlsUs = 'gls_us';
    case Gophr = 'gophr';
    case Gso = 'gso';
    case HermesGermanyB2c = 'hermes_germany_b2c';
    case HermesUk = 'hermes_uk';
    case HongkongPost = 'hongkong_post';
    case Lasership = 'lasership';
    case Lso = 'lso';
    case MondialRelay = 'mondial_relay';
    case NewZealandPost = 'new_zealand_post';
    case NipponExpress = 'nippon_express';
    case Ontrac = 'ontrac';
    case Orangeds = 'orangeds';
    case Parcelforce = 'parcelforce';
    case Parcel = 'parcel';
    case Passport = 'passport';
    case Pcf = 'pcf';
    case PosteItaliane = 'poste_italiane';
    case Posti = 'posti';
    case Purolator = 'purolator';
    case RoyalMail = 'royal_mail';
    case RrDonnelley = 'rr_donnelley';
    case RussianPost = 'russian_post';
    case Sendle = 'sendle';
    case Skypostal = 'skypostal';
    case Stuart = 'stuart';
    case Swyft = 'swyft';
    case Uds = 'uds';
    case Ups = 'ups';
    case Usps = 'usps';
    case Veho = 'veho';
    case XDelivery = 'x_delivery';
    case Yodel = 'yodel';
}
