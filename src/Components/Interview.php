<?php

namespace ProfessionTest\Components;

use ProfessionTest\Components\Contracts\AbstractComposite;

class Interview extends AbstractComposite
{
    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        parent::__construct($title);

    }

    /**
     * @param $question
     * @return Contracts\AbstractComponent
     */
    public function addComponent($question)
    {
        $this->children->add($question);
        $question->setParent($this);
        return $question;
    }

}
