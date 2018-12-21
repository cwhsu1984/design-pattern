<?php
namespace DesignPattern\Structural\Flyweight;

class KindFactory
{
    private $kinds;

    public function createKind(string $race, string $type): Kind
    {
        $unique = $race . $type;

        if (!isset($this->kinds[$unique])) {
            $this->kinds[$unique] = new Kind($race, $type);
        }

        return $this->kinds[$unique];
    }
}
