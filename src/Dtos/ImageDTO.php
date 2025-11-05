<?php

namespace Thestoragescanner\Payloads\Dtos;

use Thestoragescanner\Payloads\Mapper\Attributes\MapObject;

class ImageDTO
{
    #[MapObject('url')]
    public string $url;
}
