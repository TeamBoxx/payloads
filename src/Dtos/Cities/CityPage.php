<?php

namespace Thestoragescanner\Payloads\Dtos\Cities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Dtos\Facilities\SurroundingFacility;
use Thestoragescanner\Payloads\Dtos\Providers\PopularProvider;
use Thestoragescanner\Payloads\Dtos\Units\CheapestUnit;
use Thestoragescanner\Payloads\Mapper\Attributes\MapArray;
use Thestoragescanner\Payloads\Mapper\Attributes\MapObject;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class CityPage extends DtoAbstract
{
    #[MapObject('city')]
    public City $city;

    #[MapArray('surrounding_facilities', SurroundingFacility::class)]
    public array $surroundingFacilities;

    #[MapScalar('provider_count')]
    public int $providerCount;

    #[MapArray('popular_provider', PopularProvider::class)]
    public array $popularProviders;

    #[MapScalar('unique_sizes_count')]
    public int $uniqueSizesCount;

    #[MapArray('avg_price_per_segment', PricingSegment::class)]
    public array $avgPricePerSegment;

    #[MapArray('closest_cities', ClosestCity::class)]
    public array $closestCities;

    #[MapArray('cheapest_units', CheapestUnit::class)]
    public array $cheapestUnits;

    #[MapArray('three_biggest_cities', BiggestCity::class)]
    public array $threeBiggestCities;

    #[MapObject('averages')]
    public ?CityAverages $averages;
}
