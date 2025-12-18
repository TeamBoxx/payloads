<?php

namespace Thestoragescanner\Payloads\Dtos\Search;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Enums\Dimension;
use Thestoragescanner\Payloads\Enums\Unit\UnitCategory;
use Thestoragescanner\Payloads\Enums\Unit\UnitFloor;
use Thestoragescanner\Payloads\Mapper\Attributes\MapArray;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class SearchFiltersUnits extends DtoAbstract
{
    #[MapScalar('price_min')]
    public float $priceMin = 0.1;

    #[MapScalar('price_max')]
    public ?float $priceMax = PHP_INT_MAX;

    #[MapScalar('size_min')]
    public float $sizeMin = 0.1;

    #[MapScalar('size_max')]
    public ?float $sizeMax = PHP_INT_MAX;

    #[MapScalar('dimension')]
    public Dimension $dimension = Dimension::SQUARED;

    #[MapScalar('available')]
    public ?bool $available = null;

    #[MapScalar('on_request')]
    public ?bool $onRequest = null;

    /** @var UnitCategory[] */
    #[MapArray('categories', UnitCategory::class)]
    public ?array $categories = [];

    #[MapScalar('floor')]
    public ?UnitFloor $floor = null;
}
