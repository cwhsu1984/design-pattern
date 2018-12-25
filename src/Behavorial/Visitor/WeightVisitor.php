<?php
namespace DesignPattern\Behavorial\Visitor;

class WeightVisitor implements VisitorInterface
{
    private $total;

    public function visitFoodPack(FoodPack $item): void
    {
        $this->total += $item->getWeight();
    }

    public function visitCatFood(CatFood $item): void
    {
        $this->total += $item->getWeight();
    }

    public function visitDogFood(DogFood $item): void
    {
        $this->total += $item->getWeight();
    }

    public function getTotal(): int
    {
        return $this->total;
    }
}
