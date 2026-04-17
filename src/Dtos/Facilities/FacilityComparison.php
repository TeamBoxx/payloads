<?php

namespace Thestoragescanner\Payloads\Dtos\Facilities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Dtos\ImageDTO;
use Thestoragescanner\Payloads\Mapper\Attributes\MapObject;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilityComparison extends DtoAbstract
{
    #[MapScalar('provider_id')]
    public int $providerId;

    #[MapScalar('provider_name')]
    public string $providerName;

    #[MapScalar('provider_verified')]
    public bool $providerVerified;

    #[MapScalar('facility_id')]
    public int $facilityId;

    #[MapScalar('facility_name')]
    public string $facilityName;

    #[MapScalar('facility_verified')]
    public bool $facilityVerified;

    #[MapScalar('country_code')]
    public string $countryCode;

    #[MapScalar('city')]
    public string $city;

    #[MapScalar('address')]
    public ?string $address = null;

    #[MapScalar('zipcode')]
    public ?string $zipcode = null;

    #[MapScalar('lat')]
    public float $lat;

    #[MapScalar('long')]
    public float $long;

    #[MapScalar('pickup_and_delivery')]
    public bool $pickupAndDelivery;

    #[MapObject('image')]
    public ?ImageDTO $image = null;

    #[MapScalar('distance')]
    public float $distance;

    #[MapScalar('unit_count')]
    public int $unitCount;

    #[MapScalar('avg_size_squared')]
    public ?float $avgSizeSquared = null;

    #[MapScalar('avg_size_cubic')]
    public ?float $avgSizeCubic = null;

    #[MapScalar('avg_price')]
    public ?float $avgPrice = null;

    #[MapScalar('avg_price_per_squared')]
    public ?float $avgPricePerSquared = null;

    #[MapScalar('avg_price_per_cubic')]
    public ?float $avgPricePerCubic = null;

    #[MapScalar('avg_price_diff')]
    public ?float $avgPriceDiff = null;

    #[MapScalar('avg_price_diff_percentage')]
    public ?float $avgPriceDiffPercentage = null;
}
