<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** ObjectResults - An object containing the following counts:<br>`creation_succeeded`<br>`creation_failed`<br>`purchase_succeeded`<br>`purchase_failed` */
class ObjectResults
{
    /**
     *
     * @var int $creationFailed
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('creation_failed')]
    public int $creationFailed;

    /**
     *
     * @var int $creationSucceeded
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('creation_succeeded')]
    public int $creationSucceeded;

    /**
     *
     * @var int $purchaseFailed
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('purchase_failed')]
    public int $purchaseFailed;

    /**
     *
     * @var int $purchaseSucceeded
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('purchase_succeeded')]
    public int $purchaseSucceeded;

    /**
     * @param  int  $creationFailed
     * @param  int  $creationSucceeded
     * @param  int  $purchaseFailed
     * @param  int  $purchaseSucceeded
     */
    public function __construct(int $creationFailed, int $creationSucceeded, int $purchaseFailed, int $purchaseSucceeded)
    {
        $this->creationFailed = $creationFailed;
        $this->creationSucceeded = $creationSucceeded;
        $this->purchaseFailed = $purchaseFailed;
        $this->purchaseSucceeded = $purchaseSucceeded;
    }
}