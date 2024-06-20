<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API;

class RatesAtCheckout
{
    private SDKConfiguration $sdkConfiguration;

    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Generate a live rates request
     *
     * Initiates a live rates request. Include either the object ID for
     * an existing address record or a fully formed address object when entering
     * an address value. You can also enter the object ID of an existing user parcel
     * template or a fully formed user parcel template object as the parcel value.
     *
     * @param  \Shippo\API\Models\Components\LiveRateCreateRequest  $liveRateCreateRequest
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\CreateLiveRateResponse
     */
    public function create(
        \Shippo\API\Models\Components\LiveRateCreateRequest $liveRateCreateRequest,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\CreateLiveRateResponse {
        $request = new \Shippo\API\Models\Operations\CreateLiveRateRequest();
        $request->liveRateCreateRequest = $liveRateCreateRequest;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/live-rates');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'liveRateCreateRequest', 'json');
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

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\CreateLiveRateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->liveRatePaginatedList = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\LiveRatePaginatedList', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string) $httpResponse->getBody(), 'array<string, mixed>', 'json');
            }
        }

        return $response;
    }

    /**
     * Show current default parcel template
     *
     * Retrieve and display the currently configured default parcel template for live rates.
     *
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\GetDefaultParcelTemplateResponse
     */
    public function getDefaultParcelTemplate(
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\GetDefaultParcelTemplateResponse {
        $request = new \Shippo\API\Models\Operations\GetDefaultParcelTemplateRequest();
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/live-rates/settings/parcel-template');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\GetDefaultParcelTemplateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->defaultParcelTemplate = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\DefaultParcelTemplate', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string) $httpResponse->getBody(), 'array<string, mixed>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update default parcel template
     *
     * Update the currently configured default parcel template for live rates. The object_id in the request payload should identify the user parcel template to be the new default.
     *
     * @param  ?string  $shippoApiVersion
     * @param  ?\Shippo\API\Models\Components\DefaultParcelTemplateUpdateRequest  $defaultParcelTemplateUpdateRequest
     * @return \Shippo\API\Models\Operations\UpdateDefaultParcelTemplateResponse
     */
    public function updateDefaultParcelTemplate(
        ?string $shippoApiVersion = null,
        ?\Shippo\API\Models\Components\DefaultParcelTemplateUpdateRequest $defaultParcelTemplateUpdateRequest = null,
    ): \Shippo\API\Models\Operations\UpdateDefaultParcelTemplateResponse {
        $request = new \Shippo\API\Models\Operations\UpdateDefaultParcelTemplateRequest();
        $request->shippoApiVersion = $shippoApiVersion;
        $request->defaultParcelTemplateUpdateRequest = $defaultParcelTemplateUpdateRequest;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/live-rates/settings/parcel-template');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'defaultParcelTemplateUpdateRequest', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\UpdateDefaultParcelTemplateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->defaultParcelTemplate = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\DefaultParcelTemplate', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string) $httpResponse->getBody(), 'array<string, mixed>', 'json');
            }
        }

        return $response;
    }

    /**
     * Clear current default parcel template
     *
     * Clears the currently configured default parcel template for live rates.
     *
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\DeleteDefaultParcelTemplateResponse
     */
    public function deleteDefaultParcelTemplate(
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\DeleteDefaultParcelTemplateResponse {
        $request = new \Shippo\API\Models\Operations\DeleteDefaultParcelTemplateRequest();
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/live-rates/settings/parcel-template');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\DeleteDefaultParcelTemplateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 204) {
        } elseif ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string) $httpResponse->getBody(), 'array<string, mixed>', 'json');
            }
        }

        return $response;
    }
}