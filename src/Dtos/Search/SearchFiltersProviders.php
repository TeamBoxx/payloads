<?php

namespace Thestoragescanner\Payloads\Dtos\Search;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapArray;
use Thestoragescanner\Payloads\Mapper\Attributes\MapObject;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class SearchFiltersProviders extends DtoAbstract
{
    #[MapScalar('verified')]
    public ?bool $verified = null;

    #[MapScalar('ssa_member')]
    public ?bool $ssaMember = null;

    #[MapArray('provider_ids', 'int')]
    public array $providerIds = [];
}

