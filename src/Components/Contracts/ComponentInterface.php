<?php

namespace ProfessionTest\Components\Contracts;

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
        $this->parent = $parent;
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
