<?php
namespace DesignPattern\Structural\Adapter;

class DashMessage implements DashInterface
{
    private $message;

    public function __construct(string $message)
    {
        $this->message = \str_replace(' ', '-', $message);
    }

    public function show(): string
    {
        return $this->message;
    }
}
