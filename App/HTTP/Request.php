<?php   
/**
 * HTTP Request
 *
 */
namespace App/HTTP;

class Request  
{

    public function get()
    {   
        return [];
    }
    
    public function post()
    {
        return $_POST;
    }
    
    public function put()
    {
        return $_POST;
    }
    
    public function delete()
    {
        return [];
    }

}
