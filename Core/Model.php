<?php

namespace Core;

use PDO;

/**
 * Base Model
 * PHP version 8.0
 */
abstract class Model{
    /**
     * Get PDO connection
     * @return mixed
     */
    protected static function getDBConnection(){
        static $con =null;
        if($con === null){
            $host = 'localhost';
            $dbname= 'test';
            $username='root';
            $password='password';
            $driver  = 'mysql';
            try{
                $con = new PDO("$driver:host=$host;dbname=$dbname;charset=utf8",$username,$password);
                return $con;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

    }
}