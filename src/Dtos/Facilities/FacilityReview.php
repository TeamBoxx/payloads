<?php

namespace Thestoragescanner\Payloads\Dtos\Facilities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilityReview extends DtoAbstract
{
    #[MapScalar('name')]
    public string $name;

    #[MapScalar('text')]
    public string $text;

    #[MapScalar('rating')]
    public int $rating;
}
