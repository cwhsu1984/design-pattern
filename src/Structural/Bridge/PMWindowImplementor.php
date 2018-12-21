<?php
namespace DesignPattern\Structural\Bridge;

class PMWindowImplementor implements WindowImplementorInterface
{
    public function devDrawText(): string
    {
        return 'PMWindow draw text';
    }

    public function devDrawLine(): string
    {
        return 'PMWindow draw line';
    }
}
