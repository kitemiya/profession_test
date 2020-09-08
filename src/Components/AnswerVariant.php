<?php

namespace ProfessionTest\Components;
use ProfessionTest\Components\Contracts\AbstractComponent;

class AnswerVariant extends AbstractComponent
{

    /**
     * @var int
     */
    public int $point;

    protected bool $selected;

    /**
     * @param int $point
     */
    public function __construct(int $point)
    {
        parent::__construct();
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
