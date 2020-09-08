<?php

namespace ProfessionTest\Components;

use ProfessionTest\Components\Contracts\AbstractComponent;
use ProfessionTest\Components\Contracts\AbstractComposite;

class Question extends AbstractComposite
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        parent::__construct();
        $this->title = $title;
    }


    public function addComponent(AbstractComponent $component)
    {
        // TODO: Implement addComponent() method.
    }
}
