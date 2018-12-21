<?php
namespace DesignPattern\Structural\Decorator;

abstract class AbstractDecorator implements FormatInterface
{
    protected $content;

    public function __construct(FormatInterface $content)
    {
        $this->content = $content;
    }
}
