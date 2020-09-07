<?php

namespace ProfessionTest\Components;

use ProfessionTest\Components\Contracts\CompositInterface;
use ProfessionTest\ComponentsIterator\InterviewIterator;

class Interview extends CompositInterface
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
        $this->children = new InterviewIterator($this);
    }

    /**
     * @param $question
     */
    public function addComponent($question)
    {
        $this->children->add($question);
        $question->setParent($this);
        return $this->children;
    }

}
