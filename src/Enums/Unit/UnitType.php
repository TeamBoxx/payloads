<?php

namespace Thestoragescanner\Payloads\Enums\Unit;

enum UnitType: string
{
    case LOCKER = 'locker';
    case SELF_STORAGE = 'self_storage';
    case CONTAINER_STORAGE = 'container_storage';
    case GARAGEBOX = 'garagebox';

    public function bootstrapIcon(): string
    {
        return match ($this) {
            self::LOCKER => 'bi-lock',
            self::SELF_STORAGE => 'bi-box-seam',
            self::CONTAINER_STORAGE => 'bi-truck',
            self::GARAGEBOX => 'bi-house-door',
        };
    }
}
