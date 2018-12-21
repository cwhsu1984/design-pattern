<?php
namespace DesignPattern\Structural\Bridge;

class XWindowImplementor implements WindowImplementorInterface
{
    public function devDrawText(): string
    {
        return 'XWindow draw text';
    }

    public function devDrawLine(): string
    {
        return 'XWindow draw line';
    }
}
