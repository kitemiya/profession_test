<?php

namespace ProfessionTest\InterviewBuilder\Contracts;

interface InterfaceBuilder
{
    public function createInterview(string $title);

    public function createQuestion($component);

    public function createAnswer(string $title, $component);

}