<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** ObjectInfo - Holds internal state relevant to users. */
class ObjectInfo
{
    #[\JMS\Serializer\Annotation\SerializedName('authentication')]
    #[\JMS\Serializer\Annotation\Type('Shippo\API\Models\Components\Authentication')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Authentication $authentication = null;

    public function __construct()
    {
        $this->authentication = null;
    }
}