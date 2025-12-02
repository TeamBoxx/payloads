<?php

namespace Thestoragescanner\Payloads\Enums;

enum ClickTypeEnum: string
{
    case INBOUND = 'inbound'; // Redirects within the website
    case OUTBOUND = 'outbound'; // Redirects to links outside the website
    case SHOW_CONTACT_INFO = 'show_contact_info'; // Reveal phone number or email
}

