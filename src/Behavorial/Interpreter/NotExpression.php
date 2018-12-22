<?php
namespace DesignPattern\Behavorial\Interpreter;

class NotExpression implements ExpressionInterface
{
    private $first;

    public function __construct(ExpressionInterface $first)
    {
        $this->first = $first;
    }

    public function evaluate(): bool
    {
        return !$this->first->evaluate();
    }
}
