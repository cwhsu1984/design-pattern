<?php
namespace DesignPattern\Structural\Facade;

class Cpu
{
    private $limit;

    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
