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
            
            if ($this->isCallback($this->method[$key])) continue;
            
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
    
    public function get($route, $method)
    {       
        $this->add($route, $method);
    }   
    
    public function post($route, $method)  
    {       
        $this->add($route, $method);
    }   
    
    public function put($route, $method)  
    {       
        $this->add($route, $method);
    }   
    
    public function delete($route, $method)  
    {       
        $this->add($route, $method);
    }
    
    public function name($name)
    {
        //$this->name[] = $name;
    }
    
    private function isCallback($method) : bool
    {
        if (!is_callable($method)) return false;
            
        call_user_func($method); return true;
    }
    
    private function add(string $route, string $method) : void
    {
        $this->route[] = $route;
        
        $this->method[] = $method;
    }
    
    private function getUrl() : string
    {
        return '/' . ($_GET['url'] ?? '');
    }
}

