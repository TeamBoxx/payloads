<?php

namespace Thestoragescanner\Payloads\Enums\Facility;

enum FacilityLeadFormDurationEnum: string
{
    case LESS_THAN_ONE_MONTH = 'LESS_THAN_ONE_MONTH';
    case ONE_TO_TWO_MONTHS = 'ONE_TO_TWO_MONTHS';
    case TWO_TO_FOUR_MONTHS = 'TWO_TO_FOUR_MONTHS';
    case FOUR_TO_SIX_MONTHS = 'FOUR_TO_SIX_MONTHS';
    case SIX_PLUS_MONTHS = 'SIX_PLUS_MONTHS';
    case UNKNOWN = 'UNKNOWN';

    public function label(): string
    {
        return match ($this) {
            self::LESS_THAN_ONE_MONTH => 'Shorter than 1 month',
            self::ONE_TO_TWO_MONTHS => '1–2 months',
            self::TWO_TO_FOUR_MONTHS => '2–4 months',
            self::FOUR_TO_SIX_MONTHS => '4–6 months',
            self::SIX_PLUS_MONTHS => '6+ months',
            self::UNKNOWN => 'Don’t know how long',
        };
    }
}
