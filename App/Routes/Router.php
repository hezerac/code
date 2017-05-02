<?php
/**
 * Router
 *
 */
namespace App\Routes;

use App\Utilities;

class Router
{
    
    private $name = [];

    private $uri = [];
    
    private $method = [];
    
    public function run()   
    {       
        $uri = htmlspecialchars($_GET['uri']);
        
        $destination = isset($uri) ? '/' . $uri : '/'; //TODO: fix this business

        foreach ($this->uri as $key => $value) {
            
            if (!strstr($destination, $value)) continue;
            
            $parts = explode(':', $this->method[$key]);

            $controller = new App\HTTP\Controllers\$parts[0]();

            $method = $parts[1];
            
            $args = $this->request();

            $controller->$method(...$args);
        }   
    }
    
    public function request()
    {
        switch ($_SERVER['REQUEST_METHOD']) {
                
            case 'GET': return $_GET;

            case 'POST': return $_POST;

            default null;
        }
    }
    
    public function get($uri, $method)
    {       
        $this->add($uri, $method))
    }   

    public function post($uri, $method)  
    {       
        $this->add($uri, $method))  
    }   
    
    public function put($uri, $method)  
    {       
        $this->add($uri, $method))
    }   
    
    public function delete($uri, $method)  
    {       
        $this->add($uri, $method))
    }

    public function name($name)
    {
        $this->name[] = $name;
    }
    
    private function add($uri, $method))
    {
        $this->uri[] = $uri;
        
        $this->method[] = $method;  
    }

}

