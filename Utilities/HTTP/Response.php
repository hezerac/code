<?php
/**
 * REST API
 *
 */
namespace Utilities\HTTP;

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

    private function success(array $data)
    {
        return ['code' => $this->code, 'data' => $data];
    }

    private function error($message)
    {
        return ['error' => ['code' => $this->code, 'message' => $message]];
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

}
?>
​
