<?php
namespace Test\Behavorial\Strategy;

use DesignPattern\Behavorial\Strategy\BreadthFirstTraverse;
use DesignPattern\Behavorial\Strategy\DepthFirstTraverse;
use DesignPattern\Behavorial\Strategy\Node;
use DesignPattern\Behavorial\Strategy\Tree;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testDepthFirstTraverse(): void
    {
        $tree = $this->createTree();
        $tree->setTraverse(new DepthFirstTraverse());
        $result = $tree->traverse();
        $this->assertEquals([10, 15, 1, 2, 22, 4], $result);
    }

    public function testBreadthFirstTraverse(): void
    {
        $tree = $this->createTree();
        $tree->setTraverse(new BreadthFirstTraverse());
        $result = $tree->traverse();
        $this->assertEquals([10, 15, 22, 1, 2, 4], $result);
    }

    private function createTree(): Tree
    {
        $root  = new Node(null, 10);
        $left  = new Node($root, 15);
        $right = new Node($root, 22);
        $root->add($left);
        $root->add($right);
        $left->add(new Node($left, 1));
        $left->add(new Node($left, 2));
        $right->add(new Node($right, 4));

        return new Tree($root);
    }
}
