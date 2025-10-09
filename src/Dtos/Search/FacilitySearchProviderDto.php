<?php

namespace Thestoragescanner\Payloads\Dtos\Search;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilitySearchProviderDto extends DtoAbstract
{
    #[MapScalar('id')]
    public int $id;

    #[MapScalar('name')]
    public string $name;

    #[MapScalar('image')]
    public ?string $image;

    #[MapScalar('verified')]
    public bool $verified;

    #[MapScalar('ssa_member')]
    public bool $ssaMember;
}
