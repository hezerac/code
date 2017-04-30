<?php
/**
 *
 *
 */

class Sanitizer
{

    public function encode($data)
    {
        return htmlentities($data, ENT_QUOTES, 'UTF-8');
    }

}
