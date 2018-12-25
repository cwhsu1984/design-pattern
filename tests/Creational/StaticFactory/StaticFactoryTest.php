<?php
namespace Test\Creational\StaticFactory;

use DesignPattern\Creational\StaticFactory\Car;
use DesignPattern\Creational\StaticFactory\Truck;
use DesignPattern\Creational\StaticFactory\VehicleFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testFactoryCreateCar(): void
    {
        $factory = new VehicleFactory();
        $result  = $factory->createVehicle('car');
        $this->assertInstanceOf(Car::class, $result);
    }

    public function testFactoryCreateTruck(): void
    {
        $factory = new VehicleFactory();
        $result  = $factory->createVehicle('truck');
        $this->assertInstanceOf(Truck::class, $result);
    }

    public function testFactoryCreateBicycleThrowInvalidArugementException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $factory = new VehicleFactory();
        $result  = $factory->createVehicle('bicycle');
    }
}
