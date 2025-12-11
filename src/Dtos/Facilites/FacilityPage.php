<?php

namespace Thestoragescanner\Payloads\Dtos\Facilities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Dtos\ImageDTO;
use Thestoragescanner\Payloads\Dtos\Providers\Provider;
use Thestoragescanner\Payloads\Dtos\Units\CheapestUnit;
use Thestoragescanner\Payloads\Mapper\Attributes\MapArray;
use Thestoragescanner\Payloads\Mapper\Attributes\MapObject;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilityPage extends DtoAbstract
{
    #[MapObject('facility')]
    public Facility $facility;

    #[MapObject('provider')]
    public Provider $provider;

    #[MapObject('specs')]
    public FacilitySpecs $specs;

    /** @var FacilitySegment[] */
    #[MapArray('segments', FacilitySegment::class)]
    public array $segments;

    #[MapObject('smallest_largest')]
    public FacilitySmallestLargest $smallestLargest;

    #[MapScalar('avg_price')]
    public ?float $avgPrice;

    #[MapScalar('avg_price_squared')]
    public ?float $avgPriceSquared;

    #[MapScalar('avg_price_cubic')]
    public ?float $avgPriceCubic;

    #[MapScalar('avg_size_squared')]
    public ?float $avgSizeSquared;

    #[MapScalar('avg_size_cubic')]
    public ?float $avgSizeCubic;
    public ?CheapestUnit $cheapest_unit;

    #[MapScalar('unique_sizes')]
    public int $uniqueSizes;

    /** @var NearestFacility[] */
    #[MapArray('nearest_facilities', NearestFacility::class)]
    public array $nearestFacilities;

    #[MapScalar('highest_price')]
    public float $highestPrice;

    /** @var ImageDTO[] */
    #[MapArray('images', ImageDTO::class)]
    public array $images;
}
