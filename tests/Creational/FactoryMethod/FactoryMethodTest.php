<?php
namespace Tests\Creational\FactoryMethod;

use DesignPattern\Creational\FactoryMethod\Bmw;
use DesignPattern\Creational\FactoryMethod\Benz;
use DesignPattern\Creational\FactoryMethod\BenzFactory;
use DesignPattern\Creational\FactoryMethod\BmwFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCreateBmw(): void
    {
        $car = (new BmwFactory())->createCar();
        $this->assertInstanceof(Bmw::class, $car);
    }

    public function testCreateBenz(): void
    {
        $car = (new BenzFactory())->createCar();
        $this->assertInstanceof(Benz::class, $car);
    }
}
