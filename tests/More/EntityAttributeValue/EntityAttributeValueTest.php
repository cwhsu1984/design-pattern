<?php
namespace Test\More\EntityAttributeValue;

use DesignPattern\More\EntityAttributeValue\Attribute;
use DesignPattern\More\EntityAttributeValue\Entity;
use DesignPattern\More\EntityAttributeValue\Value;
use PHPUnit\Framework\TestCase;

class EntityAttributeValueTest extends TestCase
{
    public function testAddAttributeToEntity(): void
    {
        $colorAttribute = new Attribute('color');
        $colorBlack     = new Value($colorAttribute, 'black');
        $colorWhite     = new Value($colorAttribute, 'white');

        $equipmentAttribute = new Attribute('equipment');
        $equipmentTire      = new Value($equipmentAttribute, 'Tire');
        $equipmentAbs       = new Value($equipmentAttribute, 'Abs');

        $entity = new Entity('Car', [$colorBlack, $colorWhite, $equipmentTire, $equipmentAbs]);

        $this->assertEquals('Car, color: black, color: white, equipment: Tire, equipment: Abs', (string) $entity);
    }
}
