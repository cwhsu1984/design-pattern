<?php
namespace DesignPattern\Structural\Proxy;

class Image implements GraphicInterface
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function draw(): string
    {
        return "draw $this->name";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
