<?php
namespace DesignPattern\Behavorial\Visitor;

class CatFood extends AbstractFood
{
    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitCatFood($this);
    }
}
