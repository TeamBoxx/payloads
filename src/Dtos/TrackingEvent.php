<?php

namespace Thestoragescanner\Payloads\Dtos;

use JsonSerializable;
use Thestoragescanner\Payloads\Enums\TrackingEventTypeEnum;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class TrackingEvent extends DtoAbstract implements JsonSerializable
{
    #[MapScalar('event')]
    public TrackingEventTypeEnum $event;

    #[MapScalar('page')]
    public string $page;

    #[MapScalar('name')]
    public ?string $name = null;

    #[MapScalar('data_id')]
    public ?string $dataId = null;

    #[MapScalar('data_type')]
    public ?string $dataType = null;
}
