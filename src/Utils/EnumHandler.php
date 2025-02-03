<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Utils;

use Speakeasy\Serializer\Context;
use Speakeasy\Serializer\Exception\NotAcceptableException;
use Speakeasy\Serializer\GraphNavigator;
use Speakeasy\Serializer\Handler\SubscribingHandlerInterface;
use Speakeasy\Serializer\JsonDeserializationVisitor;
use Speakeasy\Serializer\JsonSerializationVisitor;

class EnumHandler implements SubscribingHandlerInterface
{
    /** @phpstan-ignore-next-line */
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'enum',
                'method' => 'serializeEnumToJson',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => 'enum',
                'method' => 'deserializeEnumFromJson',
            ],
        ];
    }

    /** @phpstan-ignore-next-line */
    public function serializeEnumToJson(JsonSerializationVisitor $visitor, \BackedEnum $data, array $type, Context $context): string|int
    {
        return $data->value;
    }

    /** @phpstan-ignore-next-line */
    public function deserializeEnumFromJson(JsonDeserializationVisitor $visitor, mixed $data, array $type, Context $context): mixed
    {
        $type = $type['params'][0]['name'] ?? null;
        if ($type === null || ! is_a($type, \BackedEnum::class, true)) {
            throw new \LogicException();
        }

        try {
            return $type::from($data);
        } catch (\ValueError $e) {
            throw new NotAcceptableException($e->getMessage());
        }
    }
}
