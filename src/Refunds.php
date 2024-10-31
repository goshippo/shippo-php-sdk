<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API;

use Shippo\API\Models\Components;
use Shippo\API\Models\Operations;
use Speakeasy\Serializer\DeserializationContext;

class Refunds
{
    private SDKConfiguration $sdkConfiguration;
    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(public SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Create a refund
     *
     * Creates a new refund object.
     *
     * @param  Components\RefundRequestBody  $refundRequestBody
     * @param  ?string  $shippoApiVersion
     * @return Operations\CreateRefundResponse
     * @throws \Shippo\API\Models\Errors\SDKException
     */
    public function create(Components\RefundRequestBody $refundRequestBody, ?string $shippoApiVersion = null): Operations\CreateRefundResponse
    {
        $request = new Operations\CreateRefundRequest(
            refundRequestBody: $refundRequestBody,
            shippoApiVersion: $shippoApiVersion,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/refunds');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'refundRequestBody', 'json');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Shippo\API\Models\Components\Refund', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CreateRefundResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    refund: $obj);

                return $response;
            } else {
                throw new \Shippo\API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400 || $statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Shippo\API\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Shippo\API\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * List all refunds
     *
     * Returns a list all refund objects.
     *
     * @param  ?string  $shippoApiVersion
     * @return Operations\ListRefundsResponse
     * @throws \Shippo\API\Models\Errors\SDKException
     */
    public function list(?string $shippoApiVersion = null): Operations\ListRefundsResponse
    {
        $request = new Operations\ListRefundsRequest(
            shippoApiVersion: $shippoApiVersion,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/refunds/');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Shippo\API\Models\Components\RefundPaginatedList', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\ListRefundsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    refundPaginatedList: $obj);

                return $response;
            } else {
                throw new \Shippo\API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400 || $statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Shippo\API\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Shippo\API\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Retrieve a refund
     *
     * Returns an existing rate using a rate object ID.
     *
     * @param  string  $refundId
     * @param  ?string  $shippoApiVersion
     * @return Operations\GetRefundResponse
     * @throws \Shippo\API\Models\Errors\SDKException
     */
    public function get(string $refundId, ?string $shippoApiVersion = null): Operations\GetRefundResponse
    {
        $request = new Operations\GetRefundRequest(
            refundId: $refundId,
            shippoApiVersion: $shippoApiVersion,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/refunds/{RefundId}', Operations\GetRefundRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Shippo\API\Models\Components\Refund', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetRefundResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    refund: $obj);

                return $response;
            } else {
                throw new \Shippo\API\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400 || $statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Shippo\API\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Shippo\API\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

}