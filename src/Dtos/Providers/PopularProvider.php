<?php

namespace Thestoragescanner\Payloads\Dtos\Providers;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class PopularProvider extends DtoAbstract
{
    #[MapScalar('id')]
    public int $id;

    #[MapScalar('name')]
    public string $name;

    #[MapScalar('click_url')]
    public ?string $clickUrl;

    #[MapScalar('website')]
    public ?string $website;

    #[MapScalar('image')]
    public ?string $image;

    #[MapScalar('ssa_member')]
    public bool $ssaMember;

    #[MapScalar('count')]
    public int $count;

    #[MapScalar('verified')]
    public bool $verified;
}
