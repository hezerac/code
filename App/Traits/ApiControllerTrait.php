<?php
/**
 * Api Controller Trait
 *
 */
namespace App\Traits;

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
