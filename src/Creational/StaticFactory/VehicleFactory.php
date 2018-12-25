<?php
namespace DesignPattern\Creational\StaticFactory;

class VehicleFactory implements VehicleInterface
{
    public static function createVehicle(string $type): VehicleInterface
    {
        if ($type === 'car') {
            return new Car();
        }

        if ($type === 'truck') {
            return new Truck();
        }

        throw new \InvalidArgumentException();
    }
}
