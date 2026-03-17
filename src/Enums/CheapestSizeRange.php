<?php

namespace Thestoragescanner\Payloads\Enums;

enum CheapestSizeRange: string
{
    case STUDENT = 'CHEAPEST_SIZE_RANGE_STUDENT';
    case SMALL = 'CHEAPEST_SIZE_RANGE_SMALL';
    case MEDIUM = 'CHEAPEST_SIZE_RANGE_MEDIUM';
    case LARGE = 'CHEAPEST_SIZE_RANGE_LARGE';

    public function getRange(): array
    {
        return match ($this) {
            self::STUDENT => [0, 2],
            self::SMALL => [2, 5],
            self::MEDIUM => [5, 10],
            self::LARGE => [10, null]
        };
    }

    public function getImperialRange(): array
    {
        return match ($this) {
            self::STUDENT => [0, 25],
            self::SMALL => [25, 50],
            self::MEDIUM => [50, 100],
            self::LARGE => [100, null]
        };
    }
}
