<?php

namespace ProfessionTest\ComponentsIterator\Contracts;

use ProfessionTest\Components\Contracts\AbstractComponent;

interface IteratorInterface
{
    public function add(AbstractComponent $component);

    public function remove(AbstractComponent $component);

    public function get(AbstractComponent $component);

}