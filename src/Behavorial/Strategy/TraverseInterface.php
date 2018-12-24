<?php
namespace DesignPattern\Behavorial\Strategy;

interface TraverseInterface
{
    public function traverse(Node $node): array;
}
