<?php
namespace Test\Behavorial\Specification;

use DesignPattern\Behavorial\Specification\AndSpecification;
use DesignPattern\Behavorial\Specification\Item;
use DesignPattern\Behavorial\Specification\NotSpecification;
use DesignPattern\Behavorial\Specification\OrSpecification;
use DesignPattern\Behavorial\Specification\PriceSpecification;
use PHPUnit\Framework\TestCase;

class SpecificationTest extends TestCase
{
    public function testOrSpecification(): void
    {
        $specification = new OrSpecification(new PriceSpecification(10, 20), new PriceSpecification(30, 40));
        $this->assertTrue($specification->isSatisfiedBy(new Item(15)));
        $this->assertFalse($specification->isSatisfiedBy(new Item(22)));
        $this->assertTrue($specification->isSatisfiedBy(new Item(31)));
    }

    public function testAndSpecification(): void
    {
        $specification = new AndSpecification(new PriceSpecification(10, 20), new PriceSpecification(15, 30));
        $this->assertTrue($specification->isSatisfiedBy(new Item(18)));
        $this->assertFalse($specification->isSatisfiedBy(new Item(11)));
    }

    public function testNotSpecification(): void
    {
        $specification = new NotSpecification(new PriceSpecification(10, 20));
        $this->assertFalse($specification->isSatisfiedBy(new Item(18)));
        $this->assertTrue($specification->isSatisfiedBy(new Item(21)));
    }
}
