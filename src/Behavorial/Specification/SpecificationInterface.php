<?php
namespace DesignPattern\Behavorial\Specification;

interface SpecificationInterface
{
    public function isSatisfiedBy(Item $item): bool;
}
