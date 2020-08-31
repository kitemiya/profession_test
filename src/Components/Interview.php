<?php

namespace ProfessionTest\Components;

use ProfessionTest\Components\Contracts\CompositInterface;

class Interview extends CompositInterface
{
    /**
     * @var Question
     */
    public $question;

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
     * @param string $question
     * @return Question|string
     */
    public function addQuestion(string $question)
    {
        return $this->question = $question;
    }
}
