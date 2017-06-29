<?php
/**
 * Router
 *
 */
namespace App\Routes;
    
class Router
{
    private $route = [];
    
    private $method = [];
    
    public function run()   
    {   
        foreach ($this->route as $key => $value)
        {
            if (strpos($this->getUrl(), $value) === false) continue;
            
            is_callback($this->method[$key])
                ? call_user_func($this->method[$key])
                : $this->call($this->method[$key]);
        }   
    }
    
    public function request() : array
    {
        return $_SERVER['REQUEST_METHOD'] === 'GET' ? $_GET : $_POST;
    }
    
    public function redirect()
    {
        //TODO:
    }
    
    public function forUrl(string $name) : string
    {
        foreach ($this->route as $key => $value)
        {
            if ($key === $name) return $value;
        }
        
        throw new Exception('{$name} not found.', 404);
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
    
    public function name(string $name) : void
    {
        $key = count($this->route) - 1;
        
        $value = $this->route[$key];
        
        unset($this->route[$key]);
        
        $this->route[$name] = $value;
    }
    
    private function call(string $method)
    {
        $parts = explode(':', $method);
            
        $controller = new \App\HTTP\Controllers\$parts[0];
            
        $method = $parts[1];
            
        $args = array_values($this->request());
            
        $controller->$method(...$args);
    }
    
    private function add(string $route, $method) : void
    {
        $this->route[] = $route;
        
        $this->method[] = $method;
    }
    
    private function getUrl() : string
    {
        return '/' . ($_GET['url'] ?? '');
    }
}

