<?php
/**
 * Crud Controller
 */
namespace Controllers;
 
class CrudController
{
  
    public function get()
    {
        try {
            
            $app = new Request();
            $get = $app->response()->get();
         
            //$cookie = Cookie::bake;
            
            $model = new /Models/CrudModel();
            $data = $model->create($cookie, $get);
            
            $api = new /Utilities/RestApi();
            $api->setCode(200);
            $api->render($data);
        
        } catch (Exception $e) {
            
            $api = new /Utilities/RestApi();
            $api->setCode($e->getCode());
            $api->render($e->getMessage());
        }
    }
 
    public function create()
    {
        try {
            
            $app = new Request();
            $post = $app->response()->post();
         
            //$cookie = Cookie::bake();
            
            $model = new /Models/CrudModel();
            $data = $model->create($cookie, $post);
            
            $api = new /Utilities/RestApi();
            $api->setCode(200);
            $api->render($data);
        
        } catch (Exception $e) {
            
            $api = new /Utilities/RestApi();
            $api->setCode($e->getCode());
            $api->render($e->getMessage());
        }
    }
 
    public function update($id)
    {
        try {
            
            $app = new Request();
            $put = $app->response()->put();
         
            //$cookie = Cookie::bake();
            
            $model = new /Models/CrudModel();
            $data = $model->create($cookie, $put, $id);
            
            $api = new /Utilities/RestApi();
            $api->setCode(200);
            $api->render($data);
        
        } catch (Exception $e) {
            
            $api = new /Utilities/RestApi();
            $api->setCode($e->getCode());
            $api->render($e->getMessage());
        }
    }
 
    public function delete($id)
    {
        try {
         
            //$cookie = Cookie::bake();
            
            $model = new /Models/CrudModel();
            $data = $model->delete($cookie, $id);
            
            $api = new /Utilities/RestApi();
            $api->setCode(200);
            $api->render($data);
        
        } catch (Exception $e) {
            
            $api = new /Utilities/RestApi();
            $api->setCode($e->getCode());
            $api->render($e->getMessage());
        }
    }

}
?>
