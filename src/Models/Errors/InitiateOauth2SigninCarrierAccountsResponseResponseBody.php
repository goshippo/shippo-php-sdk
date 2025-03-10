<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Errors;

use Shippo\API\Utils;
/** InitiateOauth2SigninCarrierAccountsResponseResponseBody - Invalid carrier account provided by the user */
class InitiateOauth2SigninCarrierAccountsResponseResponseBody
{
    /**
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     *
     * @var ?string $detail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('detail')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $detail = null;

    /**
     * @param  ?string  $title
     * @param  ?string  $detail
     * @phpstan-pure
     */
    public function __construct(?string $title = null, ?string $detail = null)
    {
        $this->title = $title;
        $this->detail = $detail;
    }

    public function toException(): InitiateOauth2SigninCarrierAccountsResponseResponseBodyThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new InitiateOauth2SigninCarrierAccountsResponseResponseBodyThrowable($message, (int) $code, $this);
    }
}