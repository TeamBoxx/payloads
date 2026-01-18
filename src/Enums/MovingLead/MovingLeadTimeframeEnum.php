<?php

namespace App\Enums\MovingLead;

enum MovingLeadTimeframeEnum: string
{
    case ASAP = 'asap';
    case WITHIN_14_DAYS = 'within_14_days';
    case WITHIN_A_MONTH = 'within_a_month';
    case WITHIN_A_QUARTER = 'within_a_quarter';
}
