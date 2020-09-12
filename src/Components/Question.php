<?php

namespace ProfessionTest\Components;

use ProfessionTest\Components\Contracts\AbstractComposite;

class Question extends AbstractComposite
{

    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        parent::__construct($title);
    }

}
