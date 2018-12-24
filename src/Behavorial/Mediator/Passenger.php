<?php
namespace DesignPattern\Behavorial\Mediator;

class Passenger extends AbstractColleague
{
    private $state;

    public function move(): void
    {
        $this->state = 'move';
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
