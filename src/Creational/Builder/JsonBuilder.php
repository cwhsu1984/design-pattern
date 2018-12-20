<?php
namespace DesignPattern\Creational\Builder;

class JsonBuilder implements BuilderInterface
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
        return \json_encode(['title' => $this->title, 'message' => $this->message]);
    }
}
