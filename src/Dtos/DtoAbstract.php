<?php

namespace Thestoragescanner\Payloads\Dtos;

use JsonSerializable;
use ReflectionObject;
use Thestoragescanner\Payloads\Helpers\Strings;
use Thestoragescanner\Payloads\Mapper\Mapper;
use Thestoragescanner\Payloads\Mapper\Traits\JsonSerializesMapKeys;

abstract class DtoAbstract implements JsonSerializable
{
    use JsonSerializesMapKeys;

    public static function fromFetchObject(object $stdClass, bool $snakeCaseToCamelCase = true, bool $useMapper = true): static
    {
        return static::fromFetchAssoc(
            (array) $stdClass,
            $snakeCaseToCamelCase,
            $useMapper
        );
    }

    public static function fromFetchAssoc(array $assoc, bool $snakeCaseToCamelCase = true, bool $useMapper = true): static
    {
        if ($snakeCaseToCamelCase) {
            foreach ($assoc as $key => $value) {
                unset($assoc[$key]);

                $camelCaseKey = Strings::toCamelCase($key);

                $assoc[$camelCaseKey] = $value;
            }
        }

        return static::fromAssoc($assoc, $useMapper);
    }

    public static function fromAssoc(array $assoc, bool $useMapper = true): static
    {
        if ($useMapper) {
            return Mapper::toObject($assoc, static::class);
        }

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

            $isInitialized = method_exists($property, 'isInitialized')
                ? $property->isInitialized($this)
                : true;

            $value = $isInitialized ? $property->getValue($this) : null;

            if ($value === null) {
                $defaultProperties = $property
                    ->getDeclaringClass()
                    ->getDefaultProperties();

                if (array_key_exists($property->getName(), $defaultProperties)) {
                    $value = $defaultProperties[$property->getName()];
                    $property->setValue($this, $value);
                }
            }

            if ($value instanceof self) {
                $value->setDefaultIfNull();
                continue;
            }

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
