<?php
namespace DesignPattern\Structural\Bridge;

interface WindowImplementorInterface
{
    public function devDrawText(): string;

    public function devDrawLine(): string;
}
