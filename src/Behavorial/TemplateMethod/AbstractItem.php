<?php
namespace DesignPattern\Behavorial\TemplateMethod;

abstract class AbstractItem
{
    protected $data;

    public function process(string $data)
    {
        $this->data = $data;

        $this->prepare();

        $this->sort();

        return $this->data;
    }

    abstract protected function sort();

    private function prepare(): void
    {
        $this->data = \explode(',', $this->data);
    }
}
