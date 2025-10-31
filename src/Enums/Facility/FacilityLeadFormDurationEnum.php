<?php

namespace Thestoragescanner\Payloads\Enums\Facility;

enum FacilityLeadFormDurationEnum: string
{
    case LESS_THAN_ONE_MONTH = 'less_than_one_month';
    case ONE_TO_TWO_MONTHS = 'one_to_two_months';
    case TWO_TO_FOUR_MONTHS = 'two_to_four_months';
    case FOUR_TO_SIX_MONTHS = 'four_to_six_months';
    case SIX_PLUS_MONTHS = 'six_plus_months';
    case UNKNOWN = 'unknown';

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
