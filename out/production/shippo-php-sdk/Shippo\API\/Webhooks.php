<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API;

class Webhooks
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
     * Create a new webhook
     *
     * Creates a new webhook to send notifications to a URL when a specific event occurs.
     *
     * @param  \Shippo\API\Models\Components\WebhookUpdateRequest  $request
     * @return \Shippo\API\Models\Operations\CreateWebhookResponse
     */
    public function createWebhook(
        \Shippo\API\Models\Components\WebhookUpdateRequest $request,
    ): \Shippo\API\Models\Operations\CreateWebhookResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/webhooks');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'request', 'json');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\CreateWebhookResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->webhook = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\Webhook', 'json');
            }
        }

        return $response;
    }

    /**
     * List all webhooks
     *
     * Returns a list of all webhooks you have created.
     *
     * @return \Shippo\API\Models\Operations\ListWebhooksResponse
     */
    public function listWebhooks(
    ): \Shippo\API\Models\Operations\ListWebhooksResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/webhooks');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\ListWebhooksResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->webhookPaginatedList = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\WebhookPaginatedList', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a specific webhook
     *
     * Returns the details of a specific webhook using the webhook object ID.
     *
     * @param  string  $webhookId
     * @return \Shippo\API\Models\Operations\GetWebhookResponse
     */
    public function getWebhook(
        string $webhookId,
    ): \Shippo\API\Models\Operations\GetWebhookResponse {
        $request = new \Shippo\API\Models\Operations\GetWebhookRequest();
        $request->webhookId = $webhookId;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/webhooks/{webhookId}', \Shippo\API\Models\Operations\GetWebhookRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\GetWebhookResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->webhook = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\Webhook', 'json');
            }
        }

        return $response;
    }

    /**
     * Update an existing webhook
     *
     * Updates an existing webhook using the webhook object ID.
     *
     * @param  string  $webhookId
     * @param  \Shippo\API\Models\Components\WebhookUpdateRequest  $webhookUpdateRequest
     * @return \Shippo\API\Models\Operations\UpdateWebhookResponse
     */
    public function updateWebhook(
        string $webhookId,
        \Shippo\API\Models\Components\WebhookUpdateRequest $webhookUpdateRequest,
    ): \Shippo\API\Models\Operations\UpdateWebhookResponse {
        $request = new \Shippo\API\Models\Operations\UpdateWebhookRequest();
        $request->webhookId = $webhookId;
        $request->webhookUpdateRequest = $webhookUpdateRequest;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/webhooks/{webhookId}', \Shippo\API\Models\Operations\UpdateWebhookRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'webhookUpdateRequest', 'json');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\UpdateWebhookResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->webhook = $serializer->deserialize((string) $httpResponse->getBody(), 'Shippo\API\Models\Components\Webhook', 'json');
            }
        }

        return $response;
    }

    /**
     * Delete a specific webhook
     *
     * Deletes a specific webhook using the webhook object ID.
     *
     * @param  string  $webhookId
     * @return \Shippo\API\Models\Operations\DeleteWebhookResponse
     */
    public function deleteWebhook(
        string $webhookId,
    ): \Shippo\API\Models\Operations\DeleteWebhookResponse {
        $request = new \Shippo\API\Models\Operations\DeleteWebhookRequest();
        $request->webhookId = $webhookId;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/webhooks/{webhookId}', \Shippo\API\Models\Operations\DeleteWebhookRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Shippo\API\Models\Operations\DeleteWebhookResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 204) {
        }

        return $response;
    }
}