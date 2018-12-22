<?php
namespace Test\Behavorial\Command;

use DesignPattern\Behavorial\Command\Counter;
use DesignPattern\Behavorial\Command\DecreaseCommand;
use DesignPattern\Behavorial\Command\IncreaseCommand;
use DesignPattern\Behavorial\Command\Person;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testIncreaseCommandIncreaseCounter(): void
    {
        $counter = new Counter();
        $person  = new Person();
        $person->add(new IncreaseCommand($counter));
        $person->work();
        $result = $counter->state();
        $this->assertEquals(1, $result);
    }

    public function testDecreaseCommandDecreaseCounter(): void
    {
        $counter = new Counter();
        $person  = new Person();
        $person->add(new DecreaseCommand($counter));
        $person->work();
        $result = $counter->state();
        $this->assertEquals(-1, $result);
    }

    public function testIncreaseAndDecreaseCommandChangeCounter(): void
    {
        $counter = new Counter();
        $person  = new Person();
        $person->add(new DecreaseCommand($counter));
        $person->add(new IncreaseCommand($counter));
        $person->work();
        $result = $counter->state();
        $this->assertEquals(0, $result);
    }
}
