<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Errors;

class InitiateOauth2SigninResponseBodyThrowable extends \RuntimeException
{
    public InitiateOauth2SigninResponseBody $container;

    public function __construct(string $message, int $statusCode, InitiateOauth2SigninResponseBody $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}