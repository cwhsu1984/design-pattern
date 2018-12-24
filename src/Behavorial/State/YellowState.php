<?php
namespace DesignPattern\Behavorial\State;

class YellowState extends AbstractState
{
    public function switch(): string
    {
        $this->light->setState(new RedState($this->light));

        return 'yellow';
    }
}
