<?php

namespace Thestoragescanner\Payloads\Mapper\Attributes;

abstract class MapAbstract
{
    public function __construct(public string $key)
    {
    }
}
