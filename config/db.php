<?php
include_once 'IDB.php';
class DB implements IDB{
    public static function connect($host,$dbname,$user,$password){
       try{
        $connection = new \PDO("mysql:host={$host};dbname={$dbname}","{$user}","{$password}");
        return $connection;
       }catch(\PDOException $e){
        echo $e->getMessage();
        }
    }
}



?>