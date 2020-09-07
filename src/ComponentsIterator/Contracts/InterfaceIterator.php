<?php

namespace ProfessionTest\ComponentsIterator\Contracts;

use ProfessionTest\Components\Contracts\ComponentInterface;

interface InterfaceIterator
{
    public function __construct($component);

    public function add(ComponentInterface $component);

    public function remove(ComponentInterface $component);

}