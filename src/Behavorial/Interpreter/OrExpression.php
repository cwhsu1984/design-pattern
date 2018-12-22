<?php
namespace DesignPattern\Behavorial\Interpreter;

class OrExpression implements ExpressionInterface
{
    private $first;

    private $second;

    public function __construct(ExpressionInterface $first, ExpressionInterface $second)
    {
        $this->first  = $first;
        $this->second = $second;
    }

    public function evaluate(): bool
    {
        return $this->first->evaluate() || $this->second->evaluate();
    }
}
