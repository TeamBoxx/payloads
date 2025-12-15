<?php

namespace Thestoragescanner\Payloads\Enums;

enum MeasurementSize: string
{
    case METER_OR_FEET = 'meter-or-feet';
    case SQUARED = 'squared';
    case CUBIC = 'cubic';
    case KILOMETER_OR_MILE = 'kilometer-or-mile';

    public static function fromDimension(Dimension $dimension): static
    {
        return match ($dimension) {
            Dimension::SQUARED => static::SQUARED,
            Dimension::CUBIC => static::CUBIC,
        };
    }
}
