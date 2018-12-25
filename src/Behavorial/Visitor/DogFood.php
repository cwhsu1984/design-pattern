<?php
namespace DesignPattern\Behavorial\Visitor;

class DogFood extends AbstractFood
{
    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitDogFood($this);
    }
}
