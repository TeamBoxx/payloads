<?php

namespace Thestoragescanner\Payloads\Dtos\Search;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Enums\SortStrategy;
use Thestoragescanner\Payloads\Mapper\Attributes\MapObject;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class SearchFilters extends DtoAbstract
{
    /**
     * Filters for specific entity values
     */
    #[MapObject('providers')]
    public SearchFiltersProviders $providers;

    #[MapObject('facilities')]
    public SearchFiltersFacilities $facilities;

    #[MapObject('units')]
    public SearchFiltersUnits $units;


    /**
     * General filters
     */
    #[MapScalar('disable_count')]
    public bool $disableCount;

    #[MapScalar('sort')]
    public SortStrategy $sort;

    #[MapScalar('page')]
    public int $page;

    #[MapScalar('limit')]
    public int $limit;

    #[MapScalar('ip_address')]
    public string $ipAddress;
}
