<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Utils;

class ServerDetails
{
    public string $baseUrl;

    /**
     * @var array<string, string> options
     */
    public array $options;

    /**
     * @param  string  $baseUrl
     * @param  array<string, string>  $options
     */
    public function __construct(string $baseUrl, array $options)
    {
        $this->baseUrl = $baseUrl;
        $this->options = $options;
    }
}