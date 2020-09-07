<?php

namespace ProfessionTest\ComponentsIterator\Contracts;

use ProfessionTest\Components\Contracts\ComponentInterface;

abstract class AbstractIterator implements IteratorInterface
{
    /**
     * @var ComponentInterface
     */
    private $component;

    /**
     * @var int
     */
    private $position = 0;

    /**
     * AbstractIterator constructor.
     * @param ComponentInterface $component
     */
    public function __construct(ComponentInterface $component)
    {
        $this->component[$this->position] = $component;
    }

    /**
     * @param ComponentInterface $component
     * @return ComponentInterface
     */
    public function add(ComponentInterface $component)
    {
        $this->position = $this->position +1;
        $this->component[$this->position] = $component;
        return $this->component[$this->position];
    }

    /**
     * @param ComponentInterface $component
     */
    public function remove(ComponentInterface $component)
    {
        $this->component[$this->position] = null;
    }
}