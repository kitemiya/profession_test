<?php

namespace ProfessionTest\ComponentsIterator\Contracts;

use ProfessionTest\Components\Contracts\ComponentInterface;

interface IteratorInterface
{
    public function __construct(ComponentInterface $component);

    public function add(ComponentInterface $component);

    public function remove(ComponentInterface $component);

}