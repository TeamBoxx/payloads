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
            self::SIZE_1   => '10 ft²',
            self::SIZE_2   => '20 ft²',
            self::SIZE_3   => '30 ft²',
            self::SIZE_4   => '40 ft²',
            self::SIZE_5   => '50 ft²',
            self::SIZE_6   => '60 ft²',
            self::SIZE_7   => '75 ft²',
            self::SIZE_8   => '85 ft²',
            self::SIZE_9   => '100 ft²',
            self::SIZE_10  => '110 ft²',
            self::SIZE_11  => '120 ft²',
            self::SIZE_12  => '130 ft²',
            self::SIZE_13  => '140 ft²',
            self::SIZE_14  => '150 ft²',
            self::SIZE_15  => '160 ft²',
            self::SIZE_15_TO_20 => '160–215 ft²',
            self::SIZE_20_TO_25 => '215–270 ft²',
            self::SIZE_25_PLUS  => '270+ ft²',
        };
    }
}
