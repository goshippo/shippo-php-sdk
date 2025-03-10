<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/**
 * Platform the order was created on and, if applicable, imported from. 
 *
 * Orders created via the Shippo API or dashboard will have the value "Shippo".
 */
enum ShopApp: string
{
    case Amazon = 'Amazon';
    case Bigcommerce = 'Bigcommerce';
    case CSVImport = 'CSV_Import';
    case EBay = 'eBay';
    case EPages = 'ePages';
    case Etsy = 'Etsy';
    case Godaddy = 'Godaddy';
    case Magento = 'Magento';
    case Shippo = 'Shippo';
    case Shopify = 'Shopify';
    case Spreecommerce = 'Spreecommerce';
    case StripeRelay = 'StripeRelay';
    case Weebly = 'Weebly';
    case WooCommerce = 'WooCommerce';
}
