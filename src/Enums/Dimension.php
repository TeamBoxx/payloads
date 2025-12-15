<?php

namespace Thestoragescanner\Payloads\Enums;

enum Dimension: string
{
    case SQUARED = 'squared';
    case CUBIC = 'cubic';

    public static function fromString(string $string): static
    {
        return match (strtolower($string)) {
            'm2', 'f2', 'ft2', 'sqft' => self::SQUARED,
            'm3', 'f3', 'ft3', 'cuft' => self::CUBIC,
            default => self::SQUARED
        };
    }
}
