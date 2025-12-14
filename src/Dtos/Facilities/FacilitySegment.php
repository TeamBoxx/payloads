<?php

namespace Thestoragescanner\Payloads\Dtos\Facilities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilitySegment extends DtoAbstract
{
    #[MapScalar('segment')]
    public string $segment;

    #[MapScalar('average')]
    public float $average;

    #[MapScalar('count')]
    public int $count;
}
