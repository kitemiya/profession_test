<?php

namespace ProfessionTest\Components\Contracts;

use \ProfessionTest\ComponentsIterator\Contracts\InterviewIterator;

abstract class CompositInterface extends ComponentInterface
{
    /**
     * @var InterviewIterator;
     */
    protected $children;

    /**
     * @var array
     */
    private $components = [];

    /**
     * CompositInterface constructor.
     */
    public function __construct()
    {
        $this->children = new InterviewIterator($this);
    }

    /**
     * @param ComponentInterface $component
     */
    public function addComponent(ComponentInterface $component): void
    {
        $this->components[] = $component;
    }

    /**
     * @return array $components
     */

    public function getComponent()
    {
        return $this->components;
    }

    /**
     * @return bool
     */
    public function isComposite(): bool
    {
        return true;
    }
}
