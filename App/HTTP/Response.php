<?php
/**
 * Response
 *
 */
namespace App\HTTP;
    
class Response   
{
    public function json($data, $code)
    {
        header('Content-Type: application/json');
        
        return json_encode([
            'status' => $code, 
            'response' => $data
        ]);
    }
}
