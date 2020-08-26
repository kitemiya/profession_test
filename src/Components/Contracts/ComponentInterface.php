<?php

namespace ProfessionTest\Components\Contracts;

abstract class ComponentInterface
{
    protected ComponentInterface $parent;

    public function setParent(ComponentInterface $parent)
    {
        $this->parent = $parent;
    }

    public function getParent(): ComponentInterface
    {
        return $this->parent;
    }

    public function isComposite(): bool
    {
        return false;
    }

}
