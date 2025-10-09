<?php

namespace Thestoragescanner\Payloads\Dtos\Search;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Attributes\MapScalar;

class UnitSearchDto extends DtoAbstract
{
    #[MapScalar('id')]
    public int $id;

    #[MapScalar('url')]
    public string $url;

    #[MapScalar('image')]
    public ?string $image;

    #[MapScalar('click_url')]
    public string $clickUrl;

    #[MapScalar('provider_id')]
    public int $providerId;

    #[MapScalar('provider_name')]
    public string $providerName;

    #[MapScalar('provider_verified')]
    public bool $providerVerified;

    #[MapScalar('provider_ssa_member')]
    public bool $providerSsaMember;

    #[MapScalar('facility_id')]
    public int $facilityId;

    #[MapScalar('facility_name')]
    public string $facilityName;

    #[MapScalar('lat')]
    public float $lat;

    #[MapScalar('long')]
    public float $long;

    #[MapScalar('squared')]
    public ?float $squared;

    #[MapScalar('cubic')]
    public ?float $cubic;

    #[MapScalar('l')]
    public ?float $l;

    #[MapScalar('w')]
    public ?float $w;

    #[MapScalar('h')]
    public ?float $h;

    #[MapScalar('price')]
    public ?float $price;

    #[MapScalar('currency')]
    public ?string $currency;

    #[MapScalar('available')]
    public ?bool $available;

    #[MapScalar('country')]
    public ?string $country;

    #[MapScalar('city')]
    public ?string $city;

    #[MapScalar('address')]
    public ?string $address;

    #[MapScalar('zipcode')]
    public ?string $zipcode;

    #[MapScalar('on_request')]
    public bool $onRequest;

    #[MapScalar('sponsored')]
    public bool $sponsored;

    #[MapScalar('price_per_squared')]
    public ?float $pricePerSquared;

    #[MapScalar('price_per_cubic')]
    public ?float $pricePerCubic;

    #[MapScalar('estimated_price_range_low')]
    public ?float $estimatedPriceRangeLow;

    #[MapScalar('estimated_price_range_high')]
    public ?float $estimatedPriceRangeHigh;

    #[MapScalar('pickup_and_delivery')]
    public bool $pickupAndDelivery;

    #[MapScalar('distance')]
    public float $distance;

    #[MapScalar('deviation')]
    public float $deviation;
}
