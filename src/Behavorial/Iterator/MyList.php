<?php
namespace DesignPattern\Behavorial\Iterator;

class MyList implements ListInterface
{
    private $elements;

    public function __construct()
    {
        $this->elements = [];
    }

    public function add(int $num): void
    {
        $this->elements[] = $num;
    }

    public function remove(int $pos): void
    {
        if (empty($this->elements)) {
            throw new \UnderflowException();
        }

        if (!isset($this->elements[$pos])) {
            throw new \OutOfBoundsException();
        }

        \array_splice($this->elements, $pos, 1);
    }

    public function count(): int
    {
        return \count($this->elements);
    }

    public function getIterator(): IteratorInterface
    {
        return new MyListIterator($this->elements);
    }
}
