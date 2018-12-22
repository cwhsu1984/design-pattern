<?php
namespace DesignPattern\Behavorial\Command;

class Counter
{
    private $count;

    public function __construct()
    {
        $this->count = 0;
    }

    public function increase(): void
    {
        $this->count++;
    }

    public function decrease(): void
    {
        $this->count--;
    }

    public function state()
    {
        return $this->count;
    }
}
