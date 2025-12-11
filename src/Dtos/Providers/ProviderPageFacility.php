<?php

namespace Thestoragescanner\Payloads\Dtos\Providers;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class ProviderPageFacility extends DtoAbstract
{
    #[MapScalar('id')]
    public int $id;

    #[MapScalar('name')]
    public string $name;

    #[MapScalar('city')]
    public ?string $city = null;

    #[MapScalar('address')]
    public ?string $address = null;

    #[MapScalar('zipcode')]
    public ?string $zipcode = null;

    #[MapScalar(key: 'lat')]
    public float $lat;

    #[MapScalar('long')]
    public float $long;

    #[MapScalar(key: 'count')]
    public int $count;

    #[MapScalar('min_price')]
    public ?float $minPrice = null;

    #[MapScalar('pickup_and_delivery')]
    public bool $pickupAndDelivery;

    #[MapScalar('country_code')]
    public string $countryCode;

    #[MapScalar('feature_is_click_url_allowed')]
    public bool $featureIsClickUrlAllowed;

    #[MapScalar('verified')]
    public bool $verified;
}
