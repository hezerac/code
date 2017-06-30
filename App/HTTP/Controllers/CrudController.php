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
            
            $user = (new Cookie)->getCookie(); //TODO: make authorization class
            
            $data = (new CrudModel)->getAll($user, new CrudParser);
            
            (new Response)->setCode(200)->json($data);
            
        } catch (Exception $e) {
            
            (new Response)->setCode($e->getCode())->json($e->getMessage());
        }
    }
    
    public function getOne($id)
    {
        try {
            
            $user = (new Cookie)->getCookie();
            
            $data = (new CrudModel)->getOne($user, $id);
            
            (new Response)->setCode(200)->json($data);
            
        } catch (Exception $e) {
            
            (new Response)->setCode($e->getCode())->json($e->getMessage());
        }
    }
    
    public function create()
    {
        try {
            
            $user = (new Cookie)->getCookie();
            
            $request = (new Router)->request();
            
            $data = (new CrudModel)->create($user, $request);
            
            (new Response)->setCode(201)->json($data);
            
        } catch (Exception $e) {
            
            (new Response)->setCode($e->getCode())->json($e->getMessage());
        }
    }
    
    public function update($id)
    {
        try {
            
            $user = (new Cookie)->getCookie();
            
            $request = (new Router)->request();
            
            $data = (new CrudModel)->update($user, $request, $id);
            
            (new Response)->setCode(201)->json($data);
            
        } catch (Exception $e) {
            
            (new Response)->setCode($e->getCode())->json($e->getMessage());
        }
    }
    
    public function delete($id)
    {
        try {
            
            $user = (new Cookie)->getCookie();
            
            $data = (new CrudModel)->delete($user, $id);
            
            (new Response)->setCode(204)->json($data);
            
        } catch (Exception $e) {
            
            (new Response)->setCode($e->getCode())->json($e->getMessage());
        }
    }
}
