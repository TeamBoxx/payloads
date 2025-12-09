<?php

namespace Thestoragescanner\Payloads\Dtos\Cities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapObject;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class CityPage extends DtoAbstract
{
    #[MapObject('city')]
    public City $city;
    public array $surrounding_facilities;

    #[MapScalar('provider_count')]
    public int $providerCount;

    public array $popular_providers;

    #[MapScalar('unique_sizes_count')]
    public int $uniqueSizesCount;

    public array $avg_price_per_segment;
    public array $closest_cities;
    public array $cheapest_units;
    public array $three_biggest_cities;

    #[MapObject('averages')]
    public ?CityAverages $averages;
}
