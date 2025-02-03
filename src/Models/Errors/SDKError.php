<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Errors;

class SDKError extends \Exception
{
    public int $statusCode;
    public string $body;
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;

    public function __construct(string $message, int $statusCode, string $body, ?\Psr\Http\Message\ResponseInterface $rawResponse)
    {
        $this->message = $message;
        $code = $statusCode;
        $this->statusCode = $statusCode;
        $this->body = $body;
        $this->rawResponse = $rawResponse;
        parent::__construct($message, $code, null);
    }

    public function __toString(): string
    {
        return "$this->message: Status $this->statusCode $this->body";
    }

}