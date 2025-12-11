<?php

namespace Thestoragescanner\Payloads\Enums;

enum SortStrategy: string
{
    case DEVIATION = 'deviation';
    case PRICE_LOW_TO_HIGH = 'price_lth';
    case PRICE_HIGH_TO_LOW = 'price_htl';
    case SIZE_LOW_TO_HIGH = 'size_lth';
    case SIZE_HIGH_TO_LOW = 'size_htl';
    case DISTANCE_LOW_TO_HIGH = 'distance_lth';
    case DISTANCE_HIGH_TO_LOW = 'distance_htl';
}
