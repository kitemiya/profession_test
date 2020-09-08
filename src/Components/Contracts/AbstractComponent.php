<?php

namespace ProfessionTest\Components\Contracts;

abstract class AbstractComponent
{
    /**
     * @var AbstractComposite
     */
    protected AbstractComposite $parent;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $title;

    /**
     * AbstractComponent constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->id = uniqid();
        $this->title = $title;
    }

    /**
     * @param AbstractComposite $parent
     */
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
