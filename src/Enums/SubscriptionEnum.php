<?php

namespace Thestoragescanner\Payloads\Enums;

enum SubscriptionEnum: string
{
    // (Currently) unused subscriptions
    case FREE = 'free';
    case PARTNERSHIP = 'partnership';
    case SPONSORED = 'sponsored';
    case PAY_PER_CONVERSION = 'pay_per_conversion';


    // Active subscriptions
    case PAY_PER_CLICK = 'pay_per_click';
    case PAY_PER_LEAD = 'pay_per_lead';
    case PAY_PER_LEAD_AND_CLICK = 'pay_per_lead_and_click';
    case BASIC = 'basic';
    case BASIC_PPC = 'basic_ppc';
    case BASIC_PPL = 'basic_ppl';
    case RECOMMENDED = 'recommended';
    case RECOMMENDED_PPC = 'recommended_ppc';
    case RECOMMENDED_PPL = 'recommended_ppl';


    // Removed subscriptions
    // case PREMIUM = 'premium';

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
            self::PAY_PER_CONVERSION => 'Pay-Per-Conversion (PPC)',

            self::PAY_PER_CLICK => 'Pay-Per-Click (PPC)',
            self::PAY_PER_LEAD => 'Pay-Per-Lead (PPL)',
            self::PAY_PER_LEAD_AND_CLICK => 'Pay-Per-Lead+Click (PPLC)',
            self::BASIC => 'Basic (+ PPLC)',
            self::BASIC_PPC => 'Basic (+ PPC)',
            self::BASIC_PPL => 'Basic (+ PPL)',
            self::RECOMMENDED => 'Recommended (+ PPLC)',
            self::RECOMMENDED_PPC => 'Recommended (+ PPC)',
            self::RECOMMENDED_PPL => 'Recommended (+ PPL)',

        // self::PREMIUM => 'Premium (+ PPLC)',
        };
    }

    public static function checkoutActiveCases(): array
    {
        return [
            self::PAY_PER_CLICK,
            self::PAY_PER_LEAD,
            self::PAY_PER_LEAD_AND_CLICK,
            self::BASIC,
            self::BASIC_PPC,
            self::BASIC_PPL,
            self::RECOMMENDED,
            self::RECOMMENDED_PPC,
            self::RECOMMENDED_PPL,
            // self::PREMIUM,
        ];
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
