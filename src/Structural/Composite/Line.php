<?php
namespace DesignPattern\Structural\Composite;

class Line implements GraphicInterface
{
    public function draw(): string
    {
        return 'line';
    }
}
