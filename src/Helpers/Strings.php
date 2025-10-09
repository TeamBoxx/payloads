<?php

namespace Thestoragescanner\Payloads\Helpers;

class Strings
{
    public static function toSnakeCase(string $string): string
    {
        $string = preg_replace('/([a-z])([A-Z])/', '$1 $2', $string);
        $string = preg_replace('/[_\-\s]+/', '_', strtolower((string) $string));

        return $string;
    }

    public static function toCamelCase($string): string
    {
        $string = lcfirst(static::toPascalCase($string));

        return $string;
    }

    public static function toPascalCase($string): string
    {
        $string = preg_replace('/[-_\s]+/', ' ', (string) $string);
        $string = ucwords($string);
        $string = str_replace(' ', '', $string);

        return $string;
    }
}
