<?php
namespace DesignPattern\Structural\Adapter;

class DashMessageAdapter implements DotInterface
{
    private $dash;

    public function __construct(DashInterface $dash)
    {
        $this->dash = $dash;
    }

    public function getResult(): string
    {
        return \str_replace('-', '.', $this->dash->show());
    }
}
