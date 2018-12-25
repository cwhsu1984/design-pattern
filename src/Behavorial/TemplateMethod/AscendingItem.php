<?php
namespace DesignPattern\Behavorial\TemplateMethod;

class AscendingItem extends AbstractItem
{
    protected function sort(): void
    {
        \sort($this->data);
    }
}
