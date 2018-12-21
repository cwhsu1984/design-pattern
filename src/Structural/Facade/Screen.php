<?php
namespace DesignPattern\Structural\Facade;

class Screen
{
    private $brightness;

    public function setBrightness(int $brightness): void
    {
        $this->brightness = $brightness;
    }

    public function getBrightness(): int
    {
        return $this->brightness;
    }
}
