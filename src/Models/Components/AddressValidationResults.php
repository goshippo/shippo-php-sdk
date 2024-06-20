<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


/**
 * AddressValidationResults - Object that contains information regarding if an address had been validated or not. Also contains any messages 
 *
 * generated during validation. Children keys are <code>is_valid</code>(boolean) and <code>messages</code>(array).
 */
class AddressValidationResults
{
    #[\JMS\Serializer\Annotation\SerializedName('is_valid')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isValid = null;

    /**
     * $messages
     *
     * @var ?array<\Shippo\API\Models\Components\AddressValidationResultsMessage> $messages
     */
    #[\JMS\Serializer\Annotation\SerializedName('messages')]
    #[\JMS\Serializer\Annotation\Type('array<Shippo\API\Models\Components\AddressValidationResultsMessage>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $messages = null;

    public function __construct()
    {
        $this->isValid = null;
        $this->messages = null;
    }
}