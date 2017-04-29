<?php
/**
 * Crud API Controller
 *
 */
namespace App/Controllers/API;

use App/Models/CrudModel;

use App/HTTP/{Request, Response};


class CrudApiController
{

    public function getAll()
    {
        try {

            //$user = (new Cookie)->bake(); //TODO: make Cookie class

            //$request = (new Request)->get();

            $data = (new CrudModel)->getAll($user, $request);

            $response = (new Response)->setCode(200)->json($data);

        } catch (Exception $e) {

            $error = (new Response)->setCode($e->getCode())->json($e->getMessage());
        }
    }

    public function getOne($id)
    {
        try {

            //$user = (new Cookie)->bake();

            //$request = (new Request)->get();

            $data = (new CrudModel)->getOne($user, $request, $id);

            $response = (new Response)->setCode(200)->json($data);

        } catch (Exception $e) {

            $error = (new Response)->setCode($e->getCode())->json($e->getMessage());
        }
    }

    public function create()
    {
        try {

            //$user = (new Cookie)->bake();

            $request = (new Request)->post();

            $data = (new CrudModel)->create($user, $request);

            $response = (new Response)->setCode(201)->json($data);

        } catch (Exception $e) {

            $error = (new Response)->setCode($e->getCode())->json($e->getMessage());
        }
    }
  
    public function update($id)
    {
        try {

            //$user = (new Cookie)->bake();

            $request = (new Request)->put();

            $data = (new CrudModel)->update($user, $request, $id);

            $response = (new Response)->setCode(201)->json($data);

        } catch (Exception $e) {

            $error = (new Response)->setCode($e->getCode())->json($e->getMessage());
        }
    }

    public function delete($id)
    {
        try {

            //$user = (new Cookie)->bake();

            //$request = (new Request)->delete();

            $data = (new CrudModel)->delete($user, $request, $id);

            $response = (new Response)->setCode(204)->json($data);

        } catch (Exception $e) {
            
            $error = (new Response)->setCode($e->getCode())->json($e->getMessage());
        }
    }

}
