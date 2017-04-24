

class Router
{
class Route



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


              $uri = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';		





              foreach($this->uri as $key => $value) {





                  if(strstr($uri, $value)) {





                      $parts = explode(':', $this->method[$key]);





                      $controller = new $parts[0]();





                      $method = $parts[1];





                      $controller->$method();


                  }		


              }	


          }





      }
}
