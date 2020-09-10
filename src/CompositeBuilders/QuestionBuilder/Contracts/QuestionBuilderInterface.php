<?php


namespace ProfessionTest\CompositeBuilders\QuestionBuilder\Contracts;


use ProfessionTest\Components\Contracts\AbstractComponent;

interface QuestionBuilderInterface
{
    public function createAnswerVariant(string $title);

    public function addAnswerVariant(string $title, string $points);
}