<?php
namespace DesignPattern\Behavorial\Interpreter;

class BooleanValue implements ExpressionInterface
{
    private $first;

    public function __construct(bool $first)
    {
        $this->first = $first;
    }

    public function evaluate(): bool
    {
        return $this->first;
    }
}
