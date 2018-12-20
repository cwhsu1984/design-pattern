<?php
namespace DesignPattern\Creational\Prototype;

class Benz implements PrototypeInterface
{
    public function clone(): PrototypeInterface
    {
        return clone $this;
    }
}
