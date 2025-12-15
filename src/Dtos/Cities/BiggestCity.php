<?php

namespace Thestoragescanner\Payloads\Dtos\Cities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class BiggestCity extends DtoAbstract
{
    #[MapScalar('slug_state')]
    public ?string $slugState;

    #[MapScalar('slug_city')]
    public ?string $slugCity;

    #[MapScalar('state')]
    public ?string $state;

    #[MapScalar('city')]
    public ?string $city;

    #[MapScalar('inhabitants')]
    public ?int $inhabitants;
}
