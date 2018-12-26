<?php
namespace DesignPattern\Structural\Registry;

abstract class AbstractRegistry
{
    public const LOGGER = 'logger';

    private static $storedValues = [];

    private static $allowedValues = [
        self::LOGGER,
    ];

    public static function set(string $key, $value): void
    {
        if (self::notAllowedValues($key)) {
            throw new \InvalidArgumentException();
        }

        self::$storedValues[$key] = $value;
    }

    public static function get(string $key)
    {
        if (self::notAllowedValues($key) || self::notExistedValues($key)) {
            throw new \InvalidArgumentException();
        }

        return self::$storedValues[$key];
    }

    private static function notAllowedValues(string $key): bool
    {
        return !\in_array($key, self::$allowedValues);
    }

    private static function notExistedValues(string $key): bool
    {
        return !isset(self::$storedValues[$key]);
    }
}
