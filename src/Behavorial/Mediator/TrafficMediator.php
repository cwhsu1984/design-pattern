<?php
namespace DesignPattern\Behavorial\Mediator;

class TrafficMediator implements MediatorInterface
{
    private $light;

    private $vehicle;

    private $passenger;

    public function __construct(AbstractColleague $light, AbstractColleague $vehicle, AbstractColleague $passenger)
    {
        $this->light     = $light;
        $this->vehicle   = $vehicle;
        $this->passenger = $passenger;
        $this->light->setMediator($this);
        $this->vehicle->setMediator($this);
        $this->passenger->setMediator($this);
    }

    public function change(AbstractColleague $colleague): void
    {
        if ($colleague instanceof TrafficLight) {
            $this->changeVehicleAndPassenger();
        }
    }

    private function changeVehicleAndPassenger(): void
    {
        switch ($this->light->getState()) {
            case TrafficLight::LIGHT_RED:
                $this->vehicle->stop();
                $this->passenger->move();

                break;
            case TrafficLight::LIGHT_GREEN:
                $this->vehicle->move();
                $this->passenger->stop();

                break;
            case TrafficLight::LIGHT_YELLOW:
                $this->vehicle->slowDown();
                $this->passenger->stop();

                break;
            default:
                $this->vehicle->slowDown();
                $this->passenger->stop();
        }
    }
}
