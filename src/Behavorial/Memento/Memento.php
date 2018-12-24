<?php
namespace DesignPattern\Behavorial\Memento;

class Memento
{
    private $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function getState(): string
    {
        return $this->state;
    }
}
