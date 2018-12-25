<?php
namespace DesignPattern\Behavorial\Visitor;

class PriceVisitor implements VisitorInterface
{
    private $total;

    public function visitFoodPack(FoodPack $item): void
    {
        $this->total += $item->getPrice();
    }

    public function visitCatFood(CatFood $item): void
    {
        $this->total += $item->getPrice();
    }

    public function visitDogFood(DogFood $item): void
    {
        $this->total += $item->getPrice();
    }

    public function getTotal(): int
    {
        return $this->total;
    }
}
