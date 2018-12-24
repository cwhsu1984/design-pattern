<?php
namespace DesignPattern\Behavorial\State;

class RedState extends AbstractState
{
    public function switch(): string
    {
        $this->light->setState(new GreenState($this->light));

        return 'red';
    }
}
