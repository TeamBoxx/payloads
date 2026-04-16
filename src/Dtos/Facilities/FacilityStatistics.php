<?php

namespace Thestoragescanner\Payloads\Dtos\Facilities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilityStatistics extends DtoAbstract
{
    #[MapScalar('avg_price')]
    public ?float $avgPrice = null;

    #[MapScalar('avg_size_squared')]
    public ?float $avgSizeSquared = null;

    #[MapScalar('avg_size_cubic')]
    public ?float $avgSizeCubic = null;

    #[MapScalar('avg_price_per_squared')]
    public ?float $avgPricePerSquared = null;

    #[MapScalar('avg_price_per_cubic')]
    public ?float $avgPricePerCubic = null;

    #[MapScalar('avg_price_diff')]
    public ?float $avgPriceDiff = null;

    #[MapScalar('avg_price_per_squared_diff')]
    public ?float $avgPricePerSquaredDiff = null;

    #[MapScalar('avg_price_diff_percent')]
    public ?float $avgPriceDiffPercent = null;

    #[MapScalar('avg_price_per_squared_diff_percent')]
    public ?float $avgPricePerSquaredDiffPercent = null;
}
