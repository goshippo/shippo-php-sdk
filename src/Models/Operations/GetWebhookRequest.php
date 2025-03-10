<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Operations;

use Shippo\API\Utils\SpeakeasyMetadata;
class GetWebhookRequest
{
    /**
     * Object ID of the webhook to retrieve
     *
     * @var string $webhookId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=webhookId')]
    public string $webhookId;

    /**
     * @param  string  $webhookId
     * @phpstan-pure
     */
    public function __construct(string $webhookId)
    {
        $this->webhookId = $webhookId;
    }
}