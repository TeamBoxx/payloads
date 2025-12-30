<?php

namespace Thestoragescanner\Payloads\Dtos\Search;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Enums\Unit\UnitType;
use Thestoragescanner\Payloads\Mapper\Attributes\MapArray;
use Thestoragescanner\Payloads\Mapper\Attributes\MapObject;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilitySearch extends DtoAbstract
{
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

    #[MapScalar('verified')]
    public bool $verified;

    #[MapScalar('pickup_and_delivery')]
    public bool $pickupAndDelivery;

    #[MapScalar('feature_is_click_url_allowed')]
    public bool $featureIsClickUrlAllowed;

    #[MapScalar('distance')]
    public float $distance;

    #[MapObject('provider')]
    public FacilitySearchProvider $provider;

    #[MapObject('unit')]
    public FacilitySearchUnit $unit;

    /** @var UnitType[] */
    #[MapArray('types', UnitType::class)]
    public array $types;

    #[MapScalar('reviews_rating_count')]
    public int $reviewsRatingCount = 0;

    #[MapScalar('reviews_rating_average')]
    public ?float $reviewsRatingAverage = null;
}
