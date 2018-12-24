<?php
namespace DesignPattern\Behavorial\Mediator;

class TrafficLight extends AbstractColleague
{
    public const LIGHT_RED = 'RED';

    public const LIGHT_YELLOW = 'YELLOW';

    public const LIGHT_GREEN = 'GREEN';

    private $state;

    public function changeState(string $state): void
    {
        $this->state = $state;
        $this->mediator->change($this);
    }

    public function getState(): string
    {
        return $this->state;
    }
}
