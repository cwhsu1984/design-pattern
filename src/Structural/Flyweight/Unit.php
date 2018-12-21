<?php
namespace DesignPattern\Structural\Flyweight;

class Unit
{
    private $kind;

    private $health;

    private $color;

    public function __construct(Kind $kind, int $health, string $color)
    {
        $this->kind   = $kind;
        $this->health = $health;
        $this->color  = $color;
    }

    public function getKind(): Kind
    {
        return $this->kind;
    }
}
