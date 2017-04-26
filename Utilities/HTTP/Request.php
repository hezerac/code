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
        //return get_headers($url);
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

?>
