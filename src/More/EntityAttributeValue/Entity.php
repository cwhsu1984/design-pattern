<?php
namespace DesignPattern\More\EntityAttributeValue;

class Entity
{
    private $values;

    private $name;

    public function __construct(string $name, $values)
    {
        $this->values = new \SplObjectStorage();
        $this->name   = $name;

        foreach ($values as $value) {
            $this->values->attach($value);
        }
    }

    public function __toString(): string
    {
        $text = [$this->name];

        foreach ($this->values as $value) {
            $text[] = (string) $value;
        }

        return \implode(', ', $text);
    }
}
