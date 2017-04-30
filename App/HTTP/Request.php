<?php   
/**
 * HTTP Request
 *
 */
namespace App\HTTP;

class Request  
{
    
    public function post()
    {
        return filter_var_array($_POST, FILTER_SANITIZE_STRING)
    }
    
    public function put()
    {
        return $_POST;
    }

}
