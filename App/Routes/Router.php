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
    
    public function run()   
    {       
        $uri = htmlspecialchars($_GET['uri']);
        
        $destination = isset($uri) ? '/' . $uri : '/'; //TODO: fix this business

        foreach($this->uri as $key => $value) {
            
            if(!strstr($destination, $value)) continue;
            
            $parts = explode(':', $this->method[$key]);

            $controller = new $parts[0]();

            $method = $parts[1];
            
            $args = (substr_count($value, ':') > 1)
                ? $this->getArgs($value) 
                : $this->getArg($value);

            $controller->$method($args);
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
