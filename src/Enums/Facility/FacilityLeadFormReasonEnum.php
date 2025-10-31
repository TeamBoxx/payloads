<?php

namespace Thestoragescanner\Payloads\Enums\Facility;

enum FacilityLeadFormReasonEnum: string
{
    case MOVE = 'MOVE';
    case RENOVATION = 'RENOVATION';
    case DIVORCE = 'DIVORCE';
    case EXTRA_SPACE = 'EXTRA_SPACE';
    case STUDIES = 'STUDIES';
    case OTHER = 'OTHER';

    public function label(): string
    {
        return match ($this) {
            self::MOVE => 'Move',
            self::RENOVATION => 'Renovation',
            self::DIVORCE => 'Divorce',
            self::EXTRA_SPACE => 'Need extra space',
            self::STUDIES => 'Studies (abroad)',
            self::OTHER => 'Other',
        };
    }
}
