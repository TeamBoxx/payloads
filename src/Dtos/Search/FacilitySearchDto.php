<?php

namespace Thestoragescanner\Payloads\Dtos\Search;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
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

    #[MapScalar('on_request')]
    public bool $onRequest;

    #[MapScalar('verified')]
    public bool $verified;

    #[MapScalar('pickup_and_delivery')]
    public bool $pickupAndDelivery;

    #[MapScalar('sponsored')]
    public bool $sponsored;

    #[MapScalar('min_price')]
    public ?float $minPrice = null;

    #[MapScalar('provider_id')]
    public int $providerId;

    #[MapScalar('provider_name')]
    public string $providerName;

    #[MapScalar('provider_image')]
    public ?string $providerImage;

    #[MapScalar('provider_verified')]
    public bool $providerVerified;

    #[MapScalar('provider_ssa_member')]
    public bool $providerSsaMember;

    #[MapScalar('price')]
    public ?float $price;

    #[MapScalar('size_squared')]
    public ?float $sizeSquared;

    #[MapScalar('size_cubic')]
    public ?float $sizeCubic;

    #[MapScalar('deviation')]
    public float $deviation;

    #[MapScalar('distance')]
    public float $distance;
}
