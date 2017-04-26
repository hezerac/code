<?php
/**
 * Database
 *
 */
namespace Database;
        
class Database
{	
    protected $db = null;

    public function __construct()	
    {		
        $this->db = Connection::established();
    }
    
    public function call($sql, array $params, $isStoredProcedure)
    {
        if($isStoredProcedure) {
            $sql = 'CALL '. $sql .'('. $this->placeholder($params) .')';
        }

        $stmt = $this->db->prepare($sql);
        
        $this->bindAll($stmt, $params);
        
        $stmt->execute();
    }	
      
    private function placeholder($params)	
    {
        return ':' . implode(', :', array_keys($params));	
    }	
      
    private function bindAll($stmt, $params) 
    {		
        foreach($params as $key => $value) {			

            $stmt->bindParam(':$key', $value);		
        }
    }

}

?>
