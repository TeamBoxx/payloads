<?php

namespace Thestoragescanner\Payloads\Dtos\CheapestSizes;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapArray;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class CheapestSizeSegment extends DtoAbstract
{
    #[MapScalar('size_from')]
    public float $sizeFrom;

    #[MapScalar('size_to')]
    public ?float $sizeTo;

    #[MapArray('units', CheapestSizeUnit::class)]
    public array $units;
}
