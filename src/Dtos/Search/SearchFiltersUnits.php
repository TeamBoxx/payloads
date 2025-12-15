<?php

namespace Thestoragescanner\Payloads\Dtos\Search;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Enums\Dimension;
use Thestoragescanner\Payloads\Enums\Unit\UnitCategory;
use Thestoragescanner\Payloads\Enums\Unit\UnitFloor;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class SearchFiltersUnits extends DtoAbstract
{
    #[MapScalar('price_min')]
    public float $priceMin;

    #[MapScalar('price_max')]
    public float $priceMax;

    #[MapScalar('size_min')]
    public float $sizeMin;

    #[MapScalar('size_max')]
    public float $sizeMax;

    #[MapScalar('dimension')]
    public Dimension $dimension;

    #[MapScalar('available')]
    public ?bool $available = null;

    #[MapScalar('on_request')]
    public ?bool $onRequest = null;

    #[MapScalar('category')]
    public ?UnitCategory $category = null;

    #[MapScalar('floor')]
    public ?UnitFloor $floor = null;
}
