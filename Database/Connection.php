<?php
/**
 * Connection
 *
 */
namespace Database;

class Connection
{
  
    private static $pdo;
      
    public static function established()
    {
        return self::$pdo ?: self::$pdo = new PDO(
            'mysql:host=localhost;dbname=specialdb;charset=utf8mb4',
            'user',
            'pass'
        );
    }
      
}
