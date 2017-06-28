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
            
            if (strpos($this->getUrl(), $value) === false) continue;
            
            $parts = explode(':', $this->method[$key]);
            
            $controller = new \App\HTTP\Controllers\$parts[0];
            
            $method = $parts[1];
            
            $args = array_values($this->request());
            
            $controller->$method(...$args);
        }   
    }
    
    public function request()
    {
        return $_SERVER['REQUEST_METHOD'] === 'GET' ? $_GET : $_POST;
    }
    
    public function redirect()
    {
        //TODO:
    }
    
    public function forUrl()
    {
        //TODO:
    }
    
    public function get(string $route, $method)
    {       
        if (is_callable($method)) {
            call_user_func($method);
            return;
        }
        
        $this->route[] = $route;
        
        $this->method[] = $method;
    }   
    
    public function post(string $route, $method)  
    {       
        if (is_callable($method)) {
            call_user_func($method);
            return;
        }
        
        $this->route[] = $route;
        
        $this->method[] = $method;  
    }   
    
    public function put(string $route, $method)  
    {       
        if (is_callable($method)) {
            call_user_func($method);
            return;
        }
        
        $this->route[] = $route;
        
        $this->method[] = $method;
    }   
    
    public function delete(string $route, $method)  
    {       
        if (is_callable($method)) {
            call_user_func($method);
            return;
        }
        
        $this->route[] = $route;
        
        $this->method[] = $method;
    }
    
    public function name($name)
    {
        //$this->name[] = $name;
    }
    
    private function getUrl()
    {
        return '/' . ($_GET['url'] ?? '');
    }
}

