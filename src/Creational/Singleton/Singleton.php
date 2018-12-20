<?php
namespace DesignPattern\Creational\Singleton;

class Singleton
{
    private static $singleton;

    public static function getInstance(): self
    {
        if (!static::$singleton) {
            static::$singleton = new self();
        }

        return static::$singleton;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup(): void
    {
    }
}
