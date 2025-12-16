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

    /** @var SurroundingFacility[] */
    #[MapArray('surrounding_facilities', SurroundingFacility::class)]
    public array $surroundingFacilities;

    #[MapScalar('provider_count')]
    public int $providerCount;

    /** @var PopularProvider[] */
    #[MapArray('popular_provider', PopularProvider::class)]
    public array $popularProviders;

    #[MapScalar('unique_sizes_count')]
    public int $uniqueSizesCount;

    /** @var PricingSegment[] */
    #[MapArray('avg_price_per_segment', PricingSegment::class)]
    public array $avgPricePerSegment;

    /** @var ClosestCity[] */
    #[MapArray('closest_cities', ClosestCity::class)]
    public array $closestCities;

    /** @var CheapestUnit[] */
    #[MapArray('cheapest_units', CheapestUnit::class)]
    public array $cheapestUnits;

    /** @var BiggestCity[] */
    #[MapArray('three_biggest_cities', BiggestCity::class)]
    public array $threeBiggestCities;

    #[MapObject('averages')]
    public ?CityAverages $averages;
}
