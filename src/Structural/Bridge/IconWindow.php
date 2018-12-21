<?php
namespace DesignPattern\Structural\Bridge;

class IconWindow extends AbstractWindow
{
    public function drawBorder(): string
    {
        return $this->drawRect() . $this->drawText();
    }
}
