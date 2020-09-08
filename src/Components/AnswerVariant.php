<?php

namespace ProfessionTest\Components;
use ProfessionTest\Components\Contracts\AbstractComponent;

class AnswerVariant extends AbstractComponent
{

    /**
     * @var string
     */
    public string $point;

    /**
     * @var bool
     */
    protected bool $selected;

    /**
     * @param string $title
     * @param string $point
     */
    public function __construct(string $title, string $point)
    {
        parent::__construct($title);
        $this->point = $point;
    }

    /**
     * @return bool
     */
    public function isSelected(): bool
    {
        return $this->selected;
    }

    /**
     * @param bool $selected
     */
    public function setSelected(bool $selected): void
    {
        $this->selected = $selected;
    }
}
