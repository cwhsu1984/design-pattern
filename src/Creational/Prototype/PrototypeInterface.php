<?php
namespace DesignPattern\Creational\Prototype;

interface PrototypeInterface
{
    public function clone(): self;
}
