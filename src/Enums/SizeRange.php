<?php

namespace Thestoragescanner\Payloads\Enums;

enum SizeRange: string
{
    case LOCKER = 'SIZE_RANGE_LOCKER';
    case SMALL = 'SIZE_RANGE_SMALL';
    case MEDIUM = 'SIZE_RANGE_MEDIUM';
    case LARGE = 'SIZE_RANGE_LARGE';

    public function getRange(): array
    {
        return match ($this) {
            self::LOCKER => [0, 2],
            self::SMALL => [2, 5],
            self::MEDIUM => [5, 10],
            self::LARGE => [10, null]
        };
    }

    public function getImperialRange(): array
    {
        return match ($this) {
            self::LOCKER => [0, 25],
            self::SMALL => [25, 50],
            self::MEDIUM => [50, 100],
            self::LARGE => [100, null]
        };
    }
}
