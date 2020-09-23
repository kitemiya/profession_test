<?php


namespace ProfessionTest\CompositeBuilders\Contracts;


use ProfessionTest\Components\Contracts\AbstractComposite;

abstract class AbstractBuilder implements BuilderInterface
{
    /**
     * @var AbstractComposite
     */
    protected static AbstractComposite $memory;
    protected AbstractComposite $composite;


    public function __construct(AbstractComposite $composite)
    {
        $this->composite = $composite;
    }


    final public function done()
    {
        return self::$memory;
    }

    public function __toString() // Для преобразования в представление в формате JSON.
    {

    }
}