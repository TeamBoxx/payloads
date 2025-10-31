<?php

namespace Thestoragescanner\Payloads\Enums\Facility;

enum FacilityLeadFormReasonEnum: string
{
    case MOVE = 'move';
    case RENOVATION = 'renovation';
    case DIVORCE = 'divorce';
    case EXTRA_SPACE = 'extra_space';
    case STUDIES = 'studies';
    case OTHER = 'other';

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
