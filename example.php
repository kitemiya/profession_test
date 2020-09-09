<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once('./vendor/autoload.php');

use \ProfessionTest\InterviewBuilder\ConcreteBuilder;

$interview = new ConcreteBuilder('Профессиональный тест');

$interview->createQuestion('Вопрос 1');

$interview->createAnswer('Ответ 1', '5');
$interview->createAnswer('Ответ 2', '1');

$interview->createQuestion('Вопрос 2');

$interview->createAnswer('Ответ 3', '1');
$interview->createAnswer('Ответ 4', '5');

print_r($interview);
