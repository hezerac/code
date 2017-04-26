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

            $get = (new Request)->get();

            $data = (new CrudModel)->getAll($cookie, $get);

            $response = (new RestApi)->setCode(200)->render($data);

        } catch (Exception $e) {

            $response = (new RestApi)->setCode($e->getCode())->render($e->getMessage());
        }
    }

    public function getOne($id)
    {
        try {

            //$cookie = (new Cookie)->bake();

            $get = (new Request)->get();

            $data = (new CrudModel)->getOne($cookie, $get, $id);

            $response = (new RestApi)->setCode(200)->render($data);

        } catch (Exception $e) {

            $response = (new RestApi)->setCode($e->getCode())->render($e->getMessage());
        }
    }

    public function create()
    {
        try {

            //$cookie = (new Cookie)->bake();

            $post = (new Request)->post();

            $data = (new CrudModel)->create($cookie, $post);

            $response = (new RestApi)->setCode(200)->render($data);

        } catch (Exception $e) {

            $response = (new RestApi)->setCode($e->getCode())->render($e->getMessage());
        }
    }

    public function update($id)
    {
        try {

            //$cookie = (new Cookie)->bake();

            $put = (new Request)->put();

            $data = (new CrudModel)->update($cookie, $put, $id);

            $response = (new RestApi)->setCode(200)->render($data);

        } catch (Exception $e) {

            $response = (new RestApi)->setCode($e->getCode())->render($e->getMessage());
        }
    }

    public function delete($id)
    {
        try {

            //$cookie = (new Cookie)->bake();

            $delete = (new Request)->delete();

            $data = (new CrudModel)->delete($cookie, $delete, $id);

            $response = (new RestApi)->setCode(200)->render($data);

        } catch (Exception $e) {
            
            $response = (new RestApi)->setCode($e->getCode())->render($e->getMessage());
        }
    }

}
?>
