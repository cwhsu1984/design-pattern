<?php
namespace DesignPattern\Behavorial\Memento;

use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    public function testCreateMemento(): void
    {
        $originator = new Originator();
        $originator->setState('first');
        $careTaker = new CareTaker();
        $memento   = $originator->createMemento();
        $result    = $memento->getState();
        $this->assertEquals('first', $result);
    }

    public function testSetMementoRestoreOriginalState(): void
    {
        $originator = new Originator();
        $originator->setState('first');
        $careTaker = new CareTaker();
        $memento   = $originator->createMemento();
        $careTaker->add($memento);
        $originator->setState('second');
        $originator->setMemento($careTaker->remove());
        $memento = $originator->createMemento();
        $result  = $memento->getState();
        $this->assertEquals('first', $result);
    }
}
