<?php

namespace Thestoragescanner\Payloads\Enums\Facility;

enum QuickRequestSizeRangeEnum: string
{
    case XS = 'XS';
    case S = 'S';
    case M = 'M';
    case L = 'L';
    case XL = 'XL';
    case XXL = 'XXL';
    case XXXL = 'XXXL';

    public function label(bool $isMetric = true): string
    {
        return $isMetric ? $this->metricRange() : $this->imperialRange();
    }

    public function metricRange(): string
    {
        return match($this) {
            self::XS => '0-5',
            self::S => '5-10',
            self::M => '10-20',
            self::L => '20-40',
            self::XL => '40-60',
            self::XXL => '60-100',
            self::XXXL => '100+',
        };
    }

    public function imperialRange(): string
    {
        return match($this) {
            self::XS => '0-175',
            self::S => '175-350',
            self::M => '350-700',
            self::L => '700-1400',
            self::XL => '1400-2100',
            self::XXL => '2100-3500',
            self::XXXL => '3500+',
        };
    }

    public function mapToSquareMeterEnum(): FacilityLeadFormSizeEnum
    {
        return match($this) {
            self::XS => FacilityLeadFormSizeEnum::SIZE_2,                       // 0-5 m3 is roughly a small locker/unit
            self::S => FacilityLeadFormSizeEnum::SIZE_3,                        // 5-10 m3 fits about 3 m2
            self::M => FacilityLeadFormSizeEnum::SIZE_6,                        // 10-20 m3 is a standard small room
            self::L => FacilityLeadFormSizeEnum::SIZE_10,                       // 20-40 m3 is roughly 10 m2
            self::XL => FacilityLeadFormSizeEnum::SIZE_15_TO_20,                // 40-60 m3 is a large unit
            self::XXL, self::XXXL => FacilityLeadFormSizeEnum::SIZE_25_PLUS,    // 60-100 m3 exceeds 25 m2 and 100+ m3 definitely 25+ m2
        };
    }
}
