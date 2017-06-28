<?php
/**
 * Crud Controller
 *
 */
namespace App\HTTP\Controllers;
    
use App\Models\CrudModel;
    
use App\HTTP\Response;
    
class CrudController
{
    public function getAll()
    {
        try {
            
            $user = (new Cookie)->getCookie(); //TODO: make Cookie class
            
            $data = (new CrudModel)->getAll($user);
            
            (new Response)->json($data, 200);
            
        } catch (Exception $e) {
            
            (new Response)->json($e->getMessage(), $e->getCode());
        }
    }
    
    public function getOne($id)
    {
        try {
            
            $user = (new Cookie)->getCookie();
            
            $data = (new CrudModel)->getOne($user, $id);
            
            (new Response)->json($data, 200);
            
        } catch (Exception $e) {
            
            (new Response)->json($e->getMessage(), $e->getCode());
        }
    }
    
    public function create()
    {
        try {
            
            $user = (new Cookie)->getCookie();
            
            $request = (new Router)->request();
            
            $data = (new CrudModel)->create($user, $request);
            
            (new Response)->json($data, 201);
            
        } catch (Exception $e) {
            
            (new Response)->json($e->getMessage(), $e->getCode());
        }
    }
    
    public function update($id)
    {
        try {
            
            $user = (new Cookie)->getCookie();
            
            $request = (new Router)->request();
            
            $data = (new CrudModel)->update($user, $request, $id);
            
            (new Response)->json($data, 201);
            
        } catch (Exception $e) {
            
            (new Response)->json($e->getMessage(), $e->getCode());
        }
    }
    
    public function delete($id)
    {
        try {
            
            $user = (new Cookie)->getCookie();
            
            $data = (new CrudModel)->delete($user, $id);
            
            (new Response)->json($data, 204);
            
        } catch (Exception $e) {
            
            (new Response)->json($e->getMessage(), $e->getCode());
        }
    }
}
