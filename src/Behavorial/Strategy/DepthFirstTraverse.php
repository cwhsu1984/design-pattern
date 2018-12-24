<?php
namespace DesignPattern\Behavorial\Strategy;

class DepthFirstTraverse implements TraverseInterface
{
    public function traverse(Node $node): array
    {
        $result[] = $node->getData();
        $children = $node->getChildren();

        while ($children) {
            $child       = \array_shift($children);
            $childResult = $this->traverse($child);
            $result      = \array_merge($result, $childResult);
        }

        return $result;
    }
}
