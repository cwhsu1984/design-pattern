<?php
namespace DesignPattern\Behavorial\Strategy;

class Tree
{
    private $root;

    private $strategy;

    public function __construct(Node $root)
    {
        $this->root = $root;
    }

    public function setTraverse(TraverseInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function traverse(): array
    {
        return $this->strategy->traverse($this->root);
    }
}
