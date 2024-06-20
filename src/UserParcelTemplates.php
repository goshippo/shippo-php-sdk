<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API;

class UserParcelTemplates
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
     * List all user parcel templates
     *
     * Returns a list all of all user parcel template objects.
     *
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\ListUserParcelTemplatesResponse
     */
    public function list(
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\ListUserParcelTemplatesResponse {
        $request = new \Shippo\API\Models\Operations\ListUserParcelTemplatesRequest();
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/user-parcel-templates');
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

        $response = new \Shippo\API\Models\Operations\ListUserParcelTemplatesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->userParcelTemplateList = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\UserParcelTemplateList', 'json');
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
     * Create a new user parcel template
     *
     * Creates a new user parcel template. <br>You can choose to create a
     * parcel template using a preset carrier template as a starting point, or
     * you can create an entirely custom one. To use a preset carrier template,
     * pass in a unique template token from <a href="#tag/Parcel-Templates">this list</a>
     * plus the weight fields (**weight** and **weight_unit**). Otherwise, omit
     * the template field and pass the other fields, for the weight, length, height,
     * and depth, as well as their units."
     *
     * @param  mixed  $requestBody
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\CreateUserParcelTemplateResponse
     */
    public function create(
        mixed $requestBody,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\CreateUserParcelTemplateResponse {
        $request = new \Shippo\API\Models\Operations\CreateUserParcelTemplateRequest();
        $request->requestBody = $requestBody;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/user-parcel-templates');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'json');
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

        $response = new \Shippo\API\Models\Operations\CreateUserParcelTemplateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->userParcelTemplate = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\UserParcelTemplate', 'json');
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
     * Delete a user parcel template
     *
     * Deletes a user parcel template using an object ID.
     *
     * @param  string  $userParcelTemplateObjectId
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\DeleteUserParcelTemplateResponse
     */
    public function delete(
        string $userParcelTemplateObjectId,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\DeleteUserParcelTemplateResponse {
        $request = new \Shippo\API\Models\Operations\DeleteUserParcelTemplateRequest();
        $request->userParcelTemplateObjectId = $userParcelTemplateObjectId;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/user-parcel-templates/{UserParcelTemplateObjectId}', \Shippo\API\Models\Operations\DeleteUserParcelTemplateRequest::class, $request, $this->sdkConfiguration->globals);
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

        $response = new \Shippo\API\Models\Operations\DeleteUserParcelTemplateResponse();
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

    /**
     * Retrieves a user parcel template
     *
     * Returns the parcel template information for a specific user parcel
     * template, identified by the object ID.
     *
     * @param  string  $userParcelTemplateObjectId
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\GetUserParcelTemplateResponse
     */
    public function get(
        string $userParcelTemplateObjectId,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\GetUserParcelTemplateResponse {
        $request = new \Shippo\API\Models\Operations\GetUserParcelTemplateRequest();
        $request->userParcelTemplateObjectId = $userParcelTemplateObjectId;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/user-parcel-templates/{UserParcelTemplateObjectId}', \Shippo\API\Models\Operations\GetUserParcelTemplateRequest::class, $request, $this->sdkConfiguration->globals);
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

        $response = new \Shippo\API\Models\Operations\GetUserParcelTemplateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->userParcelTemplate = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\UserParcelTemplate', 'json');
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
     * Update an existing user parcel template
     *
     * Updates an existing user parcel template.
     *
     * @param  string  $userParcelTemplateObjectId
     * @param  ?string  $shippoApiVersion
     * @param  ?\Shippo\API\Models\Components\UserParcelTemplateUpdateRequest  $userParcelTemplateUpdateRequest
     * @return \Shippo\API\Models\Operations\UpdateUserParcelTemplateResponse
     */
    public function update(
        string $userParcelTemplateObjectId,
        ?string $shippoApiVersion = null,
        ?\Shippo\API\Models\Components\UserParcelTemplateUpdateRequest $userParcelTemplateUpdateRequest = null,
    ): \Shippo\API\Models\Operations\UpdateUserParcelTemplateResponse {
        $request = new \Shippo\API\Models\Operations\UpdateUserParcelTemplateRequest();
        $request->userParcelTemplateObjectId = $userParcelTemplateObjectId;
        $request->shippoApiVersion = $shippoApiVersion;
        $request->userParcelTemplateUpdateRequest = $userParcelTemplateUpdateRequest;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/user-parcel-templates/{UserParcelTemplateObjectId}', \Shippo\API\Models\Operations\UpdateUserParcelTemplateRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'userParcelTemplateUpdateRequest', 'json');
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

        $response = new \Shippo\API\Models\Operations\UpdateUserParcelTemplateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->userParcelTemplate = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\UserParcelTemplate', 'json');
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