<?php
namespace DesignPattern\Behavorial\Mediator;

use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testTrafficLightRed(): void
    {
        $light     = new TrafficLight();
        $passenger = new Passenger();
        $vehicle   = new Vehicle();
        $mediator  = new TrafficMediator($light, $vehicle, $passenger);
        $light->changeState(TrafficLight::LIGHT_RED);
        $result = $passenger->getState();
        $this->assertEquals('move', $result);
        $result = $vehicle->getState();
        $this->assertEquals('stop', $result);
    }

    public function testTrafficLightYellow(): void
    {
        $light     = new TrafficLight();
        $passenger = new Passenger();
        $vehicle   = new Vehicle();
        $mediator  = new TrafficMediator($light, $vehicle, $passenger);
        $light->changeState(TrafficLight::LIGHT_YELLOW);
        $result = $passenger->getState();
        $this->assertEquals('stop', $result);
        $result = $vehicle->getState();
        $this->assertEquals('slowDown', $result);
    }

    public function testTrafficLightGreen(): void
    {
        $light     = new TrafficLight();
        $passenger = new Passenger();
        $vehicle   = new Vehicle();
        $mediator  = new TrafficMediator($light, $vehicle, $passenger);
        $light->changeState(TrafficLight::LIGHT_GREEN);
        $result = $passenger->getState();
        $this->assertEquals('stop', $result);
        $result = $vehicle->getState();
        $this->assertEquals('move', $result);
    }
}
