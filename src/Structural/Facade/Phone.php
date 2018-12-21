<?php
namespace DesignPattern\Structural\Facade;

class Phone
{
    private $screen;

    private $cpu;

    public function __construct(Screen $screen, Cpu $cpu)
    {
        $this->screen = $screen;
        $this->cpu    = $cpu;
    }

    public function energyMode(): void
    {
        $this->screen->setBrightness(50);
        $this->cpu->setLimit(50);
    }

    public function highPerformanceMode(): void
    {
        $this->screen->setBrightness(70);
        $this->cpu->setLimit(100);
    }

    public function getCpu(): Cpu
    {
        return $this->cpu;
    }

    public function getScreen(): Screen
    {
        return $this->screen;
    }
}
