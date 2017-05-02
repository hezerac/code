<?php
/**
 * Router
 *
 */
namespace App\Routes;


class Router
{
    
    private $name = [];

    private $uri = [];
    
    private $method = [];
    
    public function run()   
    {   
        foreach ($this->uri as $key => $value) {
            
            if (!strstr($this->getUri(), $value)) continue;
            
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
                
            case 'GET': return array_values($_GET);

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
    
    private function getUri()
    {
        return '/' . ($_GET['uri'] ?? '');
    }

}

