<?php

namespace Thestoragescanner\Payloads\Dtos\Facilities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Enums\Unit\UnitType;
use Thestoragescanner\Payloads\Mapper\Attributes\MapArray;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class Facility extends DtoAbstract
{
    #[MapScalar('id')]
    public int $id;

    #[MapScalar('name')]
    public string $name;

    #[MapScalar('country')]
    public string $country;

    #[MapScalar(key: 'country_code')]
    public string $country_code;

    #[MapScalar('city')]
    public string $city;

    #[MapScalar(key: 'address')]
    public ?string $address;

    #[MapScalar('zipcode')]
    public ?string $zipcode;

    #[MapScalar('lat')]
    public float $lat;

    #[MapScalar('long')]
    public float $long;

    #[MapScalar('verified')]
    public bool $verified;

    #[MapScalar('pickup_and_delivery')]
    public bool $pickupAndDelivery;

    #[MapScalar('feature_is_click_url_allowed')]
    public bool $featureIsClickUrlAllowed;

    #[MapScalar('phone_number')]
    public ?string $phoneNumber;

    #[MapScalar('website')]
    public ?string $website;

    #[MapScalar('reviews_rating_count')]
    public ?int $reviewsRatingCount = 0;

    #[MapScalar('reviews_rating_average')]
    public ?float $reviewsRatingAverage = null;
}
