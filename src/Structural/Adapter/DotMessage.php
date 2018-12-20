<?php
namespace DesignPattern\Structural\Adapter;

class DotMessage implements DotInterface
{
    private $message;

    public function __construct(string $message)
    {
        $this->message = \str_replace(' ', '.', $message);
    }

    public function getResult(): string
    {
        return $this->message;
    }
}
