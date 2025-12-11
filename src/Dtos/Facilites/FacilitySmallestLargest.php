<?php

namespace Thestoragescanner\Payloads\Dtos\Facilities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilitySmallestLargest extends DtoAbstract
{
    #[MapScalar('smallest_squared')]
    public float $smallestSquared;

    #[MapScalar('smallest_cubic')]
    public float $smallestCubic;

    #[MapScalar('largest_squared')]
    public float $largestSquared;

    #[MapScalar('largest_cubic')]
    public float $largestCubic;
}
