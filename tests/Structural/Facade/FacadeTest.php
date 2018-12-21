<?php
namespace Test\Structural\Facade;

use DesignPattern\Structural\Facade\Cpu;
use DesignPattern\Structural\Facade\Phone;
use DesignPattern\Structural\Facade\Screen;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testPhoneEnergyMode(): void
    {
        $phone = $this->getPhone();
        $phone->energyMode();
        $cpu    = $phone->getCpu();
        $screen = $phone->getScreen();
        $this->assertEquals(50, $cpu->getLimit());
        $this->assertEquals(50, $screen->getBrightness());
    }

    public function testPhoneHighPerformanceMode(): void
    {
        $phone = $this->getPhone();
        $phone->highPerformanceMode();
        $cpu    = $phone->getCpu();
        $screen = $phone->getScreen();
        $this->assertEquals(100, $cpu->getLimit());
        $this->assertEquals(70, $screen->getBrightness());
    }

    private function getPhone()
    {
        return new Phone(new Screen(), new Cpu());
    }
}
