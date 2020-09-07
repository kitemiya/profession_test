<?php

namespace ProfessionTest\Components;

use ProfessionTest\Components\Contracts\CompositInterface;

class Question extends CompositInterface
{

    /**
     * @var string
     */
    public $title;

    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        parent::__construct();
        $this->title = $title;
    }

    public function addComponent($answer)
    {
        $this->children->add($answer);
        $answer->setParent($this);
        return $this->children;
    }
}
