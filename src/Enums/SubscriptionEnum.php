<?php

namespace Thestoragescanner\Payloads\Enums;

enum SubscriptionEnum: string
{
    // (Currently) unused subscriptions
    case FREE = 'free';
    case PARTNERSHIP = 'partnership';
    case SPONSORED = 'sponsored';
    case PAY_PER_CONVERSION = 'pay_per_conversion';


    // Deprecated old subscriptions
    case PAY_PER_CLICK = 'pay_per_click';
    case PAY_PER_LEAD = 'pay_per_lead';
    case PAY_PER_LEAD_AND_CLICK = 'pay_per_lead_and_click';
    case BASIC = 'basic_pplc';
    case BASIC_PPC = 'basic_ppc';
    case BASIC_PPL = 'basic_ppl';
    case RECOMMENDED = 'recommended_pplc';
    case RECOMMENDED_PPC = 'recommended_ppc';
    case RECOMMENDED_PPL = 'recommended_ppl';

    // Active subscriptions
    case PREMIUM = 'premium';
    case PLATINUM = 'platinum';
    case DATA_PRODUCTS = 'data_products';
    case PREMIUM_AND_DATA = 'premium_and_data';
    case PLATINUM_AND_DATA = 'platinum_with_data';


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

            self::PREMIUM => 'Premium Listing',
            self::PLATINUM => 'Platinum Listing',
            self::DATA_PRODUCTS => 'Data Products',
            self::PREMIUM_AND_DATA => 'Premium Listing + Data Products',
            self::PLATINUM_AND_DATA => 'Platinum Listing + Data Products',

        // self::PREMIUM => 'Premium (+ PPLC)',
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
