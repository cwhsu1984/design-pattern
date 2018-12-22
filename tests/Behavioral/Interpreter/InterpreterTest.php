<?php
namespace Test\Behavorial\Interpreter;

use DesignPattern\Behavorial\Interpreter\AndExpression;
use DesignPattern\Behavorial\Interpreter\BooleanValue;
use DesignPattern\Behavorial\Interpreter\NotExpression;
use DesignPattern\Behavorial\Interpreter\OrExpression;
use PHPUnit\Framework\TestCase;

class InterpreterTest extends TestCase
{
    public function testBooleanValueTrue(): void
    {
        $result = (new BooleanValue(true))->evaluate();
        $this->assertTrue($result);
    }

    public function testBooleanValueFalse(): void
    {
        $result = (new BooleanValue(false))->evaluate();
        $this->assertFalse($result);
    }

    public function testAndExpression(): void
    {
        $true  = (new AndExpression(new BooleanValue(true), new BooleanValue(true)))->evaluate();
        $false = (new AndExpression(new BooleanValue(false), new BooleanValue(false)))->evaluate();
        $this->assertTrue($true);
        $this->assertFalse($false);
    }

    public function testOrExpression(): void
    {
        $true  = (new OrExpression(new BooleanValue(true), new BooleanValue(false)))->evaluate();
        $false = (new OrExpression(new BooleanValue(false), new BooleanValue(false)))->evaluate();
        $this->assertTrue($true);
        $this->assertFalse($false);
    }

    public function testNotExpression(): void
    {
        $true  = (new NotExpression(new BooleanValue(false)))->evaluate();
        $false = (new NotExpression(new BooleanValue(true)))->evaluate();
        $this->assertTrue($true);
        $this->assertFalse($false);
    }

    public function testMixExpression(): void
    {
        $true = (new NotExpression(
            new OrExpression(
                new AndExpression(new BooleanValue(true), new BooleanValue(false)),
                new BooleanValue(false)
            )
        ))->evaluate();
        $this->assertTrue($true);
    }
}
