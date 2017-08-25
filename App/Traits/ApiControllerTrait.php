<?php
/**
 * Api Controller Trait
 *
 */
namespace App\Traits;
  
use Psr\Http\Message\ServerRequestInterface as Request;
 
use Psr\Http\Message\ResponseInterface as Response;
 
use App\Interfaces\ApiInterface;
 
use App\Traits\ApiControllerTrait;
 
use App\Models\Model;
 
trait ApiControllerTrait
{
    public function send(Request $request, Response $response)
    {
        try {
        
            $data = (new Model)->getData($request);
        
            return $response->withJson($data);
            
        } catch (\Exception $e) {
        
            return $response->withJson($e->getMessage(), $e->getCode());
    }
}
