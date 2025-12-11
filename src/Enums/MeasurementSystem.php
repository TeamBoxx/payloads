<?php

namespace Thestoragescanner\Payloads\Enums;

enum MeasurementSystem: string
{
    case METRIC = 'metric';
    case IMPERIAL = 'imperial';

    public static function fromCountry(string $country, ?string $override = null): static
    {
        return $override
            ? static::from($override)
            : match (strtolower($country)) {
                'gb',
                'us' => static::IMPERIAL,
                default => static::METRIC
            };
    }
}
