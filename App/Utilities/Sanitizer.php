<?php
/**
 * Sanitizer
 *
 */
namespace App\Utilities;
    
class Sanitizer
{
    public function escape(array $data) : array
    {
        return filter_var_array($data, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}
