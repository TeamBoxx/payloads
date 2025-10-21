<?php

namespace Thestoragescanner\Payloads\Enums;

enum WebhookActionEnum: string
{
    case INSERT = 'insert';
    case UPDATE = 'update';
    case DELETE = 'delete';
}
