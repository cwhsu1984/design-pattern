<?php
namespace DesignPattern\Structural\Bridge;

abstract class AbstractWindow
{
    private $implementor;

    public function __construct(WindowImplementorInterface $implementor)
    {
        $this->implementor = $implementor;
    }

    public function drawText(): string
    {
        return $this->implementor->devDrawText();
    }

    public function drawRect(): string
    {
        return $this->implementor->devDrawLine();
    }
}
