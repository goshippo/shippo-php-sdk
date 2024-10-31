<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Models\Components;
class CreateParcelResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     *
     * @var ?Components\Parcel $parcel
     */
    public ?Components\Parcel $parcel = null;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?Components\Parcel  $parcel
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Components\Parcel $parcel = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->parcel = $parcel;
    }
}