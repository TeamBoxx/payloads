<?php

namespace Thestoragescanner\Payloads\Dtos;

use JsonSerializable;
use ReflectionObject;
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

    public function setDefaultIfNull(): void
    {
        $reflection = new ReflectionObject($this);

        foreach ($reflection->getProperties() as $property) {
            if ($property->isStatic()) {
                continue;
            }

            $property->setAccessible(true);

            // Handle uninitialized typed properties (PHP 7.4+)
            $isInitialized = method_exists($property, 'isInitialized')
                ? $property->isInitialized($this)
                : true;

            $value = $isInitialized ? $property->getValue($this) : null;

            // 1️⃣ Apply default value if null
            if ($value === null) {
                $defaultProperties = $property
                    ->getDeclaringClass()
                    ->getDefaultProperties();

                if (array_key_exists($property->getName(), $defaultProperties)) {
                    $value = $defaultProperties[$property->getName()];
                    $property->setValue($this, $value);
                }
            }

            // 2️⃣ Recurse into nested DTOs
            if ($value instanceof self) {
                $value->setDefaultIfNull();
                continue;
            }

            // 3️⃣ Recurse into arrays (deep)
            if (is_array($value)) {
                $this->applyDefaultsToArray($value);
                $property->setValue($this, $value);
            }
        }
    }

    protected function applyDefaultsToArray(array &$array): void
    {
        foreach ($array as &$item) {
            if ($item instanceof DtoAbstract) {
                $item->setDefaultIfNull();
            } elseif (is_array($item)) {
                $this->applyDefaultsToArray($item);
            }
        }
    }
}
