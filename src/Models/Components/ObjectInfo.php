<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/** ObjectInfo - Holds internal state relevant to users. */
class ObjectInfo
{
    /**
     *
     * @var ?Authentication $authentication
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('authentication')]
    #[\Speakeasy\Serializer\Annotation\Type('\Shippo\API\Models\Components\Authentication|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Authentication $authentication = null;

    /**
     * @param  ?Authentication  $authentication
     */
    public function __construct(?Authentication $authentication = null)
    {
        $this->authentication = $authentication;
    }
}