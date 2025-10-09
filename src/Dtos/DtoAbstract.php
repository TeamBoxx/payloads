<?php

namespace Thestoragescanner\Payloads\Dtos;

use JsonSerializable;
use Thestoragescanner\Payloads\Helpers\Strings;
use Thestoragescanner\Payloads\Mapper\Traits\JsonSerializesMapKeys;

abstract class DtoAbstract implements JsonSerializable
{
    use JsonSerializesMapKeys;

    public function fromFetchObject(object $stdClass, bool $snakeCaseToCamelCase = true): static
    {
        return static::fromFetchAssoc(
            (array) $stdClass,
            $snakeCaseToCamelCase
        );
    }

    public function fromFetchAssoc(array $assoc, bool $snakeCaseToCamelCase = true): static
    {
        if ($snakeCaseToCamelCase) {
            foreach ($assoc as $key => $value) {
                unset($assoc[$key]);

                $camelCaseKey = Strings::toCamelCase($key);

                $assoc[$camelCaseKey] = $value;
            }
        }

        return static::fromAssoc($assoc);
    }

    public function fromAssoc(array $assoc): static
    {
        $instance = new static();

        foreach ($assoc as $key => $value) {
            $instance->{$key} = $value;
        }

        return $instance;
    }
}
