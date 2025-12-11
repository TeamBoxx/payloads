<?php

namespace Thestoragescanner\Payloads\Dtos\Cities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class City extends DtoAbstract
{
    #[MapScalar('id')]
    public int $id;

    #[MapScalar('country_code')]
    public string $countryCode;

    #[MapScalar('state')]
    public string $state;

    #[MapScalar('city')]
    public string $city;

    #[MapScalar('slug_state')]
    public string $slugState;

    #[MapScalar('slug_city')]
    public string $slugCity;

    #[MapScalar('lat')]
    public float $lat;

    #[MapScalar('long')]
    public float $long;

    #[MapScalar('inhabitants')]
    public int $inhabitants;

    #[MapScalar('radius')]
    public float $radius;
}
