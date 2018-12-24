<?php
namespace DesignPattern\Behavorial\Mediator;

class Vehicle extends AbstractColleague
{
    private $state;

    public function move(): void
    {
        $this->state = 'move';
    }

    public function slowDown(): void
    {
        $this->state = 'slowDown';
    }

    public function stop(): void
    {
        $this->state = 'stop';
    }

    public function getState(): string
    {
        return $this->state;
    }
}
