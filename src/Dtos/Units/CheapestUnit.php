<?php

namespace Thestoragescanner\Payloads\Dtos\Units;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapArray;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class CheapestUnit extends DtoAbstract
{
    #[MapScalar('provider_id')]
    public int $providerId;

    #[MapScalar('provider_name')]
    public string $providerName;

    #[MapScalar('facility')]
    public string $facility;

    #[MapScalar('size_squared')]
    public ?float $sizeSquared;

    #[MapScalar('size_cubic')]
    public ?float $sizeCubic;

    #[MapScalar('price')]
    public float $price;

    #[MapArray('promotions', 'string')]
    public array $promotions;
}
