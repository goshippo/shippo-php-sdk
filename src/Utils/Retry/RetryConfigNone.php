<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace Shippo\API\Utils\Retry;

class RetryConfigNone extends RetryConfig
{
    public RetryStrategy $strategy = RetryStrategy::NONE;
}
