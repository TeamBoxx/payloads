<?php

namespace Thestoragescanner\Payloads\Support;

use Thestoragescanner\Payloads\Enums\SubscriptionEnum;
use Thestoragescanner\Payloads\Enums\FeatureEnum;

class FeatureAccess
{
    protected const array ACCESS_MATRIX = [
        FeatureEnum::PROVIDER_EDIT->value => [
            SubscriptionEnum::FREE,
            SubscriptionEnum::PAY_PER_CONVERSION,
            SubscriptionEnum::PAY_PER_CLICK,
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::BASIC_PPC,
            SubscriptionEnum::BASIC_PPL,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            SubscriptionEnum::RECOMMENDED_PPL,
            // SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::PROVIDER_WEBSITE_LINK->value => [
            SubscriptionEnum::PAY_PER_CONVERSION,
            SubscriptionEnum::PAY_PER_CLICK,
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::BASIC_PPC,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            // SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::FACILITY_EDIT->value => [
            SubscriptionEnum::FREE,
            SubscriptionEnum::PAY_PER_CONVERSION,
            SubscriptionEnum::PAY_PER_CLICK,
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::BASIC_PPC,
            SubscriptionEnum::BASIC_PPL,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            SubscriptionEnum::RECOMMENDED_PPL,
            // SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::FACILITY_OPENING_HOURS->value => [
            SubscriptionEnum::FREE,
            SubscriptionEnum::PAY_PER_CONVERSION,
            SubscriptionEnum::PAY_PER_CLICK,
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::BASIC_PPC,
            SubscriptionEnum::BASIC_PPL,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            SubscriptionEnum::RECOMMENDED_PPL,
            // SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::FACILITY_SPECS->value => [
            SubscriptionEnum::FREE,
            SubscriptionEnum::PAY_PER_CONVERSION,
            SubscriptionEnum::PAY_PER_CLICK,
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::BASIC_PPC,
            SubscriptionEnum::BASIC_PPL,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            SubscriptionEnum::RECOMMENDED_PPL,
            // SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::FACILITY_PHOTOS->value => [
            SubscriptionEnum::FREE,
            SubscriptionEnum::PAY_PER_CONVERSION,
            SubscriptionEnum::PAY_PER_CLICK,
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::BASIC_PPC,
            SubscriptionEnum::BASIC_PPL,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            SubscriptionEnum::RECOMMENDED_PPL,
            // SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::FACILITY_PHONE_NUMBER->value => [
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::BASIC_PPC,
            SubscriptionEnum::BASIC_PPL,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            SubscriptionEnum::RECOMMENDED_PPL,
            // SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::FACILITY_LEAD_FORM->value => [
            SubscriptionEnum::SPONSORED,
            SubscriptionEnum::PAY_PER_CONVERSION,
            SubscriptionEnum::PAY_PER_CLICK,
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::BASIC_PPC,
            SubscriptionEnum::BASIC_PPL,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            SubscriptionEnum::RECOMMENDED_PPL,
            // SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::FACILITY_DESCRIPTION->value => [
            // SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::UNIT_EDIT->value => [
            SubscriptionEnum::FREE,
            SubscriptionEnum::PAY_PER_CONVERSION,
            SubscriptionEnum::PAY_PER_CLICK,
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::BASIC_PPC,
            SubscriptionEnum::BASIC_PPL,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            SubscriptionEnum::RECOMMENDED_PPL,
            // SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::UNIT_CLICKABLE_LINK->value => [
            SubscriptionEnum::PAY_PER_CLICK,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::BASIC_PPC,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            // SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::UNIT_PROMOTIONS->value => [
            SubscriptionEnum::FREE,
            SubscriptionEnum::PAY_PER_CONVERSION,
            SubscriptionEnum::PAY_PER_CLICK,
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::BASIC_PPC,
            SubscriptionEnum::BASIC_PPL,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            SubscriptionEnum::RECOMMENDED_PPL,
            // SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::UPLIFT_SEARCH->value => [
            SubscriptionEnum::PAY_PER_CONVERSION,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::BASIC_PPC,
            SubscriptionEnum::BASIC_PPL,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            SubscriptionEnum::RECOMMENDED_PPL,
            // SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::GOOGLE_REVIEWS->value => [
            // SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::PARTNERS_PROMOTIONS->value => [
            SubscriptionEnum::PARTNERSHIP,
            SubscriptionEnum::SPONSORED,
        ],

        FeatureEnum::ADS_DISABLED->value => [
            SubscriptionEnum::FREE,
        ],

        FeatureEnum::DATA_ANALYTICS_COMPETITORS->value => [
            SubscriptionEnum::BASIC,
            SubscriptionEnum::BASIC_PPC,
            SubscriptionEnum::BASIC_PPL,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            SubscriptionEnum::RECOMMENDED_PPL,
        ],

        FeatureEnum::DATA_ANALYTICS_MARKET_ANALYSES->value => [
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            SubscriptionEnum::RECOMMENDED_PPL,
        ],

        FeatureEnum::DATA_ANALYTICS_PRICING_RECOMMENDATIONS->value => [
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::RECOMMENDED_PPC,
            SubscriptionEnum::RECOMMENDED_PPL,
        ],
    ];

    protected const array EXCLUDED_ROLES_MVP_ADMIN = [
        SubscriptionEnum::PARTNERSHIP,
        SubscriptionEnum::SPONSORED,
        SubscriptionEnum::PAY_PER_CONVERSION,
    ];
}
