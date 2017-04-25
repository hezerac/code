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
        $destination = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';
        


        foreach($this->uri as $key => $value) {

            $this->errorCheck($destination, $value); //WRONG! there will always be errors but for one. change this.
            
            $args = $this->getArgs($key);
            
            $parts = explode(':', $this->method[$key]);

            $controller = new $parts[0]();

            $method = $parts[1];

            $controller->$method($args);
        }	
    }
    
    public function getArgs($key)
    {   
        if(!strpos($this->uri[$key], ':')) return null;
        
        $args = explode(':', $this->uri[$key]);
        
        $results = [];
        
        foreach($args as $arg) {
            if($arg % 1 !== 0) {
                $results[] = $arg;
            }
        }
            
        return $results ? extract(array_combine($results, $results)) : null;
    }
    
    private function errorCheck($destination, $value)
    {
        if(!strstr($destination, $value)) {
            throw Exception(__METHOD__ . '::' . $e->getMessage(), $e->getCode());
        }
    }

}
