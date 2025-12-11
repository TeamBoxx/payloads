<?php

namespace Thestoragescanner\Payloads\Dtos\Providers;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapArray;
use Thestoragescanner\Payloads\Mapper\Attributes\MapObject;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class ProviderPage extends DtoAbstract
{
    #[MapObject('provider')]
    public Provider $provider;

    /** @var ProviderPageFacility[]  */
    #[MapArray('facilities', ProviderPageFacility::class)]
    public array $facilities;
}
