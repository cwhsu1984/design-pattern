<?php
namespace DesignPattern\Structural\Composite;

class Picture implements GraphicInterface
{
    private $graphics;

    public function draw(): string
    {
        $result[] = 'picture';

        foreach ($this->graphics as $graph) {
            $result[] = $graph->draw();
        }

        return \implode(' ', $result);
    }

    public function add(GraphicInterface $graph): void
    {
        $this->graphics[] = $graph;
    }
}
