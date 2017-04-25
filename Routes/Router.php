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
        $this->uri[] = $uri;

        $this->method[] = $method;	
    }	

    public function post($uri, $method)  
    {       
        $this->uri[] = $uri;
        
        $this->method[] = $method;  
    }   
    
    public function put($uri, $method)  
    {       
        $this->uri[] = $uri;
        
        $this->method[] = $method;  
    }   
    
    public function delete($uri, $method)  
    {       
        $this->uri[] = $uri;
        
        $this->method[] = $method;  
    } 

    public function execute()	
    {		
        $destination = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/'; // fix this business

        foreach($this->uri as $key => $value) {
            
            if(!strstr($destination, $value)) continue;
            
            $args = $this->getArgs($value);
            
            $parts = explode(':', $this->method[$key]);

            $controller = new $parts[0]();

            $method = $parts[1];

            $controller->$method($args);
        }	
    }
    
    public function getArgs($value)
    {   
        if(!strpos($value, ':')) return null;
        
        $parts = explode(':', $value);
        
        if(count($parts) === 1) {
            return '$' . $parts[0];
        }
        
        // params are in $parts[even]
        $args = array_filter($parts, function($val) {
            if(!($val % 2)) return $val;
        }, ARRAY_FILTER_USE_KEY);
        
        return '$' . implode(', $', $args);
    }

}
