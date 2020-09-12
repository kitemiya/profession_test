<?php

namespace ProfessionTest\Components\Contracts;

use ProfessionTest\ComponentsIterator\ConcreteIterator;
use ProfessionTest\ComponentsIterator\Contracts\AbstractIterator;

abstract class AbstractComposite extends AbstractComponent
{
    /**
     * @var AbstractIterator;
     */
    protected AbstractIterator $children;

    /**
     * AbstractComposite constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        parent::__construct($title);
        $this->children = new ConcreteIterator();
    }

    /**
     * @return $this
     */
    public function getParent(): self
    {
        return $this;
    }

    /**
     * @return bool
     */
    public function isComposite(): bool
    {
        return true;
    }

    /**
     * @param AbstractComponent $component
     * @return AbstractComponent
     */
    public function addComponent(AbstractComponent $component)
    {
        $this->children->add($component);
        $component->setParent($this);
        return $component;
    }
}
