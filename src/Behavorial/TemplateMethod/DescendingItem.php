<?php
namespace DesignPattern\Behavorial\TemplateMethod;

class DescendingItem extends AbstractItem
{
    protected function sort(): void
    {
        \rsort($this->data);
    }
}
