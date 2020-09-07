<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once('./vendor/autoload.php');

use ProfessionTest\Components\Interview;
use ProfessionTest\Components\Question;
use ProfessionTest\Components\AnswerVariant;

$interview = new Interview('123');

$question1 = $interview->addComponent(new Question('Вопрос1'));
$question2 = $interview->addComponent(new Question('Вопрос2'));
$question3 = $interview->addComponent(new Question('Вопрос3'));

print_r($interview->getParent());
