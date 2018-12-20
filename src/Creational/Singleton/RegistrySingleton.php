<?php
namespace DesignPattern\Creational\Singleton;

class RegistrySingleton
{
    private static $singleton;

    public static function getInstance(): self
    {
        $type = \get_called_class();

        if (!isset(self::$singleton[$type])) {
            self::$singleton[$type] = new static();
        }

        return self::$singleton[$type];
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
