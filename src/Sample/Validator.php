<?php

namespace Sample;

class Validator
{
    /**
     * @param mixed $v
     * @return bool
     */
    public function isNumber($v): bool
    {
        return is_numeric($v);
    }
}
