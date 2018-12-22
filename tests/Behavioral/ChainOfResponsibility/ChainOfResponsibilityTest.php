<?php
namespace Test\Behavorial\ChainOfResponsibility;

use DesignPattern\Behavorial\ChainOfResponsibility\AnimalFeeder;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    public function testAnimalFeederFeedAllAnimals(): void
    {
        $animals = ['tiger', 'elephant', 'monkey', 'tiger'];
        $keeper  = new AnimalFeeder('tiger');
        $keeper->setNext(new AnimalFeeder('elephant'));
        $keeper->setNext(new AnimalFeeder('monkey'));
        $result = $keeper->feed($animals);
        $this->assertEquals([], $result);
    }

    public function testAnimalFeederFeedSomeAnimals(): void
    {
        $animals = ['tiger', 'elephant', 'monkey', 'tiger'];
        $keeper  = new AnimalFeeder('tiger');
        $keeper->setNext(new AnimalFeeder('elephant'));
        $result = $keeper->feed($animals);
        $this->assertContains('monkey', $result);
    }

    public function testAnimalFeederFeedNoAnimals(): void
    {
        $animals = ['tiger', 'elephant', 'monkey', 'tiger'];
        $keeper  = new AnimalFeeder('shark');
        $result  = $keeper->feed($animals);
        $this->assertContains('tiger', $result);
        $this->assertContains('elephant', $result);
        $this->assertContains('monkey', $result);
    }
}
