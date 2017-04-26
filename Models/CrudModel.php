<?php
/**
 * Crud Model
 */
namespace Models;
 
class CrudModel extends Model
{

    public function getAll($cookie)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_get_all';

        $p = [ 'cookie' => $cookie ];

        $data = $db->call($sql, $p, $isStoredProcedure);

        return $data[0];
    }
    
    public function getOne($cookie, $id)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_get_one';

        $p = [
            'cookie' => $cookie,
            'id' => $id
        ];

        $data = $db->call($sql, $p, $isStoredProcedure);

        return $data[0][0];
    }
    
    public function create($cookie, array $params)	
    {		
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_create';

        if(!isset($params['required_value']) || empty($params['required_value'])) {
            throw new \Exception(__METHOD__ . '::' . 'Missing require value.', 400);
        }

        $p = [
            'cookie' => $cookie,
            'required' => $params['required_value'],
            'optional' => isset($params['optional_value']) ? $params['optional_value'] : ''
        ];

        $data = $db->call($sql, $p, $isStoredProcedure);

        return $data[0][0];
    }

    public function update($cookie, array $params, $id)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_update';

        if(!isset($params['required_value']) || empty($params['required_value'])) {
            throw new \Exception(__METHOD__ . '::' . 'Missing require value.', 400);
        }

        $p = [
            'cookie' => $cookie,
            'required' => $params['required_value'],
            'optional' => isset($params['optional_value']) ? $params['optional_value'] : '',
            'id' => $id
        ];

        $data = $db->call($sql, $p, $isStoredProcedure);

        return $data[0][0];
    }
    
    public function delete($cookie, $id)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_delete';

        $p = [
            'cookie' => $cookie,
            'id' => $id
        ];

        $db->call($sql, $p, $isStoredProcedure);
    }
    
}
 
?>
