<?php

namespace ProfessionTest\Components\Contracts;

abstract class ComponentInterface
{
    /**
     * @var ComponentInterface
     */
    protected ComponentInterface $parent;

    /**
     * @return ComponentInterface
     */
    public function getParent(): ComponentInterface
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
