<?php

require_once('Test.php');

class ExampleController
{
    private $testing;

    public function __construct(
        Test $testing
    ) {
        $this->testing = $testing;
    }

    public function interview() {
        $interview = new Test('Вопрос №1', 'Первый вариант ответа.');
        $question1 = $interview->createQuestion('Вопрос №1');
        $question1->createAnswerVariant('Первый вариант ответа.');

        return $interview;
    }
}
