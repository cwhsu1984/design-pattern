<?php
namespace Test\Behavorial\Visitor;

use DesignPattern\Behavorial\Visitor\CatFood;
use DesignPattern\Behavorial\Visitor\DogFood;
use DesignPattern\Behavorial\Visitor\FoodPack;
use DesignPattern\Behavorial\Visitor\PriceVisitor;
use DesignPattern\Behavorial\Visitor\WeightVisitor;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    public function testPriceVisitor(): void
    {
        $pack    = $this->createFoodPack();
        $visitor = new PriceVisitor();
        $pack->accept($visitor);
        $result = $visitor->getTotal();
        $this->assertEquals(30, $result);
    }

    public function testWeightVisitor(): void
    {
        $pack    = $this->createFoodPack();
        $visitor = new WeightVisitor();
        $pack->accept($visitor);
        $result = $visitor->getTotal();
        $this->assertEquals(40, $result);
    }

    private function createFoodPack(): FoodPack
    {
        $pack = new FoodPack(0, 0);
        $pack->add(new CatFood(10, 20));
        $pack->add(new DogFood(20, 20));

        return $pack;
    }
}
