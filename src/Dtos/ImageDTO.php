<?php

namespace Thestoragescanner\Payloads\Dtos;

use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class ImageDTO
{
    #[MapScalar('url')]
    public string $url;
}
