<?php
/**
 * Crud Model
 */
namespace Models;
 
class CrudModel extends Model
{

    public function getAll($cookie, array $request)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_get_all';

        $params = [ 'cookie' => $cookie ];

        $data = $db->call($sql, $params, $isStoredProcedure);

        return $data[0];
    }
    
    public function getOne($cookie, array $request, $id)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_get_one';

        $params = [
            'cookie' => $cookie,
            'id' => $id
        ];

        $data = $db->call($sql, $params, $isStoredProcedure);

        return $data[0][0];
    }
    
    public function create($cookie, array $request)	
    {		
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_create';

        if(!isset($request['required_value']) || empty($request['required_value'])) {
            throw new \Exception(__METHOD__ . '::' . 'Missing require value.', 400);
        }

        $params = [
            'cookie' => $cookie,
            'required' => $request['required_value'],
            'optional' => isset($request['optional_value']) ? $request['optional_value'] : ''
        ];

        $data = $db->call($sql, $params, $isStoredProcedure);

        return $data[0][0];
    }

    public function update($cookie, array $request, $id)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_update';

        if(!isset($request['required_value']) || empty($request['required_value'])) {
            throw new \Exception(__METHOD__ . '::' . 'Missing require value.', 400);
        }

        $params = [
            'cookie' => $cookie,
            'required' => $request['required_value'],
            'optional' => isset($request['optional_value']) ? $request['optional_value'] : '',
            'id' => $id
        ];

        $data = $db->call($sql, $params, $isStoredProcedure);

        return $data[0][0];
    }
    
    public function delete($cookie, array $request, $id)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_delete';

        $params = [
            'cookie' => $cookie,
            'id' => $id
        ];

        $db->call($sql, $params, $isStoredProcedure);
    }
    
}
 
?>
