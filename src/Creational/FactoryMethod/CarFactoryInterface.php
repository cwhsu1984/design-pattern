<?php
namespace DesignPattern\Creational\FactoryMethod;

interface CarFactoryInterface
{
    public function createCar(): Car;
}
