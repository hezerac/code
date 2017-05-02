<?php
/**
 * Router
 *
 */
namespace App\Routes;


class Router
{
    
    private $name = [];
    
    private $route = [];
    
    private $method = [];
    
    public function run()   
    {   
        foreach ($this->route as $key => $value) {
            
            if (!strstr($this->getUri(), $value)) continue;
            
            $parts = explode(':', $this->method[$key]);
            
            $controller = new App\HTTP\Controllers\$parts[0];
            
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
        }
    }
    
    public function get($route, $method)
    {       
        $this->add($route, $method))
    }   
    
    public function post($route, $method)  
    {       
        $this->add($route, $method))  
    }   
    
    public function put($route, $method)  
    {       
        $this->add($route, $method))
    }   
    
    public function delete($route, $method)  
    {       
        $this->add($route, $method))
    }
    
    public function name($name)
    {
        $this->name[] = $name;
    }
    
    private function add($route, $method))
    {
        $this->route[] = $route;
        
        $this->method[] = $method;  
    }
    
    private function getUri()
    {
        return '/' . ($_GET['uri'] ?? '');
    }

}

