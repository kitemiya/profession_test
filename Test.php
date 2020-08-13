<?php

class Test
{
    public $question;
    public $answer;

//    public function __construct($question, $answer) {
//        $this->question = $question;
//        $this->answer = $answer;
//    }

    public function createQuestion($question) {
        $this->question = $question;
        return $this->question;
    }

    public function createAnswerVariant($answer) {
        $this->answer = $answer;
        return $this->answer;
    }
}
