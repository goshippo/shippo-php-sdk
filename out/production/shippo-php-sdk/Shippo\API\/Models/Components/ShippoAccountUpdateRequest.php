<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


class ShippoAccountUpdateRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;

    #[\JMS\Serializer\Annotation\SerializedName('first_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $firstName;

    #[\JMS\Serializer\Annotation\SerializedName('last_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $lastName;

    #[\JMS\Serializer\Annotation\SerializedName('company_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $companyName;

    public function __construct()
    {
        $this->email = '';
        $this->firstName = '';
        $this->lastName = '';
        $this->companyName = '';
    }
}