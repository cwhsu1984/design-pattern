<?php
namespace DesignPattern\Behavorial\Memento;

class Originator
{
    private $state;

    public function setMemento(Memento $memento): void
    {
        $this->state = $memento->getState();
    }

    public function createMemento(): Memento
    {
        return new Memento($this->state);
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }
}
