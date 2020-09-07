<?php


namespace ProfessionTest\ComponentsIterator;

use ProfessionTest\Components\Contracts\ComponentInterface;
use ProfessionTest\ComponentsIterator\Contracts\AbstractIterator;

class QuestionIterator extends AbstractIterator
{
    private $answer;

    /**
     * @var int
     */
    private $position = 0;

    public function __construct($answer)
    {
        $this->answer[$this->position] = $answer[$this->position];
    }

    public function add(ComponentInterface $component)
    {
        $this->position = $this->position +1;
        $this->answer[$this->position] = $component;
        return $this->answer[$this->position];
    }

    public function remove(ComponentInterface $component)
    {
        $this->answer[$this->position] = null;
    }
}