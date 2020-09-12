<?php


namespace ProfessionTest\CompositeBuilders\Contracts;


use ProfessionTest\Components\Contracts\AbstractComposite;
use ProfessionTest\Components\Question;
use ProfessionTest\CompositeBuilders\Question\Builder as QuestionBuilder;

abstract class AbstractBuilder implements BuilderInterface
{
    /**
     * @var AbstractComposite
     */
    protected static AbstractComposite $memory;
    protected AbstractComposite $composite;

    abstract public static function create(AbstractComposite $composite);

    public function __construct(AbstractComposite $composite)
    {
        self::$memory = $composite;
        $this->composite = $composite;
    }

    public function addQuestion(Question $question)
    {
        $this->composite->addComponent($question);
        self::$memory = $this->composite;
        return new QuestionBuilder($question);
    }


    final public function done()
    {
        return self::$memory;
    }

    public function __toString() // Для преобразования в представление в формате JSON.
    {

    }
}