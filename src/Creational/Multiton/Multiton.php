<?php
namespace DesignPattern\Creational\Multiton;

class Multiton
{
    const INSTANCE1 = 1;
    const INSTANCE2 = 2;

    private static $instances;

    private static function valid(int $num): bool
    {
        return $num === self::INSTANCE1 || $num === self::INSTANCE2;
    }

    public static function createInstance(int $num): Multiton
    {
        if (!self::valid($num)) {
            throw new \InvalidArgumentException("You can only use INSTANCE1 or INSTANCE2");
        }

        if (!isset(self::$instances[$num])) {
            self::$instances[$num] = new self();
        }

        return self::$instances[$num];
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
