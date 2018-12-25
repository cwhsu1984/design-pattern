<?php
namespace Tests\Creational\SimpleFactory;

use DesignPattern\Creational\SimpleFactory\Car;
use DesignPattern\Creational\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testSimpleFactoryCreateCar(): void
    {
        $factory = new SimpleFactory();
        $result  = $factory->createCar();
        $this->assertInstanceOf(Car::class, $result);
    }
}
