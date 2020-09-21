<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once('./vendor/autoload.php');

use ProfessionTest\Components\AnswerVariant;
use ProfessionTest\Components\Interview;
use ProfessionTest\Components\Question;
use ProfessionTest\CompositeBuilders\Interview\Builder as InterviewBuilder;

/**
 * Без Билдера
*/

//$interview = new Interview('i1');
//$question = new Question('q1');
//$answers = [
//    ['title' => 'ans1', 'points' => 1],
//    ['title' => 'ans2', 'points' => 2],
//    ['title' => 'ans3', 'points' => 3]
//];
//
//foreach ($answers as $answer) {
//    $question->addComponent(new AnswerVariant($answer['title'], $answer['points']));
//}
//
//$interview->addComponent($question);

/**
 * С Билдером
 */

$interview = InterviewBuilder::create(new Interview('Interview 1'))
    ->addQuestion(new Question('Question 1'))
    ->addAnswerVariant(new AnswerVariant('AnsV 1', 2))
    ->addAnswerVariant(new AnswerVariant('AnsV 2', 3))
    ->addQuestion(new Question('Question 2'))
    ->addAnswerVariant(new AnswerVariant('AnsV 1', 1))
    ->addAnswerVariant(new AnswerVariant('AnsV 2', 4))
    ->addAnswerVariant(new AnswerVariant('AnsV 3', 5))
    ->done();
;
