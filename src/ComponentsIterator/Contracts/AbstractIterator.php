<?php

namespace ProfessionTest\ComponentsIterator\Contracts;

use ProfessionTest\Components\Contracts\ComponentInterface;

abstract class AbstractIterator implements InterfaceIterator
{
    abstract public function __construct($component);

    abstract public function add(ComponentInterface $component);

    abstract public function remove(ComponentInterface $component);
}