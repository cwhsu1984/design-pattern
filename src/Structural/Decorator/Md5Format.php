<?php
namespace DesignPattern\Structural\Decorator;

class Md5Format extends AbstractDecorator
{
    public function format(): string
    {
        return \md5($this->content->format());
    }
}
