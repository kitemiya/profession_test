<?php

namespace ProfessionTest\InterviewBuilder;

use ProfessionTest\Components\AnswerVariant;
use ProfessionTest\Components\Contracts\AbstractComposite;
use ProfessionTest\Components\Interview;
use ProfessionTest\Components\Question;
use ProfessionTest\InterviewBuilder\Contracts\InterfaceBuilder;

class ConcreteBuilder implements InterfaceBuilder
{
    /**
     * @var AbstractComposite
     */
    private AbstractComposite $interview;

    /**
     * ConcreteBuilder constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->createInterview($title);
    }

    /**
     * @param string $title
     */
    public function createInterview(string $title)
    {
        $this->interview = new Interview($title);
    }

    /**
     * @param AbstractComposite $question
     */
    public function createQuestion($question)
    {
        $this->interview->addComponent(new Question($question));
    }

    /**
     * @param string $answer
     * @param string $point
     */
    public function createAnswer($answer, $point)
    {
        $this->interview->addComponent(new AnswerVariant($answer, $point));
    }

}