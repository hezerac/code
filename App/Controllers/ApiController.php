<?php
/**
 * Api Controller
 *
 */
namespace App\Controllers;
 
use Psr\Http\Message\ServerRequestInterface as Request;
 
use Psr\Http\Message\ResponseInterface as Response;
 
use App\Interfaces\ApiInterface;
 
use App\Models\Model;
 
class ApiController implements ApiInterface
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
