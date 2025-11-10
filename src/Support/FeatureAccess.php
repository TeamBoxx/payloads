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
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::PROVIDER_WEBSITE_LINK->value => [
            SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::FACILITY_EDIT->value => [
            SubscriptionEnum::FREE,
            SubscriptionEnum::PAY_PER_CONVERSION,
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::FACILITY_OPENING_HOURS->value => [
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::FACILITY_SPECS->value => [
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::FACILITY_PHOTOS->value => [
            SubscriptionEnum::BASIC,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::FACILITY_PHONE_NUMBER->value => [
            SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::FACILITY_LEAD_FORM->value => [
            SubscriptionEnum::FREE,
            SubscriptionEnum::SPONSORED,
            SubscriptionEnum::PAY_PER_CONVERSION,
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::FACILITY_DESCRIPTION->value => [
            SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::UNIT_EDIT->value => [
            SubscriptionEnum::PAY_PER_CONVERSION,
            SubscriptionEnum::PAY_PER_LEAD,
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::UNIT_CLICKABLE_LINK->value => [
            SubscriptionEnum::PAY_PER_LEAD_AND_CLICK,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::UNIT_PROMOTIONS->value => [
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::UPLIFT_SEARCH->value => [
            SubscriptionEnum::PAY_PER_CONVERSION,
            SubscriptionEnum::BASIC,
            SubscriptionEnum::RECOMMENDED,
            SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::GOOGLE_REVIEWS->value => [
            SubscriptionEnum::PREMIUM,
        ],

        FeatureEnum::PARTNERS_PROMOTIONS->value => [
            SubscriptionEnum::PARTNERSHIP,
            SubscriptionEnum::SPONSORED,
        ],

        FeatureEnum::ADS_DISABLED->value => [
            SubscriptionEnum::FREE,
        ]
    ];

    protected const array EXCLUDED_ROLES_MVP_ADMIN = [
        SubscriptionEnum::PARTNERSHIP,
        SubscriptionEnum::SPONSORED,
        SubscriptionEnum::PAY_PER_CONVERSION,
    ];
}
