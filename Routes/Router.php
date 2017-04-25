<?php
/**
 * Router
 *
 */
namespace Routes;

class Router
{
    private $uri = [];
    
    private $method = [];

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
    
    private function add($uri, $method))
    {
        $this->uri[] = $uri;
        
        $this->method[] = $method;  
    }
    

    public function execute()	
    {		
        $uri = htmlspecialchars($_GET['uri']);
        
        $destination = isset($uri) ? '/' . $uri : '/'; // fix this business

        foreach($this->uri as $key => $value) {
            
            if(!strstr($destination, $value)) continue;
            
            $parts = explode(':', $this->method[$key]);

            $controller = new $parts[0]();

            $method = $parts[1];
            
            $args = (substr_count($value, ':') > 2) // get $_GET[] params
                ? $this->getArgs($value) 
                : $this->getArg($value);

            $controller->$method($args);
        }	
    }
    
    private function getArg($value)
    {
        if(!strpos($value, ':')) return null;
            
        return '$' . implode(':', $value)[1]; 
    }
    
    private function getArgs($value)
    {
        $parts = explode(':', $value);
        
        $args = array_filter($parts, function($val) {
            
            if(!($val % 2)) return $val;
            
        }, ARRAY_FILTER_USE_KEY);
        
        return '$' . implode(', $', $args);
    }

}
