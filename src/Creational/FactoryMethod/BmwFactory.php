<?php
namespace DesignPattern\Creational\FactoryMethod;

class BmwFactory implements CarFactoryInterface
{
    public function createCar(): Car
    {
        return new Bmw();
    }
}
