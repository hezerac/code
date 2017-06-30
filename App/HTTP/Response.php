<?php
/**
 * Response
 *
 */
namespace App\HTTP;
    
class Response   
{
    private $code = null;
    
    public function json($data)
    {
        header('Content-Type: application/json');
        
        return json_encode([
            'status' => $this->code, 
            'response' => $data
        ]);
    }
    
    public function setCode(int $code)
    {
        $this->code = $code;
    }
}
