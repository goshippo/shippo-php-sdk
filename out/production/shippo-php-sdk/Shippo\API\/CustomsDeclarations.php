<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API;

class CustomsDeclarations
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
     * List all customs declarations
     *
     * Returns a a list of all customs declaration objects
     *
     * @param  ?int  $page
     * @param  ?int  $results
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\ListCustomsDeclarationsResponse
     */
    public function list(
        ?int $page = null,
        ?int $results = null,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\ListCustomsDeclarationsResponse {
        $request = new \Shippo\API\Models\Operations\ListCustomsDeclarationsRequest();
        $request->page = $page;
        $request->results = $results;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/customs/declarations');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Shippo\API\Models\Operations\ListCustomsDeclarationsRequest::class, $request, $this->sdkConfiguration->globals));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\ListCustomsDeclarationsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->customsDeclarationPaginatedList = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\CustomsDeclarationPaginatedList', 'json');
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
     * Create a new customs declaration
     *
     * Creates a new customs declaration object
     *
     * @param  \Shippo\API\Models\Components\CustomsDeclarationCreateRequest  $customsDeclarationCreateRequest
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\CreateCustomsDeclarationResponse
     */
    public function create(
        \Shippo\API\Models\Components\CustomsDeclarationCreateRequest $customsDeclarationCreateRequest,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\CreateCustomsDeclarationResponse {
        $request = new \Shippo\API\Models\Operations\CreateCustomsDeclarationRequest();
        $request->customsDeclarationCreateRequest = $customsDeclarationCreateRequest;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/customs/declarations');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'customsDeclarationCreateRequest', 'json');
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

        $response = new \Shippo\API\Models\Operations\CreateCustomsDeclarationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->customsDeclaration = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\CustomsDeclaration', 'json');
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
     * Retrieve a customs declaration
     *
     * Returns an existing customs declaration using an object ID
     *
     * @param  string  $customsDeclarationId
     * @param  ?int  $page
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\GetCustomsDeclarationResponse
     */
    public function get(
        string $customsDeclarationId,
        ?int $page = null,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\GetCustomsDeclarationResponse {
        $request = new \Shippo\API\Models\Operations\GetCustomsDeclarationRequest();
        $request->customsDeclarationId = $customsDeclarationId;
        $request->page = $page;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/customs/declarations/{CustomsDeclarationId}', \Shippo\API\Models\Operations\GetCustomsDeclarationRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Shippo\API\Models\Operations\GetCustomsDeclarationRequest::class, $request, $this->sdkConfiguration->globals));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\GetCustomsDeclarationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->customsDeclaration = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\CustomsDeclaration', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string) $httpResponse->getBody(), 'array<string, mixed>', 'json');
            }
        }

        return $response;
    }
}