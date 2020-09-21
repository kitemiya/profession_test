<?php

namespace ProfessionTest\CompositeBuilders\Interview;

use ProfessionTest\Components\Contracts\AbstractComposite;
use ProfessionTest\Components\Question;
use ProfessionTest\CompositeBuilders\Contracts\AbstractBuilder;

class Builder extends AbstractBuilder
{
    public function addQuestion(Question $question)
    {
        return $this->composite->addComponent($question);
    }

    public static function create(AbstractComposite $composite): AbstractBuilder
    {
        self::$memory = $composite;
        return new self($composite);
    }
}