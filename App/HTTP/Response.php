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
        
        return json_encode([
            'status' => $this->code, 
            'data' => $data
        ]);
    }
    
    public function setCode(int $code) : void
    {
        $this->code = $code;
    }
}
