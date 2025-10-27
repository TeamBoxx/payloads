<?php

namespace Thestoragescanner\Payloads\Enums;

enum RoleEnum: string
{
    case ADMIN = 'admin';
    case PROVIDER = 'provider';
    case CONTENT = 'content';

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }

    public function label(): string
    {
        return match ($this) {
            self::ADMIN => 'Admin',
            self::PROVIDER => 'Provider',
            self::CONTENT => 'Content',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::ADMIN => 'warning',
            default => 'info'
        };
    }

    public static function options(): array
    {
        $cases = [];

        foreach (self::cases() as $case) {
            $cases[$case->value] = $case->label();
        }

        return $cases;
    }
}
