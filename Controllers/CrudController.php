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
            
            $app = new Route();
            $post = $app->response()->post();
            //$cookie = Cookie::bake();
            
            $model = new /Models/CrudModel();
            $data = $model->create($cookie, $post);
            
            $api = new Path/RestApi();
            $api->setCode(200);
            $api->render($data);
        
        } catch (Exception $e) {
            
            $api = new Path/ToThe/RestApi();
            $api->setCode($e->getCode());
            $api->render($e->getMessage());
        }
    }
 
 }
 
    public function create()
    {
        try {
            
            $app = new Route();
            $post = $app->response()->post();
            //$cookie = Cookie::bake();
            
            $model = new /Models/CrudModel();
            $data = $model->create($cookie, $post);
            
            $api = new Path/RestApi();
            $api->setCode(200);
            $api->render($data);
        
        } catch (Exception $e) {
            
            $api = new Path/ToThe/RestApi();
            $api->setCode($e->getCode());
            $api->render($e->getMessage());
        }
    }
 
 
    public function create()
    {
        try {
            
            $app = new Route();
            $post = $app->response()->post();
            //$cookie = Cookie::bake();
            
            $model = new /Models/CrudModel();
            $data = $model->create($cookie, $post);
            
            $api = new Path/RestApi();
            $api->setCode(200);
            $api->render($data);
        
        } catch (Exception $e) {
            
            $api = new Path/ToThe/RestApi();
            $api->setCode($e->getCode());
            $api->render($e->getMessage());
        }
    }
 


 
?>
