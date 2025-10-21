<?php

namespace Thestoragescanner\Payloads\Enums;

enum WebhookEntityEnum: string
{
    case PROVIDER = 'provider';
    case FACILITY = 'facility';
    case UNIT = 'unit';
}
