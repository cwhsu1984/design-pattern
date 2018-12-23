<?php
namespace DesignPattern\Behavorial\Iterator;

class MyListIterator implements IteratorInterface
{
    private $elements;

    private $position;

    public function __construct(array $elements)
    {
        $this->position = 0;
        $this->elements = $elements;
    }

    public function first(): void
    {
        $this->position = 0;
    }

    public function next(): void
    {
        $this->position++;
    }

    public function hasNext()
    {
        return $this->position < \count($this->elements);
    }

    public function current()
    {
        return $this->elements[$this->position];
    }

    public function previous(): void
    {
        $this->position--;
    }
}
