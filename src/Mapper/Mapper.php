<?php

namespace Thestoragescanner\Payloads\Mapper;

use ReflectionClass;
use ReflectionNamedType;
use ReflectionProperty;
use stdClass;
use Thestoragescanner\Payloads\Mapper\Attributes\MapArray;
use Thestoragescanner\Payloads\Mapper\Attributes\MapObject;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;
use Thestoragescanner\Payloads\Mapper\Exceptions\MapperException;

class Mapper
{
    public static function toObject(null|array|object $value, string $class = 'stdClass'): null|array|object
    {
        if (is_null($value)) {
            return null;
        }

        if ($class == stdClass::class) {
            return $value;
        }

        return is_array($value)
            ? array_map(
                function (mixed $value) use ($class): mixed {
                    if (is_null($value)) {
                        return $value;
                    }

                    return !is_scalar($value)
                        ? static::mapToClass((object) $value, $class)
                        : $value;
                },
                $value
            )
            : static::mapToClass($value, $class);
    }

    protected static function mapToClass(?object $object, string $class): ?object
    {
        if (is_null($object)) {
            return null;
        }

        $reflectionClass = new ReflectionClass($class);

        $instance = $reflectionClass->newInstance();

        $properties = $reflectionClass->getProperties();

        foreach ($properties as $property) {
            $property->setAccessible(true);

            $scalarAttributes = $property->getAttributes(MapScalar::class);

            if (count($scalarAttributes) > 0) {
                $attribute = $scalarAttributes[0]->newInstance();

                $key = $attribute->key;

                if (!static::isPropertyReadable($object, $key)) {
                    continue;
                }

                $value = $object->{$key};

                $property->setValue($instance, $value);

                continue;
            }

            $arrayAttributes = $property->getAttributes(MapArray::class);

            if (count($arrayAttributes) > 0) {
                $attribute = $arrayAttributes[0]->newInstance();

                $key = $attribute->key;
                $type = $attribute->type;

                if (!static::isPropertyReadable($object, $key)) {
                    continue;
                }

                $value = $object->{$key};

                $property->setValue(
                    $instance,
                    !is_null($value)
                    ? static::mapArray((array) $value, $type)
                    : null
                );

                continue;
            }

            $objectAttributes = $property->getAttributes(MapObject::class);

            if (count($objectAttributes) > 0) {
                $attribute = $objectAttributes[0]->newInstance();

                $key = $attribute->key;
                $type = static::getPropertyType($property);

                if (!static::isPropertyReadable($object, $key)) {
                    continue;
                }

                $value = $object->{$key};

                $property->setValue(
                    $instance,
                    !is_null($value)
                    ? static::mapToClass((object) $value, $type)
                    : null
                );

                continue;
            }

            $key = $property->getName();

            if (property_exists($object, $key)) {
                $property->setValue($object->{$key});
            }
        }

        return $instance;
    }

    protected static function mapArray(array $array, string $type = 'mixed'): array
    {
        return array_map(
            function (mixed $value) use ($type): mixed {
                if (is_null($value)) {
                    return null;
                }

                if ($type == 'mixed') {
                    return $value;
                }

                if ($type == 'int') {
                    return (int) $value;
                }

                if ($type == 'float') {
                    return (float) $value;
                }

                if ($type == 'string') {
                    return (string) $value;
                }

                if (is_array($value) || is_object($value)) {
                    if (static::isNumericArray($value)) {
                        return static::mapArray($value, $type);
                    }

                    if (class_exists($type)) {
                        return static::mapToClass((object) $value, $type);
                    }
                }

                return $value;
            },
            $array
        );
    }

    protected static function isPropertyReadable(object $object, string $property): bool
    {
        if (!property_exists($object, $property)) {
            return false;
        }

        return (new ReflectionProperty($object, $property))->isInitialized($object);
    }

    protected static function getPropertyType(ReflectionProperty $reflectionProperty): ?string
    {
        $reflectionType = $reflectionProperty->getType();

        if (!($reflectionType instanceof ReflectionNamedType)) {
            throw new MapperException('union types are not supported');
        }

        $type = $reflectionType->getName();

        if (!$type) {
            throw new MapperException('mixed types are not supported');
        }

        if (!class_exists($type)) {
            throw new MapperException('target class does not exist');
        }

        return $type;
    }

    protected static function isNumericArray(mixed $array): bool
    {
        if (!is_array($array)) {
            return false;
        }

        foreach ($array as $key => $value) {
            if (!is_numeric($key)) {
                return false;
            }
        }

        return true;
    }
}
