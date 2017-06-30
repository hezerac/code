<?php
/**
 * Crud Model
 *
 */
namespace App\Models;
    
class CrudModel extends Model
{
    public function getAll($user, CrudParser $parser = null)  
    {   
        $sql = 'stored_procedure_name_get_all';
        
        $params = [ 'user' => $user ];
        
        $parser->parse(
            parent::call($sql, $params)
        );
    }
    
    public function getOne($user, $id)  
    {       
        $sql = 'stored_procedure_name_get_one';
        
        $params = [
            'user' => $user,
            'id' => $id
        ];
        
        $data = parent::call($sql, $params);
        
        return $data[0][0];
    }
    
    public function create($user, array $request) 
    {
        $sql = 'stored_procedure_name_create';
        
        if (!isset($request['required_value']) || empty($request['required_value'])) {
            throw new Exception(__METHOD__ . '::Missing require value.', 400);
        }
        
        $params = [
            'user' => $user,
            'required' => $request['required_value'],
            'optional' => $request['optional_value'] ?? null
        ];
        
        $data = parent::call($sql, $params);
        
        return $data[0][0];
    }
    
    public function update($user, array $request, $id)  
    {
        $sql = 'stored_procedure_name_update';
        
        if (!isset($request['required_value']) || empty($request['required_value'])) {
            throw new Exception(__METHOD__ . '::Missing require value.', 400);
        }
        
        $params = [
            'user' => $user,
            'required' => $request['required_value'],
            'optional' => $request['optional_value'] ?? null,
            'id' => $id
        ];
        
        $data = parent::call($sql, $params);
        
        return $data[0][0];
    }
    
    public function delete($user, $id)  
    {
        $sql = 'stored_procedure_name_delete';
        
        $params = [
            'user' => $user,
            'id' => $id
        ];
        
        return parent::call($sql, $params);
    }
}
