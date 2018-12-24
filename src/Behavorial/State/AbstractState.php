<?php
namespace DesignPattern\Behavorial\State;

abstract class AbstractState
{
    protected $light;

    public function __construct(TrafficLight $light)
    {
        $this->light = $light;
    }

    abstract public function switch(): string;
}
