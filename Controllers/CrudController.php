<?php
/**
 * Crud Controller
 */
namespace Controllers;

use \Models\CrudModel;
use \Utilities\RestApi;
use \Dir\Request //TODO: Make/add Request dir

class CrudController
{

    public function getAll()
    {
        try {

            //$cookie = (new Cookie)->bake();

            $request = (new Request)->get();

            $data = (new CrudModel)->getAll($cookie, $request);

            $response = (new RestApi)->setCode(200)->response($data);

        } catch (Exception $e) {

            $response = (new RestApi)->setCode($e->getCode())->response($e->getMessage());
        }
    }

    public function getOne($id)
    {
        try {

            //$cookie = (new Cookie)->bake();

            $request = (new Request)->get();

            $data = (new CrudModel)->getOne($cookie, $request, $id);

            $response = (new RestApi)->setCode(200)->response($data);

        } catch (Exception $e) {

            $response = (new RestApi)->setCode($e->getCode())->response($e->getMessage());
        }
    }

    public function create()
    {
        try {

            //$cookie = (new Cookie)->bake();

            $request = (new Request)->post();

            $data = (new CrudModel)->create($cookie, $request);

            $response = (new RestApi)->setCode(200)->response($data);

        } catch (Exception $e) {

            $response = (new RestApi)->setCode($e->getCode())->response($e->getMessage());
        }
    }

    public function update($id)
    {
        try {

            //$cookie = (new Cookie)->bake();

            $request = (new Request)->put();

            $data = (new CrudModel)->update($cookie, $request, $id);

            $response = (new RestApi)->setCode(200)->response($data);

        } catch (Exception $e) {

            $response = (new RestApi)->setCode($e->getCode())->response($e->getMessage());
        }
    }

    public function delete($id)
    {
        try {

            //$cookie = (new Cookie)->bake();

            $request = (new Request)->delete();

            $data = (new CrudModel)->delete($cookie, $request, $id);

            $response = (new RestApi)->setCode(200)->response($data);

        } catch (Exception $e) {
            
            $response = (new RestApi)->setCode($e->getCode())->response($e->getMessage());
        }
    }

}
?>
