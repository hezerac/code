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
        foreach (array_values($this->route) as $key => $value)
        {
            if (strpos($this->url(), $value) === false) continue;
            
            $this->call($this->method[$key]);
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
        throw new Exception(__METHOD__ . '::{$name} not found.', 404);
    }
    
    public function get($route, $method)
    {       
        $this->route[] = $route;
        
        $this->method[] = $method;
    }   
    
    public function post($route, $method)  
    {       
        $this->route[] = $route;
        
        $this->method[] = $method;
    }   
    
    public function put($route, $method)  
    {       
        $this->route[] = $route;
        
        $this->method[] = $method;
    }   
    
    public function delete($route, $method)  
    {       
        $this->route[] = $route;
        
        $this->method[] = $method;
    }
    
    public function name(string $name) : void
    {
        $key = count($this->route) - 1;
        
        $value = $this->route[$key];
        
        unset($this->route[$key]);
        
        $this->route[$name] = $value;
    }
    
    private function call($method)
    {
        if (is_callable($method)) return call_user_func($method);
        
        $parts = explode(':', $method);
            
        $controller = new \App\HTTP\Controllers\$parts[0];
            
        $method = $parts[1];
            
        $args = array_values($this->request());
            
        $controller->$method(...$args);
    }
    
    private function url() : string
    {
        return '/' . ($_GET['url'] ?? '');
    }
}

