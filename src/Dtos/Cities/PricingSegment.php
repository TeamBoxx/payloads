<?php

namespace Thestoragescanner\Payloads\Dtos\Cities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class PricingSegment extends DtoAbstract
{
    #[MapScalar('segment')]
    public ?string $segment;

    #[MapScalar('average_price_city')]
    public ?float $averagePriceCity;

    #[MapScalar('average_price_country')]
    public ?float $averagePriceCountry;

    #[MapScalar('average_price_per_squared_city')]
    public ?float $averagePricePerSquaredCity;

    #[MapScalar('average_price_per_squared_country')]
    public ?float $averagePricePerSquaredCountry;

    #[MapScalar('price_deviation')]
    public ?float $priceDeviation;

    #[MapScalar('price_percentage_diff')]
    public ?float $pricePercentageDiff;

    #[MapScalar('price_per_squared_deviation')]
    public ?float $pricePerSquaredDeviation;

    #[MapScalar('price_per_squared_percentage_diff')]
    public ?float $pricePerSquaredPercentageDiff;
}
