<?php

namespace Thestoragescanner\Payloads\Enums\Unit;

enum UnitType: string
{
    case LOCKER = 'locker';
    case SELF_STORAGE = 'self_storage';
    case CONTAINER_STORAGE = 'container_storage';
    case GARAGEBOX = 'garagebox';
}
