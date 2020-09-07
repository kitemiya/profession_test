<?php

namespace ProfessionTest\ComponentsIterator\Contracts;

use ProfessionTest\Components\Contracts\ComponentInterface;

class AbstractIterator implements InterfaceIterator
{
    /**
     * @var ComponentInterface
     */
    private $component;

    /**
     * @var int
     */
    private $position = 0;

    public function __construct($component)
    {
        $this->component[$this->position] = $component;
    }

    public function add($component)
    {
        $this->position = $this->position +1;
        $this->component[$this->position] = $component;
        return $this->component[$this->position];
    }

    public function remove(ComponentInterface $component)
    {
        $this->component[$this->position] = null;
    }
}