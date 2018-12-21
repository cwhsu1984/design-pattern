<?php
namespace Test\Structural\Flyweight;

use DesignPattern\Structural\Flyweight\Kind;
use DesignPattern\Structural\Flyweight\KindFactory;
use DesignPattern\Structural\Flyweight\Unit;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    public function testFlyweightHumanSoldier(): void
    {
        $factory = new KindFactory();
        $kind1   = $factory->createKind(Kind::RACE_HUMAN, Kind::TYPE_SOLDIER);
        $unit1   = new Unit($kind1, 100, 'red');
        $kind2   = $factory->createKind(Kind::RACE_HUMAN, Kind::TYPE_SOLDIER);
        $unit2   = new Unit($kind2, 100, 'blue');
        $this->assertSame($kind1, $kind2);
    }

    public function testFlyweightHumanArcher(): void
    {
        $factory = new KindFactory();
        $kind1   = $factory->createKind(Kind::RACE_HUMAN, Kind::TYPE_ARCHER);
        $unit1   = new Unit($kind1, 100, 'red');
        $kind2   = $factory->createKind(Kind::RACE_HUMAN, Kind::TYPE_ARCHER);
        $unit2   = new Unit($kind2, 100, 'blue');
        $this->assertSame($kind1, $kind2);
    }

    public function testFlyweightOrcSoldier(): void
    {
        $factory = new KindFactory();
        $kind1   = $factory->createKind(Kind::RACE_ORC, Kind::TYPE_SOLDIER);
        $unit1   = new Unit($kind1, 100, 'red');
        $kind2   = $factory->createKind(Kind::RACE_ORC, Kind::TYPE_SOLDIER);
        $unit2   = new Unit($kind2, 100, 'blue');
        $this->assertSame($kind1, $kind2);
    }

    public function testFlyweightOrcArcher(): void
    {
        $factory = new KindFactory();
        $kind1   = $factory->createKind(Kind::RACE_ORC, Kind::TYPE_ARCHER);
        $unit1   = new Unit($kind1, 100, 'red');
        $kind2   = $factory->createKind(Kind::RACE_ORC, Kind::TYPE_ARCHER);
        $unit2   = new Unit($kind2, 100, 'blue');
        $this->assertSame($kind1, $kind2);
    }
}
