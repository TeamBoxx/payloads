<?php

namespace Thestoragescanner\Payloads\Dtos\Search;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilitySearchUnitDto extends DtoAbstract
{
    #[MapScalar('id')]
    public int $id;

    #[MapScalar('squared')]
    public ?float $squared;

    #[MapScalar('cubic')]
    public ?float $cubic;

    #[MapScalar('price')]
    public ?float $price;

    #[MapScalar('currency')]
    public ?string $currency;

    #[MapScalar('available')]
    public ?bool $available;

    #[MapScalar('price_per_squared')]
    public ?float $pricePerSquared;

    #[MapScalar('price_per_cubic')]
    public ?float $pricePerCubic;

    #[MapScalar('estimated_price_range_low')]
    public ?float $estimatedPriceRangeLow;

    #[MapScalar('estimated_price_range_high')]
    public ?float $estimatedPriceRangeHigh;

    #[MapScalar('on_request')]
    public bool $onRequest;
}
