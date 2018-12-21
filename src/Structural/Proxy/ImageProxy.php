<?php
namespace DesignPattern\Structural\Proxy;

class ImageProxy implements GraphicInterface
{
    private $image;

    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function draw(): string
    {
        if (!$this->image) {
            $this->image = new Image($this->name);
        }

        return $this->image->draw();
    }

    public function getName(): string
    {
        if (!$this->image) {
            return $this->name;
        }

        return $this->image->getName();
    }
}
