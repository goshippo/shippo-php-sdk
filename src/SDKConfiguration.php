<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API;
use Shippo\API\Utils\Retry\RetryConfig;

class SDKConfiguration
{
    public ?\GuzzleHttp\ClientInterface $client = null;

    public Hooks\SDKHooks $hooks;
    /** @var ?pure-Closure(): Models\Components\Security */
    public ?\Closure $securitySource = null;
    public string $serverUrl = '';

    public int $serverIndex = 0;

    public string $language = 'php';

    public string $openapiDocVersion = '2018-02-08';

    public string $sdkVersion = '3.0.0-alpha';

    public string $genVersion = '2.545.4';

    public string $userAgent = 'speakeasy-sdk/php 3.0.0-alpha 2.545.4 2018-02-08 shippo/shippo-php';
    /** @var array<string, array<string, array<string, mixed>>> */
    public ?array $globals = [
        'parameters' => [],
    ];

    public ?RetryConfig $retryConfig = null;

    public function __construct()
    {
        $this->hooks = new Hooks\SDKHooks();
    }

    public function getServerUrl(): string
    {

        if ($this->serverUrl !== '') {
            return $this->serverUrl;
        }

        if (isset(Shippo::SERVERS[$this->serverIndex])) {
            return Shippo::SERVERS[$this->serverIndex];
        } else {
            throw new \OutOfBoundsException('Server index '.$this->serverIndex.' is out of bounds');
        }
    }
    public function hasSecurity(): bool
    {
        return $this->securitySource !== null;
    }

    public function getSecurity(): ?Models\Components\Security
    {
        return $this->securitySource->call($this);
    }

    /**
     * @return Utils\ServerDetails
     */
    public function getServerDetails(): Utils\ServerDetails
    {
        if ($this->serverUrl !== '') {
            return new Utils\ServerDetails(rtrim($this->serverUrl, '/'), []);
        }
        if ($this->serverIndex === null) {
            $this->serverIndex = 0;
        }

        return new Utils\ServerDetails(Shippo::SERVERS[$this->serverIndex], []);

    }

    public function getTemplatedServerUrl(): string
    {
        if ($this->serverUrl) {
            return Utils\Utils::templateUrl($this->serverUrl.trim('/'), []);
        }

        return Utils\Utils::templateUrl($this->getServerUrl(), []);
    }

    public function initHooks(\GuzzleHttp\ClientInterface $client): \GuzzleHttp\ClientInterface
    {
        $preHooksUrl = $this->getTemplatedServerUrl();
        $ret = $this->hooks->sdkInit($preHooksUrl, $client);
        if ($preHooksUrl != $ret->url) {
            $this->serverUrl = $ret->url;
        }

        return $ret->client;
    }
}
