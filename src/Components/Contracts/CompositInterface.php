<?php

namespace ProfessionTest\Components\Contracts;

use ProfessionTest\ComponentsIterator\Contracts\AbstractIterator;

abstract class CompositInterface extends ComponentInterface
{
    /**
     * @var AbstractIterator;
     */
    protected $children;

    /**
     * @var array
     */
    private $component;

    /**
     * CompositInterface constructor.
     */
    public function __construct()
    {

    }

    public function getParent(): ComponentInterface
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
}
