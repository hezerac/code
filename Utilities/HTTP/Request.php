<?php   
/**
 * HTTP Request
 *
 */
namespace Utilities\HTTP;

class Request  
{

    public function get()
    {   
        header('HTTP/1.1 200 OK');
        return [];
    }
    
    public function post()
    {
        header('HTTP/1.1 201 Created');
        return $_POST;
    }
    
    public function put()
    {
        header('HTTP/1.1 201 Created');
        return $_POST;
    }
    
    public function delete()
    {
        header('HTTP/1.1 204 No Content');
        return [];
    }

}

?>
