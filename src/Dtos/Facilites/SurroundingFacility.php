<?php

namespace Thestoragescanner\Payloads\Dtos\Facilities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class SurroundingFacility extends DtoAbstract
{
    #[MapScalar('id')]
    public int $id;

    #[MapScalar(key: 'name')]
    public string $name;

    #[MapScalar(key: 'lat')]
    public float $lat;

    #[MapScalar('long')]
    public float $long;

    #[MapScalar('city')]
    public string $city;

    #[MapScalar(key: 'address')]
    public ?string $address;

    #[MapScalar(key: 'zipcode')]
    public ?string $zipcode;

    #[MapScalar('min_price')]
    public ?float $minPrice;

    #[MapScalar('pickup_and_delivery')]
    public bool $pickupAndDelivery;

    #[MapScalar('provider_id')]
    public int $providerId;

    #[MapScalar('provider_name')]
    public string $providerName;

    #[MapScalar('provider_image')]
    public ?string $providerImage;

    #[MapScalar('provider_ssa_member')]
    public ?string $providerSsaMember;

    #[MapScalar('country_code')]
    public string $countryCode;
}
