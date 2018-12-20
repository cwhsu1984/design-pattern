<?php
namespace DesignPattern\Creational\Prototype;

class Bmw implements PrototypeInterface
{
    public function clone(): PrototypeInterface
    {
        return clone $this;
    }
}
