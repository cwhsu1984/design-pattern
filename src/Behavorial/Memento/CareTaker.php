<?php
namespace DesignPattern\Behavorial\Memento;

class CareTaker
{
    private $mementos;

    public function add(Memento $memento): void
    {
        $this->mementos[] = $memento;
    }

    public function remove(): Memento
    {
        return \array_pop($this->mementos);
    }
}
