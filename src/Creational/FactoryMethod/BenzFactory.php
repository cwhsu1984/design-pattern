<?php
namespace DesignPattern\Creational\FactoryMethod;

class BenzFactory implements CarFactoryInterface
{
    public function createCar(): Car
    {
        return new Benz();
    }
}

