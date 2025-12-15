<?php

namespace Thestoragescanner\Payloads\Dtos\Cities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class CityAverages extends DtoAbstract
{
    #[MapScalar('avg_price_city')]
    public ?float $avgPriceCity;

    #[MapScalar('avg_price_country')]
    public ?float $avgPriceCountry;

    #[MapScalar('avg_price_per_squared_city')]
    public ?float $avgPricePerSquaredCity;

    #[MapScalar('avg_price_per_squared_country')]
    public ?float $avgPricePerSquaredCountry;

    #[MapScalar('deviation_price')]
    public ?float $deviationPrice;

    #[MapScalar('deviation_percentage')]
    public ?float $deviationPercentage;

    #[MapScalar('deviation_price_per_squared')]
    public ?float $deviationPricePerSquared;

    #[MapScalar('deviation_price_per_squared_percentage')]
    public ?float $deviationPricePerSquaredPercentage;
}
