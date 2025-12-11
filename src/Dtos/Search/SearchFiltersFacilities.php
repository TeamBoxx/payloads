<?php

namespace Thestoragescanner\Payloads\Dtos\Search;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Dtos\Facilities\FacilitySpecs;
use Thestoragescanner\Payloads\Mapper\Attributes\MapArray;
use Thestoragescanner\Payloads\Mapper\Attributes\MapObject;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class SearchFiltersFacilities extends DtoAbstract
{
    #[MapScalar('lat')]
    public float $lat;

    #[MapScalar('long')]
    public float $long;

    #[MapScalar('radius')]
    public float $radius;

    #[MapScalar('pickup_and_delivery')]
    public ?bool $pickupAndDelivery = null;

    #[MapArray('facility_ids', 'int')]
    public array $facilityIds = [];

    #[MapObject('specs')]
    public ?FacilitySpecs $specs = null;
}

