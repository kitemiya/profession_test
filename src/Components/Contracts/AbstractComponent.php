<?php

namespace ProfessionTest\Components\Contracts;

abstract class AbstractComponent
{
    /**
     * @var AbstractComposite
     */
    protected AbstractComposite $parent;

    public string $id;

    public function __construct()
    {
        $this->id = uniqid();
    }

    public function setParent(AbstractComposite $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return AbstractComposite
     */
    public function getParent(): AbstractComposite
    {
        return $this->parent;
    }

    /**
     * @return bool
     */
    public function isComposite(): bool
    {
        return false;
    }

}
