<?php
namespace DesignPattern\Structural\Proxy;

interface GraphicInterface
{
    public function draw(): string;

    public function getName(): string;
}
