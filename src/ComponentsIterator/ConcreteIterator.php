<?php
namespace ProfessionTest\ComponentsIterator;

use ProfessionTest\Components\Contracts\AbstractComponent;
use ProfessionTest\ComponentsIterator\Contracts\AbstractIterator;

class ConcreteIterator extends AbstractIterator
{
    public function get(AbstractComponent $component)
    {
        return $this->components[$component->id];
    }
}
