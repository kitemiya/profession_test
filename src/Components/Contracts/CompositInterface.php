<?php

namespace ProfessionTest\Components\Contracts;

abstract class CompositInterface extends ComponentInterface
{
    protected \SplObjectStorage $children;

    public function __construct()
    {
        $this->children = new \SplObjectStorage();
    }

    public function add(ComponentInterface $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);
    }

    public function remove(ComponentInterface $component): void
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    public function isComposite(): bool
    {
        return true;
    }
}
