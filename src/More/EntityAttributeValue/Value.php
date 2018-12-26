<?php
namespace DesignPattern\More\EntityAttributeValue;

class Value
{
    private $attribute;

    private $name;

    public function __construct(Attribute $attribute, string $name)
    {
        $this->name      = $name;
        $this->attribute = $attribute;

        $attribute->addValue($this);
    }

    public function __toString(): string
    {
        return "{$this->attribute}: {$this->name}";
    }
}
