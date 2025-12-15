<?php

namespace Thestoragescanner\Payloads\Dtos\Cities;

use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class ClosestCity extends City
{
    #[MapScalar('distance')]
    public float $distance;
}
