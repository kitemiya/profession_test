<?php

namespace ProfessionTest\Components;

use ProfessionTest\Components\Contracts\ComponentInterface;

class AnswerVariant extends ComponentInterface
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $point;

    /**
     * @param string $title
     * @param int $point
     */
    public function __construct(string $title, $point)
    {
        parent::__construct();
        $this->title = $title;
        $this->point = $point;
    }

    public function addComponent($point)
    {
        $this->children->add($point);
        $point->setParent($this);
    }
}
