<?php
/**
 * Model
 *
 */
namespace App\Models;
    
use Database\Connection;
    
use App\Utilities;
    
class Model
{
    protected $db = null;
        
    public function __construct()       
    {           
        $this->db = Connection::established(); //TODO fix this business
    }
    
    protected function call($sql, array $params, $isStoredProcedure)
    {
        if ($isStoredProcedure) {
            $sql = 'CALL '. $sql .'('. $this->placeholder($params) .')';
        }
        
        $stmt = $this->db->prepare($sql);
        
        $this->bindAll($stmt, $params);
        
        $stmt->execute();
        
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $sanitaryData = (new Sanitizer)->escape($data);
        
        return $sanitaryData;
    }   
      
    private function placeholder($params)       
    {
        return ':' . implode(', :', array_keys($params));       
    }   
      
    private function bindAll($stmt, $params) 
    {           
        foreach ($params as $key => $value) $stmt->bindParam(':$key', $value);
    }
}
