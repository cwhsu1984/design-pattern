<?php
namespace DesignPattern\Creational\Builder;

class TextBuilder implements BuilderInterface
{
    private $title;

    private $message;

    public function setTitle(): void
    {
        $this->title = 'hello';
    }

    public function setMessage(): void
    {
        $this->message = 'world';
    }

    public function getResult(): string
    {
        return "title: {$this->title} message: {$this->message}";
    }
}
