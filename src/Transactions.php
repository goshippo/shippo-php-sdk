<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API;

class Transactions
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
     * List all shipping labels
     *
     * Returns a list of all transaction objects.
     *
     * @param  \Shippo\API\Models\Operations\ListTransactionsRequest  $request
     * @return \Shippo\API\Models\Operations\ListTransactionsResponse
     */
    public function list(
        ?\Shippo\API\Models\Operations\ListTransactionsRequest $request,
    ): \Shippo\API\Models\Operations\ListTransactionsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/transactions');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Shippo\API\Models\Operations\ListTransactionsRequest::class, $request, $this->sdkConfiguration->globals));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\ListTransactionsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->transactionPaginatedList = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\TransactionPaginatedList', 'json');
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
     * Create a shipping label
     *
     * Creates a new transaction object and purchases the shipping label using a rate object that has previously been created. <br> OR <br> Creates a new transaction object and purchases the shipping label instantly using shipment details, an existing carrier account, and an existing service level token.
     *
     * @param  mixed  $requestBody
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\CreateTransactionResponse
     */
    public function create(
        mixed $requestBody,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\CreateTransactionResponse {
        $request = new \Shippo\API\Models\Operations\CreateTransactionRequest();
        $request->requestBody = $requestBody;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/transactions');
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

        $response = new \Shippo\API\Models\Operations\CreateTransactionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->transaction = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\Transaction', 'json');
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
     * Retrieve a shipping label
     *
     * Returns an existing transaction using an object ID.
     *
     * @param  string  $transactionId
     * @param  ?string  $shippoApiVersion
     * @return \Shippo\API\Models\Operations\GetTransactionResponse
     */
    public function get(
        string $transactionId,
        ?string $shippoApiVersion = null,
    ): \Shippo\API\Models\Operations\GetTransactionResponse {
        $request = new \Shippo\API\Models\Operations\GetTransactionRequest();
        $request->transactionId = $transactionId;
        $request->shippoApiVersion = $shippoApiVersion;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/transactions/{TransactionId}', \Shippo\API\Models\Operations\GetTransactionRequest::class, $request, $this->sdkConfiguration->globals);
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

        $response = new \Shippo\API\Models\Operations\GetTransactionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->transaction = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\Transaction', 'json');
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