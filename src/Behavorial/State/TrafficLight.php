<?php
namespace DesignPattern\Behavorial\State;

class TrafficLight
{
    private $state;

    public function __construct()
    {
        $this->state = new RedState($this);
    }

    public function switch(): string
    {
        return $this->state->switch();
    }

    public function setState(AbstractState $state): void
    {
        $this->state = $state;
    }
}
