<?php
namespace DesignPattern\Structural\Decorator;

class Text implements FormatInterface
{
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function format(): string
    {
        return $this->content;
    }
}
