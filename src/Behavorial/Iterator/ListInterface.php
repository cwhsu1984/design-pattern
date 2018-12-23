<?php
namespace DesignPattern\Behavorial\Iterator;

interface ListInterface
{
    public function add(int $num);

    public function remove(int $pos);

    public function count(): int;
}
