<?php
namespace DesignPattern\Behavorial\State;

class GreenState extends AbstractState
{
    public function switch(): string
    {
        $this->light->setState(new YellowState($this->light));

        return 'green';
    }
}
