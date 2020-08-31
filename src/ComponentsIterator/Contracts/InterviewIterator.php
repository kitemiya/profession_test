<?php

namespace ProfessionTest\ComponentsIterator\Contracts;

use ProfessionTest\Components\Contracts\ComponentInterface;

class InterviewIterator implements \Iterator
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
        $this->question = $question;
    }

    public function current()
    {
        return $this->question->getComponent()[$this->position];
    }

    public function next()
    {
        $this->position = $this->position + 1;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->question->getComponent()[$this->position]);
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
    }
}