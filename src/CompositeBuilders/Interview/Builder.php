<?php

namespace ProfessionTest\CompositeBuilders\Interview;

use ProfessionTest\Components\Contracts\AbstractComposite;
use ProfessionTest\Components\Question;
use ProfessionTest\CompositeBuilders\Contracts\AbstractBuilder;
use ProfessionTest\CompositeBuilders\Question\Builder as QuestionBuilder;

class Builder extends AbstractBuilder
{
    public function addQuestion(Question $question)
    {
        $this->composite->addComponent($question);
        self::$memory = $this->composite;
        return new QuestionBuilder($question);
    }

    public static function create(AbstractComposite $composite): AbstractBuilder
    {
        self::$memory = $composite;
        return new self($composite);
    }

}