<?php
namespace DesignPattern\More\EntityAttributeValue;

class Attribute
{
    private $values;

    private $name;

    public function __construct(string $name)
    {
        $this->values = new \SplObjectStorage();
        $this->name   = $name;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function addValue(Value $value): void
    {
        $this->values->attach($value);
    }

    public function getValues(): \SplObjectStorage
    {
        return $this->values;
    }
}
