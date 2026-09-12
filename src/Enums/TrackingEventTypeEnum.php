<?php

namespace Thestoragescanner\Payloads\Enums;

enum TrackingEventTypeEnum: string
{
    case PAGEVIEW = 'pageview';
    case BUTTON_CLICK = 'button-click';
}
