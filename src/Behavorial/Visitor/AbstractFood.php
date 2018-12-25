<?php
namespace DesignPattern\Behavorial\Visitor;

abstract class AbstractFood
{
    private $price;

    private $weight;

    public function __construct(int $price, int $weight)
    {
        $this->price  = $price;
        $this->weight = $weight;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    abstract public function accept(VisitorInterface $visitor);
}
