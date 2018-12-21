<?php
namespace DesignPattern\Structural\Composite;

class Text implements GraphicInterface
{
    public function draw(): string
    {
        return 'text';
    }
}
