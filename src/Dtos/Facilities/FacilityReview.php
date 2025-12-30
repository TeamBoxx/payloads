<?php

namespace Thestoragescanner\Payloads\Dtos\Facilities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilityReview extends DtoAbstract
{
    #[MapScalar('name')]
    public ?string $name = null;

    #[MapScalar('original_text')]
    public ?string $originalText = null;

    #[MapScalar('english_text')]
    public ?string $englishText = null;

    #[MapScalar('rating')]
    public ?int $rating = null;

    #[MapScalar('image_url')]
    public ?string $imageUrl = null;

    #[MapScalar('published_at')]
    public string $publishedAt;
}
