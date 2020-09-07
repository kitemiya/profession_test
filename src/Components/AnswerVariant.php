<?php

namespace ProfessionTest\Components;

use ProfessionTest\Components\Contracts\ComponentInterface;

class AnswerVariant extends ComponentInterface
{

    /**
     * @var int
     */
    public $point;

    /**
     * @param int $point
     */
    public function __construct(string $point)
    {
        parent::__construct();
        $this->point = $point;
    }

    public function addComponent($point)
    {
        $this->parent->add($point);
    }
}
