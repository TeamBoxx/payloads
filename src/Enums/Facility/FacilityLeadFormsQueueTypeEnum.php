<?php

namespace Thestoragescanner\Payloads\Enums\Facility;

enum FacilityLeadFormsQueueTypeEnum: string
{
    case USER_MAIL = 'mail_user';
    case REMINDER_MAIL_USER = 'reminder_mail_user';
    case MAIL_PROVIDER = 'mail_provider';
    case REMINDER_MAIL_PROVIDER_1 = 'reminder_mail_provider_1';
    case REMINDER_MAIL_PROVIDER_2 = 'reminder_mail_provider_2';
}
