<?php
/**
 * HTTP Response
 *
 */
namespace App\HTTP;
    
class Response   
{
    private $code = null;
    
    public function json($data)
    {
        header('Content-Type: application/json');
        
        return json_encode(
            $this->code >= 200 && $this->code <= 299
                ? $this->success($data)
                : $this->error($data)
        );
    }
    
    public function setCode(int $code) : void
    {
        $this->code = $code;
    }
    
    private function success(array $data) : array
    {
        return ['status' => $this->code, 'data' => $data];
    }
    
    private function error($message) : array
    {
        return ['status' => $this->code, 'error' => ['message' => $message]];
    }
}
