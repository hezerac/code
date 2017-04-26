<?php
/**
 * Crud Model
 */
namespace Models;
 
class CrudModel extends Model
{

    public function getAll($cookie, array $params)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_get_all';

        if(!isset($params['required_value']) || empty($params['required_value'])) {
            throw new \Exception(__METHOD__ . '::' . 'Missing require value.', 400);
        }

        $p = [
            'cookie' => $cookie,
            'required' => $params['required_value'],
            'optional' => isset($params['optional_value']) ? $params['optional_value'] : ''
        ];

        $data = $db->call($sql, $p, $isStoredProcedure);

        return $data[0];
    }
    
    public function getOne($cookie, array $params)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_get_one';

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

    public function update($cookie, array $params)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_update';

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
    
    public function delete($cookie, array $params)  
    {       
        $isStoredProcedure = true;

        $sql = 'stored_procedure_name_delete';

        if(!isset($params['required_value']) || empty($params['required_value'])) {
            throw new \Exception(__METHOD__ . '::' . 'Missing require value.', 400);
        }

        $p = [
            'cookie' => $cookie,
            'required' => $params['required_value'],
            'optional' => isset($params['optional_value']) ? $params['optional_value'] : ''
        ];

        $db->call($sql, $p, $isStoredProcedure);
    }
    
}
 
?>
