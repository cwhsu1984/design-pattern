<?php
namespace Tests\Creational\Prototype;

use DesignPattern\Creational\Prototype\Bmw;
use DesignPattern\Creational\Prototype\Benz;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCloneBmw()
    {
        $car = (new Bmw())->clone();
        $this->assertInstanceof(Bmw::class, $car);
    }

    public function testCloneBenz()
    {
        $car = (new Benz())->clone();
        $this->assertInstanceof(Benz::class, $car);
    }
}
