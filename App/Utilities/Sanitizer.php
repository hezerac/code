<?php
/**
 *
 *
 */

class Sanitizer
{

    public function encode($data)
    {
        return filter_var_array($data, FILTER_SANITIZE_SPECIAL_CHARS);
    }

}
