<?php
namespace DesignPattern\Behavorial\Strategy;

class BreadthFirstTraverse implements TraverseInterface
{
    public function traverse(Node $node): array
    {
        $result[] = $node->getData();
        $children = $node->getChildren();

        while ($children) {
            $child    = \array_shift($children);
            $children = \array_merge($children, $child->getChildren());
            $result[] = $child->getData();
        }

        return $result;
    }
}
