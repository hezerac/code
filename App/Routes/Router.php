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
    {       
        $this->add($uri, $method))
    }   
    
    public function delete($uri, $method)  
    {       
        $this->add($uri, $method))
    }

    public function name($name) //TODO: name method
    {
        
    }
    
    private function add($uri, $method))
    {
        $this->uri[] = $uri;
        
        $this->method[] = $method;  
    }

    private function getArg($value)
    {
        if(!strpos($value, ':')) return null;
            
        return htmlentities(
            $_GET[explode(':', $value)[1]], 
            ENT_QUOTES, 
            'UTF-8'
        );
    }
    
    private function getArgs($value)
    {
        $parts = explode(':', $value); //TODO: must remove trailing slashes too
        
        $args = array_filter($parts, function($val, $key) 
        {
            if(!($key % 2)) return htmlentities(
                $_GET[$val], 
                ENT_QUOTES, 
                'UTF-8'
            );
        }, ARRAY_FILTER_USE_BOTH);
        
        return implode(', ', $args);
    }

}

?>
