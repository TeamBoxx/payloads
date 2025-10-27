<?php

namespace Thestoragescanner\Payloads\Enums;

enum SubscriptionEnum: string
{
    case FREE = 'free';
    case PARTNERSHIP = 'partnership';
    case SPONSORED = 'sponsored';
    case PAY_PER_CONVERSION = 'pay_per_conversion';
    case PAY_PER_LEAD = 'pay_per_lead';
    case PAY_PER_LEAD_AND_CLICK = 'pay_per_lead_and_click';
    case BASIC = 'basic';
    case RECOMMENDED = 'recommended';
    case PREMIUM = 'premium';

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }

    public function label(): string
    {
        return match ($this) {
            self::FREE => 'Free',
            self::PARTNERSHIP => 'Partnership',
            self::SPONSORED => 'Sponsored',
            self::PAY_PER_CONVERSION => 'Pay per Conversion',
            self::PAY_PER_LEAD => 'Pay per Lead',
            self::PAY_PER_LEAD_AND_CLICK => 'Pay per Lead & Pay per Click',
            self::BASIC => 'Basic',
            self::RECOMMENDED => 'Recommended',
            self::PREMIUM => 'Premium',
        };
    }

    public static function options(): array
    {
        $cases = [];

        foreach (self::cases() as $case) {
            $cases[$case->value] = $case->label();
        }

        return $cases;
    }
}
