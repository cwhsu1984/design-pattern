<?php
namespace DesignPattern\Behavorial\Iterator;

interface IteratorInterface
{
    public function first();

    public function next();

    public function hasNext();

    public function current();

    public function previous();
}
