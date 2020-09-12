<?php


namespace ProfessionTest\CompositeBuilders\Question;


use ProfessionTest\Components\AnswerVariant;
use ProfessionTest\Components\Question;
use ProfessionTest\CompositeBuilders\Contracts\AbstractBuilder;
use ProfessionTest\CompositeBuilders\Interview\Builder as InterviewBuilder;

class Builder extends InterviewBuilder
{
    public function addAnswerVariant(AnswerVariant $answerVariant) : AbstractBuilder
    {
        $this->composite->addComponent($answerVariant);
        return $this;
    }

    public function addQuestion(Question $composite)
    {
        $this->composite = self::$memory;
        return parent::addQuestion($composite);
    }

}