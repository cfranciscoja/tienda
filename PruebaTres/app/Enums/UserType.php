<?php

namespace App\Enums;

//use BenSampo\Enum\Enum;

/*
enum UserType : int
{
  case OptionOne = 0;
  case OptionTwo = 1;
  case OptionThree = 2;
}
*/

enum UserType: string
{
    case Admin = 'admin';
    case User = 'user';

    public static function forMigration(): array {
        return collect(self::cases())
            ->map(function ($enum) {
                if (property_exists($enum, "value")) return $enum->value;
                return $enum->name;
            })
            ->values()
            ->toArray();
    }
}
