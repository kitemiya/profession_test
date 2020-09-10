<?php

namespace ProfessionTest\CompositeBuilders\InterviewBuilder\Contracts;

use ProfessionTest\Components\Contracts\AbstractComponent;

interface InterviewBuilderInterface
{
    public function createQuestion(string $title);

    public function addQuestion(string $title);
}