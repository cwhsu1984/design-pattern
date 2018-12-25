<?php
namespace Tests\Creational\Multiton;

use DesignPattern\Creational\Multiton\Multiton;
use PHPUnit\Framework\TestCase;

class MultitonTest extends TestCase
{
    public function testMultiton1()
    {
        $result = Multiton::createInstance(Multiton::INSTANCE1);
        $this->assertInstanceOf(Multiton::class, $result);
    }

    public function testMultiton2()
    {
        $result = Multiton::createInstance(Multiton::INSTANCE2);
        $this->assertInstanceOf(Multiton::class, $result);
    }

    public function testMultiton1SameInstance()
    {
        $first = Multiton::createInstance(Multiton::INSTANCE1);
        $second = Multiton::createInstance(Multiton::INSTANCE1);
        $this->assertSame($first, $second);
    }

    public function testMultiton2SameInstance()
    {
        $first = Multiton::createInstance(Multiton::INSTANCE2);
        $second = Multiton::createInstance(Multiton::INSTANCE2);
        $this->assertSame($first, $second);
    }

    public function testCreateMultitonThrowInvalidArgumentException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $first = Multiton::createInstance(3);
    }
}
