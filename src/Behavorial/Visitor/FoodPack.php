<?php
namespace DesignPattern\Behavorial\Visitor;

class FoodPack extends AbstractFood
{
    private $pack;

    public function add(AbstractFood $food): void
    {
        $this->pack[] = $food;
    }

    public function accept(VisitorInterface $visitor): void
    {
        foreach ($this->pack as $pack) {
            $pack->accept($visitor);
        }
    }
}
