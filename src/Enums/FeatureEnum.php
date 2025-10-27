<?php

namespace Thestoragescanner\Payloads\Enums;

enum FeatureEnum: string
{
    case PROVIDER_EDIT = 'provider_edit';
    case PROVIDER_WEBSITE_LINK = 'provider_website_link';
    case FACILITY_EDIT = 'facility_edit';
    case FACILITY_OPENING_HOURS = 'facility_opening_hours';
    case FACILITY_SPECS = 'facility_specs';
    case FACILITY_PHOTOS = 'facility_photos';
    case FACILITY_PHONE_NUMBER = 'facility_phone_number';
    case FACILITY_LEAD_FORM = 'facility_lead_form';
    case UNIT_EDIT = 'unit_edit';
    case UNIT_CLICKABLE_LINK = 'unit_clickable_link';
    case UNIT_PROMOTIONS = 'unit_promotions';
    case UPLIFT_SEARCH = 'uplift_search';

    // TODO: after MVP implement
    case FACILITY_DESCRIPTION = 'facility_description';
    case PARTNERS_PROMOTIONS = 'partners_promotions';
    case GOOGLE_REVIEWS = 'google_reviews';
    case ADS_DISABLED = 'ads_disabled';

    public function label(): string
    {
        return match ($this) {
            self::PROVIDER_EDIT => 'Provider Details Editable',
            self::PROVIDER_WEBSITE_LINK => 'Provider Website Link',
            self::FACILITY_EDIT => 'Facility Details Editable',
            self::FACILITY_OPENING_HOURS => 'Facility Opening Hours',
            self::FACILITY_SPECS => 'Facility Specs Editable',
            self::FACILITY_PHOTOS => 'Facility Photos',
            self::FACILITY_PHONE_NUMBER => 'Facility Phone Number',
            self::FACILITY_LEAD_FORM => 'Facility Lead Form',
            self::UNIT_EDIT => 'Unit Details Editable',
            self::UNIT_CLICKABLE_LINK => 'Unit Clickable to Website',
            self::UNIT_PROMOTIONS => 'Unit Promotions',
            self::UPLIFT_SEARCH => 'Uplift Search',

                // TODO: after MVP implement
            self::FACILITY_DESCRIPTION => 'Facility Description',
            self::PARTNERS_PROMOTIONS => 'Partners Promotions',
            self::GOOGLE_REVIEWS => 'Google Reviews Optionality',
            self::ADS_DISABLED => 'Disable Ads',
        };
    }
}
