<?php
namespace DesignPattern\Structural\Decorator;

class UpperFormat extends AbstractDecorator
{
    public function format(): string
    {
        return \strtoupper($this->content->format());
    }
}
