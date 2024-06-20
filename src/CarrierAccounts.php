<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API;

class CarrierAccounts
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
     * List all carrier accounts
     *
     * Returns a list of all carrier accounts connected to your Shippo account. These carrier accounts include both Shippo carrier accounts and your own carrier accounts that you have connected to your Shippo account.
     *
     * Additionally, you can get information about the service levels associated with each carrier account by passing in the `?service_levels=true` query parameter. <br>
     * Using it appends the property `service_levels` to each carrier account. <br>
     * By default, if the query parameter is omitted, the `service_levels` property will not be included in the response.
     *
     * @param  \Shippo\API\Models\Operations\ListCarrierAccountsRequest  $request
     * @return \Shippo\API\Models\Operations\ListCarrierAccountsResponse
     */
    public function list(
        ?\Shippo\API\Models\Operations\ListCarrierAccountsRequest $request,
    ): \Shippo\API\Models\Operations\ListCarrierAccountsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/carrier_accounts');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Shippo\API\Models\Operations\ListCarrierAccountsRequest::class, $request, $this->sdkConfiguration->globals));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\ListCarrierAccountsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->carrierAccountPaginatedList = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\CarrierAccountPaginatedList', 'json');
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
     * Create a new carrier account
     *
     * Creates a new carrier account or connects an existing carrier account to the Shippo account.
     *
     * @param  \Shippo\API\Models\Components\ConnectExistingOwnAccountRequest  $connectExistingOwnAccountRequest
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\CreateCarrierAccountResponse
     */
    public function create(
        \Shippo\API\Models\Components\ConnectExistingOwnAccountRequest $connectExistingOwnAccountRequest,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\CreateCarrierAccountResponse {
        $request = new \Shippo\API\Models\Operations\CreateCarrierAccountRequest();
        $request->connectExistingOwnAccountRequest = $connectExistingOwnAccountRequest;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/carrier_accounts');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'connectExistingOwnAccountRequest', 'json');
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

        $response = new \Shippo\API\Models\Operations\CreateCarrierAccountResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->carrierAccount = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\CarrierAccount', 'json');
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
     * Retrieve a carrier account
     *
     * Returns an existing carrier account using an object ID.
     *
     * @param  string  $carrierAccountId
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\GetCarrierAccountResponse
     */
    public function get(
        string $carrierAccountId,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\GetCarrierAccountResponse {
        $request = new \Shippo\API\Models\Operations\GetCarrierAccountRequest();
        $request->carrierAccountId = $carrierAccountId;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/carrier_accounts/{CarrierAccountId}', \Shippo\API\Models\Operations\GetCarrierAccountRequest::class, $request, $this->sdkConfiguration->globals);
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

        $response = new \Shippo\API\Models\Operations\GetCarrierAccountResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->carrierAccount = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\CarrierAccount', 'json');
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
     * Update a carrier account
     *
     * Updates an existing carrier account object. The account_id and carrier can't be updated. This is because they form the unique identifier together.
     *
     * @param  string  $carrierAccountId
     * @param  ?string  $shippoApiVersion
     * @param  ?\Shippo\API\Models\Components\CarrierAccountBase  $carrierAccountBase
     * @return \Shippo\API\Models\Operations\UpdateCarrierAccountResponse
     */
    public function update(
        string $carrierAccountId,
        ?string $shippoApiVersion = null,
        ?\Shippo\API\Models\Components\CarrierAccountBase $carrierAccountBase = null,
    ): \Shippo\API\Models\Operations\UpdateCarrierAccountResponse {
        $request = new \Shippo\API\Models\Operations\UpdateCarrierAccountRequest();
        $request->carrierAccountId = $carrierAccountId;
        $request->shippoApiVersion = $shippoApiVersion;
        $request->carrierAccountBase = $carrierAccountBase;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/carrier_accounts/{CarrierAccountId}', \Shippo\API\Models\Operations\UpdateCarrierAccountRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'carrierAccountBase', 'json');
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

        $response = new \Shippo\API\Models\Operations\UpdateCarrierAccountResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->carrierAccount = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\CarrierAccount', 'json');
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
     * Connect an existing carrier account using OAuth 2.0
     *
     * Used by client applications to setup or reconnect an existing carrier account with carriers that support OAuth 2.0
     *
     * @param  string  $carrierAccountObjectId
     * @param  string  $redirectUri
     * @param  ?string  $state
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\InitiateOauth2SigninResponse
     */
    public function initiateOauth2Signin(
        string $carrierAccountObjectId,
        string $redirectUri,
        ?string $state = null,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\InitiateOauth2SigninResponse {
        $request = new \Shippo\API\Models\Operations\InitiateOauth2SigninRequest();
        $request->carrierAccountObjectId = $carrierAccountObjectId;
        $request->redirectUri = $redirectUri;
        $request->state = $state;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/carrier_accounts/{CarrierAccountObjectId}/signin/initiate', \Shippo\API\Models\Operations\InitiateOauth2SigninRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Shippo\API\Models\Operations\InitiateOauth2SigninRequest::class, $request, $this->sdkConfiguration->globals));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\InitiateOauth2SigninResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 302) {
            $response->headers = $httpResponse->getHeaders();
        } elseif ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fourHundredApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Operations\InitiateOauth2SigninResponseBody', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fourHundredAndOneApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Operations\InitiateOauth2SigninCarrierAccountsResponseBody', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fourHundredAndFourApplicationJsonObject = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Operations\InitiateOauth2SigninCarrierAccountsResponseResponseBody', 'json');
            }
        }

        return $response;
    }

    /**
     * Add a Shippo carrier account
     *
     * Adds a Shippo carrier account
     *
     * @param  mixed  $requestBody
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\RegisterCarrierAccountResponse
     */
    public function register(
        mixed $requestBody,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\RegisterCarrierAccountResponse {
        $request = new \Shippo\API\Models\Operations\RegisterCarrierAccountRequest();
        $request->requestBody = $requestBody;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/carrier_accounts/register/new');
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

        $response = new \Shippo\API\Models\Operations\RegisterCarrierAccountResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->carrierAccount = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\CarrierAccount', 'json');
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
     * Get Carrier Registration status
     *
     * Returns the registration status for the given account for the given carrier
     *
     * @param  \Shippo\API\Models\Operations\Carrier  $carrier
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\GetCarrierRegistrationStatusResponse
     */
    public function getRegistrationStatus(
        \Shippo\API\Models\Operations\Carrier $carrier,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\GetCarrierRegistrationStatusResponse {
        $request = new \Shippo\API\Models\Operations\GetCarrierRegistrationStatusRequest();
        $request->carrier = $carrier;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/carrier_accounts/reg-status');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Shippo\API\Models\Operations\GetCarrierRegistrationStatusRequest::class, $request, $this->sdkConfiguration->globals));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\GetCarrierRegistrationStatusResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->carrierAccountRegistrationStatus = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\CarrierAccountRegistrationStatus', 'json');
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