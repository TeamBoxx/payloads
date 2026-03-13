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
            static::STUDENT => [0, 2],
            static::SMALL => [2, 5],
            static::MEDIUM => [5, 10],
            static::LARGE => [10, null]
        };
    }
}
