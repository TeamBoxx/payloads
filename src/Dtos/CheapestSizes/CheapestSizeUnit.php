<?php

namespace Thestoragescanner\Payloads\Dtos\CheapestSizes;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class CheapestSizeUnit extends DtoAbstract
{
    #[MapScalar('provider_id')]
    public int $providerId;

    #[MapScalar('provider_name')]
    public string $providerName;

    #[MapScalar('facility_id')]
    public int $facilityId;

    #[MapScalar('facility_name')]
    public string $facilityName;

    #[MapScalar('city')]
    public string $city;

    #[MapScalar('address')]
    public string $address;

    #[MapScalar('zipcode')]
    public string $zipcode;

    #[MapScalar('size_squared')]
    public float $sizeSquared;

    #[MapScalar('price')]
    public float $price;

    #[MapScalar('price_range_low')]
    public ?float $priceRangeLow;

    #[MapScalar('price_range_high')]
    public ?float $priceRangeHigh;
}