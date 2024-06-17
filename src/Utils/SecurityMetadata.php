<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Utils;

class SecurityMetadata
{
    private function __construct(
        public bool $option,
        public bool $scheme,
        public string $name,
        public string $type,
        public string $subtype,
    ) {
    }

    public static function parse(string $metadata): ?SecurityMetadata
    {
        if (! str_starts_with($metadata, 'security:')) {
            return null;
        }

        $metadata = removePrefix($metadata, 'security:');

        $option = false;
        $scheme = false;
        $name = '';
        $type = '';
        $subtype = '';

        $options = explode(',', $metadata);

        foreach ($options as $opt) {
            $parts = explode('=', $opt);
            if (count($parts) < 1 || count($parts) > 2) { /** @phpstan-ignore-line */
                continue;
            }

            match ($parts[0]) {
                'name' => $name = $parts[1],
                'type' => $type = $parts[1],
                'subtype' => $subtype = $parts[1],
                'option' => $option = true,
                'scheme' => $scheme = true,
                default => throw new \RuntimeException('Invalid option passed'),
            };
        }

        return new SecurityMetadata(
            option: $option,
            scheme: $scheme,
            name: $name,
            type: $type,
            subtype: $subtype,
        );
    }
}
