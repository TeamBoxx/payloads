<?php

namespace Thestoragescanner\Payloads\Enums;

enum PromotionEnum: string
{
    case PROMO_FIRST_WEEK_FREE = 'PROMO_FIRST_WEEK_FREE';
    case PROMO_FIRST_MONTH_FREE = 'PROMO_FIRST_MONTH_FREE';
    case PROMO_FIRST_SECOND_MONTH_FREE = 'PROMO_FIRST_SECOND_MONTH_FREE';
    case PROMO_50_PERCENT_OFF_FIRST_MONTH = 'PROMO_50_PERCENT_OFF_FIRST_MONTH';
    case PROMO_50_PERCENT_OFF_FIRST_2_MONTHS = 'PROMO_50_PERCENT_OFF_FIRST_2_MONTHS';
    case PROMO_50_PERCENT_OFF_FIRST_3_MONTHS = 'PROMO_50_PERCENT_OFF_FIRST_3_MONTHS';
    case PROMO_50_PERCENT_OFF_FIRST_4_WEEKS = 'PROMO_50_PERCENT_OFF_FIRST_4_WEEKS';
    case PROMO_50_PERCENT_OFF_FIRST_8_WEEKS = 'PROMO_50_PERCENT_OFF_FIRST_8_WEEKS';
    case PROMO_50_PERCENT_OFF_FIRST_12_WEEKS = 'PROMO_50_PERCENT_OFF_FIRST_12_WEEKS';
    case PROMO_33_PERCENT_OFF_FIRST_MONTH = 'PROMO_33_PERCENT_OFF_FIRST_MONTH';
    case PROMO_33_PERCENT_OFF_FIRST_2_MONTHS = 'PROMO_33_PERCENT_OFF_FIRST_2_MONTHS';
    case PROMO_33_PERCENT_OFF_FIRST_3_MONTHS = 'PROMO_33_PERCENT_OFF_FIRST_3_MONTHS';
    case PROMO_33_PERCENT_OFF_FIRST_4_WEEKS = 'PROMO_33_PERCENT_OFF_FIRST_4_WEEKS';
    case PROMO_33_PERCENT_OFF_FIRST_8_WEEKS = 'PROMO_33_PERCENT_OFF_FIRST_8_WEEKS';
    case PROMO_33_PERCENT_OFF_FIRST_12_WEEKS = 'PROMO_33_PERCENT_OFF_FIRST_12_WEEKS';
    case PROMO_25_PERCENT_OFF_FIRST_MONTH = 'PROMO_25_PERCENT_OFF_FIRST_MONTH';
    case PROMO_25_PERCENT_OFF_FIRST_2_MONTHS = 'PROMO_25_PERCENT_OFF_FIRST_2_MONTHS';
    case PROMO_25_PERCENT_OFF_FIRST_3_MONTHS = 'PROMO_25_PERCENT_OFF_FIRST_3_MONTHS';
    case PROMO_25_PERCENT_OFF_FIRST_4_WEEKS = 'PROMO_25_PERCENT_OFF_FIRST_4_WEEKS';
    case PROMO_25_PERCENT_OFF_FIRST_8_WEEKS = 'PROMO_25_PERCENT_OFF_FIRST_8_WEEKS';
    case PROMO_25_PERCENT_OFF_FIRST_12_WEEKS = 'PROMO_25_PERCENT_OFF_FIRST_12_WEEKS';
    case PROMO_10_PERCENT_OFF_FIRST_MONTH = 'PROMO_10_PERCENT_OFF_FIRST_MONTH';
    case PROMO_10_PERCENT_OFF_FIRST_2_MONTHS = 'PROMO_10_PERCENT_OFF_FIRST_2_MONTHS';
    case PROMO_10_PERCENT_OFF_FIRST_3_MONTHS = 'PROMO_10_PERCENT_OFF_FIRST_3_MONTHS';
    case PROMO_10_PERCENT_OFF_FIRST_4_WEEKS = 'PROMO_10_PERCENT_OFF_FIRST_4_WEEKS';
    case PROMO_10_PERCENT_OFF_FIRST_8_WEEKS = 'PROMO_10_PERCENT_OFF_FIRST_8_WEEKS';
    case PROMO_10_PERCENT_OFF_FIRST_12_WEEKS = 'PROMO_10_PERCENT_OFF_FIRST_12_WEEKS';
    case PROMO_ONLY_1_EURO_FIRST_WEEK = 'PROMO_ONLY_1_EURO_FIRST_WEEK';
    case PROMO_ONLY_1_EURO_FIRST_MONTH = 'PROMO_ONLY_1_EURO_FIRST_MONTH';
    case PROMO_ONLY_1_EURO_FIRST_2_MONTHS = 'PROMO_ONLY_1_EURO_FIRST_2_MONTHS';
    case PROMO_ONLY_1_EURO_FIRST_3_MONTHS = 'PROMO_ONLY_1_EURO_FIRST_3_MONTHS';
    case PROMO_ONLY_1_EURO_FIRST_4_WEEKS = 'PROMO_ONLY_1_EURO_FIRST_4_WEEKS';
    case PROMO_ONLY_1_EURO_FIRST_8_WEEKS = 'PROMO_ONLY_1_EURO_FIRST_8_WEEKS';
    case PROMO_ONLY_1_EURO_FIRST_12_WEEKS = 'PROMO_ONLY_1_EURO_FIRST_12_WEEKS';
    case PROMO_PAY_6_GET_1_FREE = 'PROMO_PAY_6_GET_1_FREE';
    case PROMO_PAY_12_GET_2_FREE = 'PROMO_PAY_12_GET_2_FREE';
    case PROMO_NO_ADMIN_FEE = 'PROMO_NO_ADMIN_FEE';
    case PROMO_NO_DEPOSIT_REQUIRED = 'PROMO_NO_DEPOSIT_REQUIRED';
    case PROMO_FREE_LOCK = 'PROMO_FREE_LOCK';
    case PROMO_FREE_MOVING_BOXES = 'PROMO_FREE_MOVING_BOXES';
    case PROMO_FREE_VAN_RENTAL = 'PROMO_FREE_VAN_RENTAL';
    case PROMO_FREE_PICKUP_SERVICE = 'PROMO_FREE_PICKUP_SERVICE';
    case PROMO_FREE_TRUCK_USE = 'PROMO_FREE_TRUCK_USE';

    public function label(string $currency): string
    {
        $label = match ($this) {
            self::PROMO_FIRST_WEEK_FREE => '1st week free',
            self::PROMO_FIRST_MONTH_FREE => '1st month free',
            self::PROMO_FIRST_SECOND_MONTH_FREE => '1st two months free',
            self::PROMO_50_PERCENT_OFF_FIRST_MONTH => '50% off your first month',
            self::PROMO_50_PERCENT_OFF_FIRST_2_MONTHS => '50% off for the first 2 months',
            self::PROMO_50_PERCENT_OFF_FIRST_3_MONTHS => '50% off for the first 3 months',
            self::PROMO_50_PERCENT_OFF_FIRST_4_WEEKS => '50% off for the first 4 weeks',
            self::PROMO_50_PERCENT_OFF_FIRST_8_WEEKS => '50% off for the first 8 weeks',
            self::PROMO_50_PERCENT_OFF_FIRST_12_WEEKS => '50% off for the first 12 weeks',
            self::PROMO_33_PERCENT_OFF_FIRST_MONTH => '33% off your first month',
            self::PROMO_33_PERCENT_OFF_FIRST_2_MONTHS => '33% off for the first 2 months',
            self::PROMO_33_PERCENT_OFF_FIRST_3_MONTHS => '33% off for the first 3 months',
            self::PROMO_33_PERCENT_OFF_FIRST_4_WEEKS => '33% off for the first 4 weeks',
            self::PROMO_33_PERCENT_OFF_FIRST_8_WEEKS => '33% off for the first 8 weeks',
            self::PROMO_33_PERCENT_OFF_FIRST_12_WEEKS => '33% off for the first 12 weeks',
            self::PROMO_25_PERCENT_OFF_FIRST_MONTH => '25% off your first month',
            self::PROMO_25_PERCENT_OFF_FIRST_2_MONTHS => '25% off for the first 2 months',
            self::PROMO_25_PERCENT_OFF_FIRST_3_MONTHS => '25% off for the first 3 months',
            self::PROMO_25_PERCENT_OFF_FIRST_4_WEEKS => '25% off for the first 4 weeks',
            self::PROMO_25_PERCENT_OFF_FIRST_8_WEEKS => '25% off for the first 8 weeks',
            self::PROMO_25_PERCENT_OFF_FIRST_12_WEEKS => '25% off for the first 12 weeks',
            self::PROMO_10_PERCENT_OFF_FIRST_MONTH => '10% off your first month',
            self::PROMO_10_PERCENT_OFF_FIRST_2_MONTHS => '10% off for the first 2 months',
            self::PROMO_10_PERCENT_OFF_FIRST_3_MONTHS => '10% off for the first 3 months',
            self::PROMO_10_PERCENT_OFF_FIRST_4_WEEKS => '10% off for the first 4 weeks',
            self::PROMO_10_PERCENT_OFF_FIRST_8_WEEKS => '10% off for the first 8 weeks',
            self::PROMO_10_PERCENT_OFF_FIRST_12_WEEKS => '10% off for the first 12 weeks',
            self::PROMO_ONLY_1_EURO_FIRST_WEEK => 'First week for only :currency 1',
            self::PROMO_ONLY_1_EURO_FIRST_MONTH => 'First month for only :currency 1',
            self::PROMO_ONLY_1_EURO_FIRST_2_MONTHS => 'First 2 months for only :currency 1',
            self::PROMO_ONLY_1_EURO_FIRST_3_MONTHS => 'First 3 months for only :currency 1',
            self::PROMO_ONLY_1_EURO_FIRST_4_WEEKS => 'First 4 weeks for only :currency 1',
            self::PROMO_ONLY_1_EURO_FIRST_8_WEEKS => 'First 8 weeks for only :currency 1',
            self::PROMO_ONLY_1_EURO_FIRST_12_WEEKS => 'First 12 weeks for only :currency 1',
            self::PROMO_PAY_6_GET_1_FREE => 'Get 1 month free when paying 6 months in advance',
            self::PROMO_PAY_12_GET_2_FREE => 'Get 2 months free when paying 12 months in advance',
            self::PROMO_NO_ADMIN_FEE => 'No administration fee',
            self::PROMO_NO_DEPOSIT_REQUIRED => 'No deposit required',
            self::PROMO_FREE_LOCK => 'Free lock included',
            self::PROMO_FREE_MOVING_BOXES => 'Free moving boxes included',
            self::PROMO_FREE_VAN_RENTAL => 'Free van rental for move-in',
            self::PROMO_FREE_PICKUP_SERVICE => 'Free pickup service for new customers',
            self::PROMO_FREE_TRUCK_USE => 'Free use of moving truck on move-in day',
        };

        return str_replace(':currency', $currency, $label);
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function options(string $currency): array
    {
        $cases = [];

        foreach (self::cases() as $case) {
            $cases[$case->value] = $case->label($currency);
        }

        return $cases;
    }
}
