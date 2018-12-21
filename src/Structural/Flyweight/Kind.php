<?php
namespace DesignPattern\Structural\Flyweight;

class Kind
{
    public const RACE_HUMAN = 'human';

    public const RACE_ORC = 'orc';

    public const TYPE_SOLDIER = 'soldier';

    public const TYPE_ARCHER = 'archer';

    private $race;

    private $type;

    public function __construct(string $race, string $type)
    {
        $this->race = $race;
        $this->type = $type;
    }
}
