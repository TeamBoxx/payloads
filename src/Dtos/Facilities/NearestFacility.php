<?php

namespace Thestoragescanner\Payloads\Dtos\Facilities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class NearestFacility extends DtoAbstract
{
    #[MapScalar('distance')]
    public float $distance;

    #[MapScalar('id')]
    public int $id;

    #[MapScalar('name')]
    public string $name;

    #[MapScalar('country')]
    public string $country;

    #[MapScalar('country_code')]
    public string $countryCode;

    #[MapScalar('city')]
    public string $city;

    #[MapScalar('address')]
    public ?string $address;

    #[MapScalar('zipcode')]
    public ?string $zipcode;

    #[MapScalar('lat')]
    public float $lat;

    #[MapScalar('long')]
    public float $long;

    #[MapScalar('pickup_and_delivery')]
    public bool $pickupAndDelivery;

    #[MapScalar('min_price')]
    public ?float $minPrice;
}
