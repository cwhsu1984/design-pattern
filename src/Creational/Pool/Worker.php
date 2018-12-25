<?php
namespace DesignPattern\Creational\Pool;

class Worker
{
    public function negative(int $value): int
    {
        return -$value;
    }
}
