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
    public ?float $lat = null;

    #[MapScalar('long')]
    public ?float $long = null;

    #[MapScalar('radius')]
    public ?float $radius = null;

    #[MapScalar('pickup_and_delivery')]
    public ?bool $pickupAndDelivery = null;

    /** @var int[] */
    #[MapArray('facility_ids', 'int')]
    public array $facilityIds = [];

    #[MapObject('specs')]
    public ?FacilitySpecs $specs = null;
}

