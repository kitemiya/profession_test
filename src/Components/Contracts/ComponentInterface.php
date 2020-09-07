<?php

namespace ProfessionTest\Components\Contracts;

use ProfessionTest\ComponentsIterator\Contracts\AbstractIterator;

abstract class ComponentInterface
{
    /**
     * @var ComponentInterface
     */
    protected $parent;

    public function __construct()
    {
    }

    public function setParent(ComponentInterface $parent): void
    {
        $this->parent = new AbstractIterator($this);
    }

    /**
     * @return ComponentInterface
     */
    public function getParent(): ComponentInterface
    {
        return $this->parent;
    }

    /**
     * @param ComponentInterface $component
     */
    abstract public function addComponent(ComponentInterface $component);

    /**
     * @return bool
     */
    public function isComposite(): bool
    {
        return false;
    }

}
