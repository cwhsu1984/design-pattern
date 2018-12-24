<?php
namespace DesignPattern\Behavorial\Strategy;

class Node
{
    private $data;

    private $parent;

    private $children;

    public function __construct($parent, $data, $children = [])
    {
        $this->parent   = $parent;
        $this->data     = $data;
        $this->children = $children;
    }

    public function add(self $node): void
    {
        $this->children[] = $node;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function getData(): int
    {
        return $this->data;
    }
}
