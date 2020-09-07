<?php

namespace ProfessionTest\ComponentsIterator\Contracts;
use ProfessionTest\Components\Contracts\AbstractComponent;

abstract class AbstractIterator implements IteratorInterface
{
    /**
     * @var AbstractComponent[]
     */
    protected array $components = [];

    /**
     * @param AbstractComponent $component
     * @return AbstractComponent
     */
    public function add(AbstractComponent $component) : AbstractComponent
    {
        $this->components[$component->id] = $component;
        return $this->components[$component->id];
    }

    /**
     * @param AbstractComponent $component
     */
    public function remove(AbstractComponent $component) : void
    {
        unset($this->components[$component->id]);
    }
}