<?php

namespace Thestoragescanner\Payloads\Mapper\Traits;

use BackedEnum;
use ReflectionProperty;
use Thestoragescanner\Payloads\Mapper\Attributes\MapAbstract;

trait JsonSerializesMapKeys
{
    public function jsonSerialize(): array
    {
        $assoc = [];

        foreach ($this as $key => $value) {
            $value = is_subclass_of($value, BackedEnum::class) ? $value->value : $value;

            $reflectionProperty = new ReflectionProperty($this, $key);

            $attributes = $reflectionProperty->getAttributes();

            foreach ($attributes as $attribute) {
                $instance = $attribute->newInstance();

                if ($instance instanceof MapAbstract) {
                    $assoc[$instance->key] = $value;

                    continue 2;
                }
            }

            $assoc[$key] = $value;
        }

        return $assoc;
    }
}
