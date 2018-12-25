<?php
namespace DesignPattern\Behavorial\Visitor;

interface VisitorInterface
{
    public function visitDogFood(DogFood $item);

    public function visitCatFood(CatFood $item);

    public function visitFoodPack(FoodPack $item);
}
