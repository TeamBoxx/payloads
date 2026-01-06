<?php

namespace Thestoragescanner\Payloads\Enums;

enum SizeEnum: string
{
    case XXS = 'XXS';
    case XS = 'XS';
    case S = 'S';
    case M = 'M';
    case L = 'L';
    case XL = 'XL';
    case XXL = 'XXL';
    case XXXL = 'XXXL';

    public function min(): float
    {
        return match ($this) {
            self::XXS => 0.0,
            self::XS => 1.0,
            self::S => 2.0,
            self::M => 4.0,
            self::L => 6.0,
            self::XL => 8.0,
            self::XXL => 10.0,
            self::XXXL => 15.0,
        };
    }

    public function max(): float
    {
        return match ($this) {
            self::XXS => 1.0,
            self::XS => 2.0,
            self::S => 4.0,
            self::M => 6.0,
            self::L => 8.0,
            self::XL => 10.0,
            self::XXL => 15.0,
            self::XXXL => INF,
        };
    }
}
