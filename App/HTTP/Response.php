<?php
/**
 * HTTP Response
 *
 */
namespace App\HTTP;
    
class Response   
{
    private $code = null;
    
    public function json($data) : string
    {
        header('Content-Type: application/json');
        
        $response = $this->createResponse($data);
        
        return json_encode($response);
    }
    
    public function setCode(int $code) : void
    {
        $this->code = $code;
    }
    
    private function createResponse($data) : array
    {
        return ['status' => $this->code, $data];
    }
}
