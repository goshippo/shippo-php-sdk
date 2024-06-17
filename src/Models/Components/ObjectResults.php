<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** ObjectResults - An object containing the following counts:<br>`creation_succeeded`<br>`creation_failed`<br>`purchase_succeeded`<br>`purchase_failed` */
class ObjectResults
{
    #[\JMS\Serializer\Annotation\SerializedName('creation_failed')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $creationFailed;

    #[\JMS\Serializer\Annotation\SerializedName('creation_succeeded')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $creationSucceeded;

    #[\JMS\Serializer\Annotation\SerializedName('purchase_failed')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $purchaseFailed;

    #[\JMS\Serializer\Annotation\SerializedName('purchase_succeeded')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $purchaseSucceeded;

    public function __construct()
    {
        $this->creationFailed = 0;
        $this->creationSucceeded = 0;
        $this->purchaseFailed = 0;
        $this->purchaseSucceeded = 0;
    }
}