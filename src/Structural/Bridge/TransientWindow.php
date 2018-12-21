<?php
namespace DesignPattern\Structural\Bridge;

class TransientWindow extends AbstractWindow
{
    public function drawCloseBox(): string
    {
        return $this->drawRect();
    }
}
