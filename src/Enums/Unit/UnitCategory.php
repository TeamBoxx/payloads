<?php

namespace Thestoragescanner\Payloads\Enums\Unit;

enum UnitCategory: string
{
    case SELF_STORAGE = 'self_storage';
    case CONTAINER_STORAGE = 'container_storage';
    case GARAGEBOX = 'garagebox';
    case PICKUP_AND_DELIVERY = 'pickup_and_delivery';
}
