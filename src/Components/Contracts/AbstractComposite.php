<?php

namespace ProfessionTest\Components\Contracts;

use ProfessionTest\ComponentsIterator\ConcreteIterator;
use ProfessionTest\ComponentsIterator\Contracts\AbstractIterator;

abstract class AbstractComposite extends AbstractComponent
{
    /**
     * @var AbstractIterator;
     */
    protected AbstractIterator $children;
    /**
     * AbstractComposite constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        parent::__construct($title);
        $this->children = new ConcreteIterator();
    }

    /**
     * @return $this
     */
    public function getParent(): self
    {
        return $this;
    }

    /**
     * @return bool
     */
    public function isComposite(): bool
    {
        return true;
    }

    /**
     * @param AbstractComponent $component
     * Этот метод только в AbstractComposite!
     * Обрати внимание, что Все они компоненты. Есть простые, а есть Составные :)
     * Вот метод проверяющий isComposite? Мы им проверяем, имеет ли право объект иметь детей :)
     */
    abstract public function addComponent(AbstractComponent $component);
}
