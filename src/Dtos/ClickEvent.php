<?php

namespace Thestoragescanner\Payloads\Dtos;

use JsonSerializable;
use Thestoragescanner\Payloads\Enums\ClickTypeEnum;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class ClickEvent extends DtoAbstract implements JsonSerializable
{
    #[MapScalar('session_id')]
    public string $sessionId;

    #[MapScalar('type')]
    public ClickTypeEnum $type;
}
