<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API;

/**
 * ShippoSDKBuilder is used to configure and build an instance of the SDK.
 */
class ShippoSDKBuilder
{
    public function __construct(
        private SDKConfiguration $sdkConfig = new SDKConfiguration(),
    ) {
    }

    /**
     * setClient allows setting a custom Guzzle client for the SDK to make requests with.
     *
     * @param  \GuzzleHttp\ClientInterface  $client
     * @return ShippoSDKBuilder
     */
    public function setClient(\GuzzleHttp\ClientInterface $client): ShippoSDKBuilder
    {
        $this->sdkConfig->defaultClient = $client;

        return $this;
    }

    /**
     * setSecurity is used to configure the security required for the SDK.
     *
     * @param  string  $apiKeyHeader
     * @return ShippoSDKBuilder
     */
    public function setSecurity(string $apiKeyHeader): ShippoSDKBuilder
    {
        $security = new Models\Components\Security();
        $security->apiKeyHeader = $apiKeyHeader;
        $this->sdkConfig->security = $security;

        return $this;
    }

    /**
     * setSecuritySource is usd to configure the security required for the SDK.
     * unlike setSecurity, setSecuritySource accepts a closure that will be called to retrieve the security information.
     *
     * @param  pure-Closure(): string  $securitySource
     * @return ShippoSDKBuilder
     */
    public function setSecuritySource(\Closure $securitySource): ShippoSDKBuilder
    {
        $this->sdkConfig->securitySource = $securitySource;

        return $this;
    }

    /**
     * setServerUrl is used to configure the server URL for the SDK, and optionally template any parameters in the URL.
     *
     * @param  string  $serverUrl
     * @param  array<string, string>  $params
     * @return ShippoSDKBuilder
     */
    public function setServerUrl(string $serverUrl, ?array $params = null): ShippoSDKBuilder
    {
        $this->sdkConfig->serverUrl = Utils\Utils::templateUrl($serverUrl, $params);

        return $this;
    }

    /**
     * setServer is used to configure the server for the SDK
     *
     * @param  int  $serverIdx
     * @return ShippoSDKBuilder
     */
    public function setServerIndex(int $serverIdx): ShippoSDKBuilder
    {
        $this->sdkConfig->serverIndex = $serverIdx;

        return $this;
    }
    /**
     * setSHIPPOAPIVERSION is used to configure the SHIPPO-API-VERSION parameter for the SDK.
     *
     * @param  string  $shippoApiVersion
     * @return ShippoSDKBuilder
     */
    public function setSHIPPOAPIVERSION(string $shippoApiVersion): ShippoSDKBuilder
    {
        if (! array_key_exists('header', $this->sdkConfig->globals['parameters'])) {
            $this->sdkConfig->globals['parameters']['header'] = [];
        }

        $this->sdkConfig->globals['parameters']['header']['shippoApiVersion'] = $shippoApiVersion;

        return $this;
    }

    /**
     * build is used to build the SDK with any of the configured options.
     *
     * @return ShippoSDK
     */
    public function build(): ShippoSDK
    {
        if ($this->sdkConfig->defaultClient === null) {
            $this->sdkConfig->defaultClient = new \GuzzleHttp\Client([
                'timeout' => 60,
            ]);
        }
        if ($this->sdkConfig->hasSecurity()) {
            $this->sdkConfig->securityClient = Utils\Utils::configureSecurityClient($this->sdkConfig->defaultClient, $this->sdkConfig->getSecurity());
        }
        if ($this->sdkConfig->securityClient === null) {
            $this->sdkConfig->securityClient = $this->sdkConfig->defaultClient;
        }

        return new ShippoSDK($this->sdkConfig);
    }
}