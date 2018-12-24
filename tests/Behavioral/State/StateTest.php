<?php
namespace Test\Behavorial\State;

use DesignPattern\Behavorial\State\TrafficLight;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testTrafficLightSwitchToRed(): void
    {
        $light  = new TrafficLight();
        $result = $light->switch();
        $this->assertEquals('red', $result);
    }

    public function testTrafficLightSwitchToGreen(): void
    {
        $light = new TrafficLight();
        $light->switch();
        $result = $light->switch();
        $this->assertEquals('green', $result);
    }

    public function testTrafficLightSwitchToYellow(): void
    {
        $light = new TrafficLight();
        $light->switch();
        $light->switch();
        $result = $light->switch();
        $this->assertEquals('yellow', $result);
    }

    public function testTrafficLightSwitchBackToRed(): void
    {
        $light = new TrafficLight();
        $light->switch();
        $light->switch();
        $light->switch();
        $result = $light->switch();
        $this->assertEquals('red', $result);
    }
}
