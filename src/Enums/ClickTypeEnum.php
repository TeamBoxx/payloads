<?php

namespace Thestoragescanner\Payloads\Enums;

enum ClickTypeEnum: string
{
    case OUTBOUND = 'outbound';
    case SHOW_PHONE = 'show_phone';
    case SHOW_EMAIL = 'show_email';
}
