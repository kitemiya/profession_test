<?php

namespace ProfessionTest\Components;

use ProfessionTest\Components\Contracts\CompositInterface;

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

    }

    /**
     * @param $question
     */
    public function addComponent($question)
    {
        $this->children->add($question);
        $question->setParent($this);
        return $question;
    }

}
