<?php

namespace Thestoragescanner\Payloads\Dtos\Search;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Enums\MeasurementSystem;
use Thestoragescanner\Payloads\Enums\SortStrategy;
use Thestoragescanner\Payloads\Mapper\Attributes\MapObject;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class SearchFilters extends DtoAbstract
{
    #[MapObject('providers')]
    public SearchFiltersProviders $providers;

    #[MapObject('facilities')]
    public SearchFiltersFacilities $facilities;

    #[MapObject('units')]
    public SearchFiltersUnits $units;


    #[MapScalar('disable_count')]
    public bool $disableCount = false;

    #[MapScalar('sort')]
    public SortStrategy $sort = SortStrategy::RELEVANCE;

    #[MapScalar('page')]
    public int $page = 1;

    #[MapScalar('limit')]
    public int $limit = PHP_INT_MAX;

    #[MapScalar('measurement_system')]
    public ?MeasurementSystem $measurementSystem = null;
}
