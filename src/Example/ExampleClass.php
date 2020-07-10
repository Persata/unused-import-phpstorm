<?php

namespace Example;

use DeepCopy\Filter\KeepFilter;

class ExampleClass
{
    /**
     * @var KeepFilter
     */
    private $keepFilter;

    public function __construct(KeepFilter $keepFilter)
    {
        $this->keepFilter = $keepFilter;
    }
}
