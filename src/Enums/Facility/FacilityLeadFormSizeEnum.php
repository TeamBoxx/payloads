<?php

namespace Thestoragescanner\Payloads\Enums\Facility;

enum FacilityLeadFormSizeEnum: string
{
    case SIZE_1 = '1';
    case SIZE_2 = '2';
    case SIZE_3 = '3';
    case SIZE_4 = '4';
    case SIZE_5 = '5';
    case SIZE_6 = '6';
    case SIZE_7 = '7';
    case SIZE_8 = '8';
    case SIZE_9 = '9';
    case SIZE_10 = '10';
    case SIZE_11 = '11';
    case SIZE_12 = '12';
    case SIZE_13 = '13';
    case SIZE_14 = '14';
    case SIZE_15 = '15';
    case SIZE_15_TO_20 = '15_20';
    case SIZE_20_TO_25 = '20_25';
    case SIZE_25_PLUS = '25_plus';

    /**
     * Automatically choose the correct label based on facility country.
     */
    public function label(?string $countryCode = null): string
    {
        return $countryCode === 'gb' ? $this->labelImperial() : $this->labelMetric();
    }

    public function labelMetric(): string
    {
        return match ($this) {
            self::SIZE_1   => '1 m²',
            self::SIZE_2   => '2 m²',
            self::SIZE_3   => '3 m²',
            self::SIZE_4   => '4 m²',
            self::SIZE_5   => '5 m²',
            self::SIZE_6   => '6 m²',
            self::SIZE_7   => '7 m²',
            self::SIZE_8   => '8 m²',
            self::SIZE_9   => '9 m²',
            self::SIZE_10  => '10 m²',
            self::SIZE_11  => '11 m²',
            self::SIZE_12  => '12 m²',
            self::SIZE_13  => '13 m²',
            self::SIZE_14  => '14 m²',
            self::SIZE_15  => '15 m²',
            self::SIZE_15_TO_20 => '15–20 m²',
            self::SIZE_20_TO_25 => '20–25 m²',
            self::SIZE_25_PLUS  => '25+ m²',
        };
    }

    public function labelImperial(): string
    {
        return match ($this) {
            self::SIZE_1   => '11 ft²',
            self::SIZE_2   => '22 ft²',
            self::SIZE_3   => '32 ft²',
            self::SIZE_4   => '43 ft²',
            self::SIZE_5   => '54 ft²',
            self::SIZE_6   => '65 ft²',
            self::SIZE_7   => '75 ft²',
            self::SIZE_8   => '86 ft²',
            self::SIZE_9   => '97 ft²',
            self::SIZE_10  => '108 ft²',
            self::SIZE_11  => '118 ft²',
            self::SIZE_12  => '129 ft²',
            self::SIZE_13  => '140 ft²',
            self::SIZE_14  => '151 ft²',
            self::SIZE_15  => '161 ft²',
            self::SIZE_15_TO_20 => '161–215 ft²',
            self::SIZE_20_TO_25 => '215–269 ft²',
            self::SIZE_25_PLUS  => '269+ ft²',
        };
    }
}
