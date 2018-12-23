<?php
namespace DesignPattern\Behavorial\Iterator;

class MyListTraverser
{
    private $list;

    public function __construct(ListInterface $list)
    {
        $this->list = $list;
    }

    public function traverse(): string
    {
        $iterator = $this->list->getIterator();

        while ($iterator->hasNext()) {
            $result[] = $iterator->current();
            $iterator->next();
        }

        return \implode(',', $result);
    }
}
