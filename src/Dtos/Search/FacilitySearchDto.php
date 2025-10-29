<?php

namespace Thestoragescanner\Payloads\Dtos\Search;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapObject;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilitySearchDto extends DtoAbstract
{
    #[MapScalar('id')]
    public int $id;

    #[MapScalar('name')]
    public string $name;

    #[MapScalar('country')]
    public string $country;

    #[MapScalar('city')]
    public string $city;

    #[MapScalar('address')]
    public string $address;

    #[MapScalar('zipcode')]
    public string $zipcode;

    #[MapScalar('lat')]
    public float $lat;

    #[MapScalar('long')]
    public float $long;

    #[MapScalar('verified')]
    public bool $verified;

    #[MapScalar('pickup_and_delivery')]
    public bool $pickupAndDelivery;

    #[MapObject('provider')]
    public FacilitySearchProviderDto $provider;

    #[MapObject('unit')]
    public FacilitySearchUnitDto $unit;

    #[MapScalar('distance')]
    public float $distance;
}
