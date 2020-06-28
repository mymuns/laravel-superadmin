<?php

namespace Sumantablog\Admin\Form\Field;

use Sumantablog\Admin\Form\Field;

class Nullable extends Field
{
    public function __construct()
    {
    }

    public function __call($method, $parameters)
    {
        return $this;
    }
}
