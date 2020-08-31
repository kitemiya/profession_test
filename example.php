<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once('./vendor/autoload.php');

use ProfessionTest\Components\Interview;

$interview = new Interview('123');

$question = $interview->addQuestion('WTF???');

print_r($interview);