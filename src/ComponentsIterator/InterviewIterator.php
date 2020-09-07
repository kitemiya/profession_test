<?php

namespace ProfessionTest\ComponentsIterator;

use ProfessionTest\ComponentsIterator\Contracts\AbstractIterator;
use ProfessionTest\Components\Contracts\ComponentInterface;

class InterviewIterator extends AbstractIterator
{
    /**
     * @var ComponentInterface
     */
    private $question;

    /**
     * @var int
     */
    private $position = 0;

    public function __construct($question)
    {
        $this->question[$this->position] = $question;
    }

    public function add(ComponentInterface $component)
    {
        $this->position = $this->position +1;
        $this->question[$this->position] = $component;
        return $this->question[$this->position];
    }

    public function remove(ComponentInterface $component)
    {
        $this->question[$this->position] = null;
    }

}