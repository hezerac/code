<?php
/**
 * Crud Model
 */
namespace Models;
 
class CrudModel extends Model
{

    public function getAll($user, array $request)  
    {
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_get_all';

        $params = [ 'user' => $user ];

        $data = parent::call($sql, $params, $isStoredProcedure);

        return $data[0];
    }
    
    public function getOne($user, array $request, $id)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_get_one';

        $params = [
            'user' => $user,
            'id' => $id
        ];

        $data = parent::call($sql, $params, $isStoredProcedure);

        return $data[0][0];
    }


    
    public function create($user, array $request) 
    {  
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_create';

        if(!isset($request['required_value']) || empty($request['required_value'])) {
            throw new \Exception(__METHOD__ . '::Missing require value.', 400);
        }

        $params = [
            'user' => $user,
            'required' => $request['required_value'],
            'optional' => isset($request['optional_value']) ? $request['optional_value'] : ''
        ];

        $data = parent::call($sql, $params, $isStoredProcedure);

        return $data[0][0];
    }

    public function update($user, array $request, $id)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_update';

        if(!isset($request['required_value']) || empty($request['required_value'])) {
            throw new \Exception(__METHOD__ . '::Missing require value.', 400);
        }

        $params = [
            'user' => $user,
            'required' => $request['required_value'],
            'optional' => isset($request['optional_value']) ? $request['optional_value'] : '',
            'id' => $id
        ];

        $data = parent::call($sql, $params, $isStoredProcedure);

        return $data[0][0];
    }

    
    public function delete($user, array $request, $id)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_delete';

        $params = [
            'user' => $user,
            'id' => $id
        ];

        parent::call($sql, $params, $isStoredProcedure);
    }
    
}
