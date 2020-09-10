<?php

namespace ProfessionTest\Components;

use ProfessionTest\Components\Contracts\AbstractComponent;
use ProfessionTest\Components\Contracts\AbstractComposite;

class Question extends AbstractComposite
{

    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        parent::__construct($title);
    }

    /**
     * @param AbstractComponent $answer
     * @return AbstractComponent
     */
    public function addComponent($answer)
    {
        $this->children->add($answer);
        $answer->setParent($this);
        return $answer;
    }

}
